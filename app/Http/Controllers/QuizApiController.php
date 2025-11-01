<?php

namespace App\Http\Controllers;

use App\Models\QuizCategory;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use App\Models\QuizSubCategory;

class QuizApiController extends Controller
{
     public function getCategories()
    {
        return response()->json(QuizCategory::select('id','name')->get());
    }

    public function getSubcategories($category_id)
    {
        return response()->json(
            QuizSubCategory::where('quiz_category_id', $category_id)
                ->select('id','name')
                ->get()
        );
    }

    public function getQuestions($subcategory_id)
    {
        $questions = QuizQuestion::where('quiz_subcategory_id', $subcategory_id)
            ->select('id','question','option_a','option_b','option_c','option_d','correct_option','difficulty_level')
            ->get();

        return response()->json($questions);
    }
}
