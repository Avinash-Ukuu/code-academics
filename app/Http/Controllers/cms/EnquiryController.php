<?php

namespace App\Http\Controllers\cms;

use Carbon\Carbon;
use App\Models\Course;
use App\Models\Enquiry;
use App\Mail\EnquiryMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data       =   Enquiry::join('courses', 'courses.id', '=', 'enquiries.course_id')->select(
                'enquiries.id as id',
                'enquiries.name as name',
                'enquiries.email as email',
                'enquiries.phone as phone',
                'enquiries.date as date',
                'enquiries.education_level as education_level',
                'enquiries.source as source',
                'enquiries.notes as notes',
                'courses.name as course_name'
            );

            if ($request->order == null) {
                $data->orderBy('enquiries.date', 'desc');
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->filterColumn('course_name', function ($query, $keyword) {
                    $sql = "courses.name LIKE ?";
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->rawColumns(['course_name'])
                ->make(true);
        }

        return view('cms.enquiry.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['object']             =       new Enquiry();
        $data['method']             =       'POST';
        $data['url']                =       route('enquiry.store');
        $data['courses']            =       Course::where('is_active','1')->pluck('name','id')->toArray();
        $data['educationLevels']    =       [
                                                'Primary' => 'Primary (Class 1-5)',
                                                'Middle' => 'Middle (Class 6-8)',
                                                'Secondary' => 'Secondary (Class 9-10)',
                                                'Higher Secondary' => 'Higher Secondary (Class 11-12)',
                                                'Diploma' => 'Diploma',
                                                'Undergraduate' => 'Undergraduate (Bachelor’s Degree)',
                                                'Postgraduate' => 'Postgraduate (Master’s Degree)',
                                                'Doctorate' => 'Doctorate (Ph.D.)',
                                                'Others' => 'Others'
                                            ];

        $data['sources']            =       [
                                                'Social Media'              => 'Social Media',
                                                'Advertisement'             => 'Advertisement',
                                                'Referral'                  => 'Referral',
                                                'Walk-in (Office Visit)'    => 'Walk-in (Office Visit)',
                                                'Phone Call'                => 'Phone Call',
                                                'Email Inquiry'             => 'Email Inquiry'
                                            ];

        return  view('cms.enquiry.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'                  => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email'                 => ['required', 'email'],
            'phone'                 => ['required', 'digits:10'],
            'education_level'       => ['required'],
            'course_id'             => ['required'],
            'source'                => ['required'],
            'note'                  => ['nullable', 'string']
        ]);

        $enquiry                    =       new Enquiry();
        $enquiry->name              =       $request->name;
        $enquiry->email             =       $request->email;
        $enquiry->phone             =       $request->phone;
        $enquiry->date              =       Carbon::today()->toDateString();
        $enquiry->course_id         =       $request->course_id;
        $enquiry->education_level   =       $request->education_level;
        $enquiry->source            =       $request->source;
        $enquiry->notes             =       $request->notes;
        $enquiry->save();

        Session::flash('success', 'Enquiry Submitted');
        return redirect(route('enquiry.index'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function storeEnquiry(Request $request)
    {
        $validated  =    $request->validate([
                                'name'      => 'required|string|max:255',
                                'email'     => 'required|email',
                                'phone'     => 'required|string|max:15',
                                'message'   => 'required|string',
                            ]);

        Mail::to('admin@example.com')->send(new EnquiryMail($validated));
        // Mail::to('codeacademicss@gmail.com')->send(new EnquiryMail($validated));

        return response()->json(['success' => 'Enquiry submitted successfully!']);
    }
}
