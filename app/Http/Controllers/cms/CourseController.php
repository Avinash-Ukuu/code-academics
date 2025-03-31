<?php

namespace App\Http\Controllers\cms;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data       =   Course::join('users', 'users.id', '=', 'courses.added_by')->select(
                'courses.id as id',
                'courses.name as name',
                'courses.slug as slug',
                'courses.is_active as is_active',
                'users.name as added_by'
            );

            if ($request->order == null) {
                $data->orderBy('courses.created_at', 'desc');
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->filterColumn('added_by', function ($query, $keyword) {
                    $sql = "users.name LIKE ?";
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->editColumn('is_active', function($data){
                    if($data->is_active == 1)
                    {
                        return '<span class="badge badge-success"> Active </span>';
                    }else{
                        return '<span class="badge badge-danger"> In Active </span>';
                    }
                })
                ->editColumn('action', function ($data) {

                    $editUrl        =   route('course.edit', ['course' => $data->id]);
                    $deleteUrl      =   route('course.destroy', ['course' => $data->id]);
                    $btn            =   '<div class="row">';
                    $btn            .=  '<a href="' . $editUrl . '"><i class="fa fa-edit"></i></a>';
                    if (auth()->user()->hasRole('admin')) {
                        $btn        .=  '<a style="cursor: pointer;"
                                            onclick="deleteItem(\'' . $deleteUrl . '\')">
                                            <i class="fa fa-trash text-red ml-3"></i>
                                        </a>';
                    }
                    $btn            .=  '</div>';

                    return $btn;
                })
                ->rawColumns(['added_by', 'is_active' ,'action'])
                ->make(true);
        }

        return view('cms.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['object']         =       new Course();
        $data['method']         =       'POST';
        $data['url']            =       route('course.store');

        return  view('cms.course.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $course                 =       new Course();
        $course->name           =       $request->name;
        $course->description    =       $request->description;
        $course->slug           =       Str::slug($request->name, '-');
        $course->added_by       =       auth()->user()->id;
        $course->is_active      =       isset($request->is_active) ? 1 : 0;
        $course->save();

        foreach ($request->durations as $durationData) {
            $course->durations()->create([
                'duration' => $durationData['duration'],
                'mrp' => $durationData['mrp'],
                'fix_price' => $durationData['fix_price']
            ]);
        }

        $data['message']        =       auth()->user()->name . " has created " . $course->name;
        $data['action']         =       "created";
        $data['module']         =       "course";
        $data['object']         =       $course;
        saveLogs($data);
        Session::flash("success", "student Register");

        return redirect(route('course.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['object']         =       Course::with('durations')->find($id);
        if(empty($data['object']))
        {
            Session::flash('error','Data not found');

            return back();
        }
        $data['method']         =       'PUT';
        $data['url']            =       route('course.update', ['course' => $id]);

        return  view('cms.course.form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, string $id)
    {
        $course                 =       Course::find($id);
        $course->name           =       $request->name;
        $course->slug           =       Str::slug($request->name, '-');
        $course->description    =       $request->description;
        $course->is_active      =       isset($request->is_active) ? 1 : 0;
        $course->update();

        $existingDurationIds = $course->durations()->pluck('id')->toArray();
        $newDurationIds = [];

        foreach ($request->durations as $durationData) {
            if (isset($durationData['id']) && in_array($durationData['id'], $existingDurationIds)) {
                // Update existing duration
                $course->durations()->where('id', $durationData['id'])->update([
                    'duration' => $durationData['duration'],
                    'mrp' => $durationData['mrp'],
                    'fix_price' => $durationData['fix_price']
                ]);
                $newDurationIds[] = $durationData['id'];
            } else {
                // Create new duration
                $newDuration = $course->durations()->create([
                    'duration' => $durationData['duration'],
                    'mrp' => $durationData['mrp'],
                    'fix_price' => $durationData['fix_price']
                ]);
                $newDurationIds[] = $newDuration->id;
            }
        }

        // Find deleted durations and remove them
        $durationsToDelete = array_diff($existingDurationIds, $newDurationIds);
        if (!empty($durationsToDelete)) {
            $course->durations()->whereIn('id', $durationsToDelete)->delete();
        }


        $data['message']        =       auth()->user()->name . " has updated " . $course->name;
        $data['action']         =       "updated";
        $data['module']         =       "course";
        $data['object']         =       $course;
        saveLogs($data);
        Session::flash("success", "student Register");

        return redirect(route('course.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize("admin", new User());

        $course             =   Course::find($id);
        if (empty($course)) {
            Session::flash("error", "Course Already Deleted");
            return back();
        }
        $course->durations()->delete();
        $data['message']        =   auth()->user()->name . " has deleted $course->name";
        $data['action']         =   "deleted";
        $data['module']         =   "course";
        $data['object']         =   $course;
        saveLogs($data);
        $course->delete();
        Session::flash("success", "Course Deleted");
        return response()->json(['Data Deleted'], 200);
    }
}
