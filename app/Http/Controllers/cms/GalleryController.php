<?php

namespace App\Http\Controllers\cms;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {
            $data       =   Gallery::join('gallery_categories', 'gallery_categories.id', '=', 'galleries.gallery_category_id')->select(
                'galleries.id as id',
                'galleries.title as title',
                'galleries.url as url',
                'galleries.created_at as created_at',
                'gallery_categories.name as gallery_category_name',
            );

            if ($request->order == null) {
                $data->orderBy('created_at', 'desc');
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image',function($data){

                    $extension = pathinfo($data->url, PATHINFO_EXTENSION);

                    if(in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif'])) {
                        return  "<div class='image'>
                                    <img src='".asset('uploads/gallery/'.$data->url)."' height='50px' width='50px' class='img-circle elevation-2' alt='$data->title'>
                                </div>";
                    }else
                    {
                        return  "<div class='image'>
                                    <img src='".asset('assets/frontend/images/video.png')."' height='50px' width='50px' class='img-circle elevation-2' alt='$data->title'>
                                </div>";
                    }
                })
                ->addColumn('action', function ($data) {
                    $editUrl        =   route('gallery.edit', ['gallery' => $data->id]);
                    $deleteUrl      =   route('gallery.destroy', ['gallery' => $data->id]);
                    $btn            =   '<div class="row">';
                    $btn            .=  '<a href="' . $editUrl . '"><i class="fa fa-edit ml-2 mr-2"></i></a>';
                    if(auth()->user()->hasRole('superAdmin'))
                    {
                        $btn        .=  '<a style="cursor: pointer;"
                                            onclick="deleteItem(\'' . $deleteUrl . '\')">
                                            <i class="fa fa-trash text-red ml-3"></i>
                                        </a>';
                    }
                    $btn            .=  '</div>';

                    return $btn;
                })
                ->rawColumns(['image','gallery_category_name','action'])
                ->make(true);
        }

        return view('cms.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['object']             =   new Gallery();
        $data['method']             =   'POST';
        $data['url']                =   route('gallery.store');
        $data['galleryCategories']  =   GalleryCategory::pluck('name','id')->toArray();

        return view('cms.gallery.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gallery_category_id'   => 'required|exists:gallery_categories,id',
            'title'                 => 'nullable|string|max:255',
            'media'                 => 'required|file|mimes:jpg,jpeg,png|max:3072',
        ]);

        $gallery            =   new Gallery();
        $gallery->title     =   $request->title;
        $gallery->gallery_category_id     =   $request->gallery_category_id;
        if ($request->hasFile('media')) {
            $imageName  = "gallery_" . Carbon::now()->timestamp. '.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move(public_path('uploads/gallery/'), $imageName);
            $gallery->url   =  $imageName;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery files uploaded successfully.');
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
        $data['object']             =   Gallery::find($id);
        if(empty($data['object']))
        {
            Session::flash("error","Data not found");

            return back();
        }
        $data['method']             =   'PUT';
        $data['url']                =   route('gallery.update',['gallery'=>$id]);
        $data['galleryCategories']  =   GalleryCategory::pluck('name','id')->toArray();

        return view('cms.gallery.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gallery_category_id'   => 'required|exists:gallery_categories,id',
            'title'                 => 'nullable|string|max:255',
            'media'                 => 'nullable|file|mimes:jpg,jpeg,png|max:3072',
        ]);

        $gallery            =   Gallery::find($id);
        if(empty($gallery))
        {
            Session::flash("error","Data not found");
            return redirect(route("gallery.index"));
        }
        $gallery->title     =   $request->title;
        $gallery->gallery_category_id     =   $request->gallery_category_id;
        if ($request->has("media")) {
            if (file_exists("uploads/gallery/" . $gallery->url)) {
                File::delete("uploads/gallery/" . $gallery->url);
            }
            $imageName  = "gallery_" . Carbon::now()->timestamp . '.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move(public_path('uploads/gallery/'), $imageName);
            $gallery->url   =  $imageName;
        }
        $gallery->update();

        return redirect()->route('gallery.index')->with('success', 'Gallery  updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize("superAdmin", new User());
        $gallery                   =   Gallery::find($id);
        if (empty($gallery)) {
            Session::flash("error", "Data not found");
            return back();
        }
        if (file_exists("uploads/gallery/" . $gallery->url)) {
                File::delete("uploads/gallery/" . $gallery->url);
        }
        $data['message']        =   auth()->user()->name . " has deleted '$gallery->title' gallery ";
        $data['action']         =   "deleted";
        $data['module']         =   "gallery";
        $data['object']         =   $gallery;
        saveLogs($data);
        $gallery->delete();
        Session::flash("success", "Data Deleted");

        return response()->json(['success' => '200', 'message' => 'Data Deleted']);
    }
}
