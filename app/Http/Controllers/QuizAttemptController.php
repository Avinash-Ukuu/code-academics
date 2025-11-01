<?php

namespace App\Http\Controllers;

use App\Models\QuizStat;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;

class QuizAttemptController extends Controller
{
    public function start(Request $request)
    {
        $request->validate([
            'quiz_user_id' => 'required|exists:quiz_users,id',
            'quiz_category_id' => 'required|exists:quiz_categories,id',
        ]);

        $attempt = QuizAttempt::create([
            'quiz_user_id' => $request->quiz_user_id,
            'quiz_category_id' => $request->quiz_category_id,
            'status' => 'started',
            'started_at' => now(),
            'ip_address' => $request->ip(),
            'device_info' => $request->header('User-Agent'),
            'attempt_no' => QuizAttempt::where('quiz_user_id', $request->quiz_user_id)->count() + 1,
        ]);

        $stat = QuizStat::firstOrCreate(['quiz_user_id' => $request->quiz_user_id], [
            'total_visits' => 0,
            'total_attempts' => 0,
            'average_score' => 0,
        ]);

        $stat->increment('total_attempts');
        $stat->last_played_at = now();
        $stat->save();

        return response()->json(['message' => 'Attempt started', 'data' => $attempt]);
    }

    public function end(Request $request, $id)
    {
        $request->validate([
            'total_score' => 'required|numeric|min:0',
        ]);

        $attempt = QuizAttempt::findOrFail($id);
        $attempt->update([
            'status' => 'completed',
            'ended_at' => now(),
            'total_score' => (int)$request->total_score,
            'completed' => true,
        ]);

        // update average score in stats
        $stat = QuizStat::firstOrCreate(['quiz_user_id' => $attempt->quiz_user_id]);
        $attemptCount = QuizAttempt::where('quiz_user_id', $attempt->quiz_user_id)
            ->where('completed', true)
            ->count();
        $average = QuizAttempt::where('quiz_user_id', $attempt->quiz_user_id)
            ->where('completed', true)
            ->avg('total_score') ?? 0;

        $stat->total_attempts = $attemptCount;
        $stat->average_score = (float)$average;
        $stat->last_played_at = now();
        $stat->save();

        return response()->json(['message' => 'Attempt ended', 'data' => $attempt]);
    }
}
