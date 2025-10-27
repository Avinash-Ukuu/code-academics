<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\QuizCategory;
use Illuminate\Http\Request;

class QuizCategoryController extends Controller
{
    public function index()
    {
        $data['quizCategories']     =   QuizCategory::all();

        return view('cms.quiz.category',$data);
    }
}
