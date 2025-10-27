<?php

namespace App\Http\Controllers\cms;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\QuizCategory;
use Illuminate\Http\Request;
use App\Models\QuizSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\QuizSubCategoryRequest;

class QuizSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['quizSubCategories']      =   QuizSubCategory::with('quizCategory')->get();

        return view('cms.quiz.subCategory.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['object']             =       new QuizSubCategory();
        $data['method']             =       'POST';
        $data['url']                =       route('quiz-subcategory.store');
        $data['quizCategories']     =       QuizCategory::pluck('name','id')->toArray();

        return view('cms.quiz.subCategory.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuizSubCategoryRequest $request)
    {
        $quizSubCategory                        =       new QuizSubCategory();
        $quizSubCategory->quiz_category_id      =       $request->quiz_category_id;
        $quizSubCategory->name                  =       $request->name;
        $quizSubCategory->slug                  =       Str::slug($request->name, '-');
        $quizSubCategory->save();
        Session::flash('success', 'Data store Successfully');

        return redirect(route('quiz-subcategory.index'));
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
        $data['object']             =       QuizSubCategory::find($id);
        if(empty($data['object']))
        {
            Session::flash('error', "data not found");

            return back();
        }
        $data['method']             =       'PUT';
        $data['url']                =       route('quiz-subcategory.update',['quiz_subcategory'=>$id]);
        $data['quizCategories']     =       QuizCategory::pluck('name','id')->toArray();

        return view('cms.quiz.subCategory.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuizSubCategoryRequest $request, string $id)
    {
        $quizSubCategory                        =       QuizSubCategory::find($id);
        if(empty($quizSubCategory))
        {
            Session::flash('error','Data not found');
            return redirect(route('quiz-subcategory.index'));
        }
        $quizSubCategory->quiz_category_id      =       $request->quiz_category_id;
        $quizSubCategory->name                  =       $request->name;
        $quizSubCategory->slug                  =       Str::slug($request->name, '-');
        $quizSubCategory->update();
        Session::flash('success', 'Data store Successfully');

        return redirect(route('quiz-subcategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $this->authorize('admin', new User());

        // $quizSubCategory                    =   QuizSubCategory::find($id);
        // if (empty($quizSubCategory)) {
        //     Session::flash("error", "Data Not Found");
        //     return back();
        // }

        // $data['message']            =   auth()->user()->name . " has deleted " . $quizSubCategory->name;
        // $data['action']             =   "deleted";
        // $data['module']             =   "quizSubCategory";
        // $data['object']             =   $quizSubCategory;
        // saveLogs($data);
        // $quizSubCategory->questions->delete();
        // $quizSubCategory->delete();
        // Session::flash("success", "Quiz SubCategory Deleted");
        // return redirect(route('quiz-subcategory.index'));
    }
}
