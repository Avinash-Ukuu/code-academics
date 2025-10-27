<?php

namespace App\Http\Controllers\cms;

use App\Models\User;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use App\Models\QuizSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\QuizQuestionRequest;

class QuizQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['questions']      =       QuizQuestion::with('subCategory')->get();

        return view('cms.quiz.question.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['object']                 =       new QuizQuestion();
        $data['method']                 =       'POST';
        $data['url']                    =       route('quiz-questions.store');
        $data['quizSubCategories']      =       QuizSubCategory::pluck('name','id')->toArray();
        $data['difficultyLevels']       =       ["easy"=>"Easy","medium"=>"Medium","hard"=>"Hard"];

        return view('cms.quiz.question.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuizQuestionRequest $request)
    {
        $question                           =   new QuizQuestion();
        $question->quiz_subcategory_id      =   $request->quiz_subcategory_id;
        $question->difficulty_level         =   $request->difficulty_level;
        $question->question                 =   $request->question;
        $question->option_a                 =   $request->option_a;
        $question->option_b                 =   $request->option_b;
        $question->option_c                 =   $request->option_c;
        $question->option_d                 =   $request->option_d;
        $question->correct_option           =   $request->correct_option;
        $question->explanation              =   $request->explanation;
        $question->save();
        Session::flash('success', 'Data store Successfully');

        return redirect(route('quiz-questions.index'));
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
        $data['object']                 =       QuizQuestion::find($id);
        if(empty($data['object']))
        {
            Session::flash('error', "Data not found");
            return back();
        }
        $data['method']                 =       'PUT';
        $data['url']                    =       route('quiz-questions.update',['quiz_question'=>$id]);
        $data['quizSubCategories']      =       QuizSubCategory::pluck('name','id')->toArray();
        $data['difficultyLevels']       =       ["easy"=>"Easy","medium"=>"Medium","hard"=>"Hard"];

        return view('cms.quiz.question.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuizQuestionRequest $request, string $id)
    {
        $question                           =   QuizQuestion::find($id);
        if(empty($question))
        {
            Session::flash('error', "Data not found");
            return redirect(route('quiz-questions.index'));
        }
        $question->quiz_subcategory_id      =   $request->quiz_subcategory_id;
        $question->difficulty_level         =   $request->difficulty_level;
        $question->question                 =   $request->question;
        $question->option_a                 =   $request->option_a;
        $question->option_b                 =   $request->option_b;
        $question->option_c                 =   $request->option_c;
        $question->option_d                 =   $request->option_d;
        $question->correct_option           =   $request->correct_option;
        $question->explanation              =   $request->explanation;
        $question->update();
        Session::flash('success', 'Data update Successfully');

        return redirect(route('quiz-questions.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $this->authorize('admin', new User());

        // $question                    =   QuizQuestion::find($id);
        // if (empty($question)) {
        //     Session::flash("error", "Data Not Found");
        //     return back();
        // }

        // $data['message']            =   auth()->user()->name . " has deleted " . $question->name;
        // $data['action']             =   "deleted";
        // $data['module']             =   "question";
        // $data['object']             =   $question;
        // saveLogs($data);
        // $question->delete();
        // Session::flash("success", "Quiz question Deleted");
        // return redirect(route('quiz-questions.index'));
    }
}
