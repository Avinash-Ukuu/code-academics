<?php

namespace App\Http\Controllers\cms;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\GalleryCategoryRequest;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['galleryCategories']      =       GalleryCategory::all();

        return view('cms.galleryCategory.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['object']         =   new GalleryCategory();
        $data['method']         =   'POST';
        $data['url']            =   route('gallery-category.store');

        return view('cms.galleryCategory.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryCategoryRequest $request)
    {
        $galleryCategory                =       new GalleryCategory();
        $galleryCategory->name          =       $request->name;
        $galleryCategory->slug          =       Str::slug($request->name);
        $galleryCategory->description   =       $request->description;
        $galleryCategory->save();

        Session::flash('success','Data Store');
        return redirect(route('gallery-category.index'));
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
        $data['object']         =   GalleryCategory::find($id);
        if(empty($data['object']))
        {
            Session::flash("error","Data not found");

            return back();
        }
        $data['method']         =   'PUT';
        $data['url']            =   route('gallery-category.update',['gallery_category'=>$id]);

        return view('cms.galleryCategory.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryCategoryRequest $request, string $id)
    {
        $galleryCategory                =       GalleryCategory::find($id);
        if(empty($galleryCategory))
        {
            Session::flash("error","Data not found");

            return back();
        }
        $galleryCategory->name          =       $request->name;
        $galleryCategory->slug          =       Str::slug($request->name);
        $galleryCategory->description   =       $request->description;
        $galleryCategory->update();

        Session::flash('success','Data Updated');
        return redirect(route('gallery-category.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize("superAdmin", new User());
        $galleryCategory                   =   GalleryCategory::find($id);
        if (empty($galleryCategory)) {
            Session::flash("error", "Data not found");
            return back();
        }
        foreach ($galleryCategory->galleries as $gallery) {
            if ($gallery->url && file_exists("uploads/gallery/".$gallery->url)) {
                File::delete("uploads/gallery/".$gallery->url);
            }

            $gallery->delete();
        }
        $data['message']        =   auth()->user()->name . " has deleted '$galleryCategory->name' gallery Category";
        $data['action']         =   "deleted";
        $data['module']         =   "galleryCategory";
        $data['object']         =   $galleryCategory;
        saveLogs($data);
        $galleryCategory->delete();
        Session::flash("success", "Data Deleted");

        return redirect(route("gallery-category.index"));
    }
}
