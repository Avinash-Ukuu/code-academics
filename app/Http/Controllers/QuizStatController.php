<?php

namespace App\Http\Controllers;

use App\Models\QuizStat;
use Illuminate\Http\Request;

class QuizStatController extends Controller
{
    public function show($quizUserId)
    {
        $stats = QuizStat::where('quiz_user_id', $quizUserId)->first();
        return response()->json($stats);
    }

    // Update stats after each quiz
    public function updateStats(Request $request, $quizUserId)
    {
        $stats = QuizStat::firstOrCreate(['quiz_user_id' => $quizUserId]);

        $stats->increment('total_visits', $request->input('visits', 0));
        $stats->increment('total_attempts', $request->input('attempts', 0));
        $stats->average_score = $request->input('average_score', $stats->average_score);
        $stats->last_played_at = now();
        $stats->save();

        return response()->json(['message' => 'Stats updated', 'data' => $stats]);
    }
}
