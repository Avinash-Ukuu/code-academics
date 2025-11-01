<?php

namespace App\Http\Controllers;

use App\Models\QuizUser;
use App\Models\QuizVisit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class QuizUserController extends Controller
{
    public function startOrGetGuest(Request $request)
    {
        $request->validate([
            'unique_token'  => 'nullable|string',
            'page'          => 'nullable|string|max:255',
        ]);

        $ip     = $request->ip();
        $token  = $request->input('unique_token');


        $quizUser = null;
        if ($token) {
            $quizUser = QuizUser::where('unique_token', $token)->first();
        }


        if (!$quizUser) {
            $quizUser = QuizUser::create([
                'name' => 'Guest_' . rand(1000, 99999),
                'is_guest' => 1,
                'unique_token' => $token ?? Str::uuid(),
            ]);
        }


        QuizVisit::create([
            'quiz_user_id' => $quizUser->id,
            'ip_address' => $ip,
            'user_agent' => $request->header('User-Agent'),
            'page' => $request->input('page', 'unknown'),
            'visited_at' => now(),
        ]);

        
        return response()->json([
            'message' => 'Guest user active',
            'quiz_user' => $quizUser,
        ]);
    }

    /**
     * Update guest user info when they decide to provide details.
     * Turns guest into registered quiz user.
     */
    public function updateInfo(Request $request)
    {
        $request->validate([
            'quiz_user_id' => 'required|exists:quiz_users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:quiz_users,email,' . $request->quiz_user_id,
            'phone' => 'nullable|string|max:20',
        ]);

        $quizUser = QuizUser::find($request->quiz_user_id);

        $quizUser->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_guest' => 0,
        ]);

        return response()->json([
            'message' => 'User info updated successfully',
            'quiz_user' => $quizUser,
        ]);
    }

    /**
     * Get full quiz user profile (including visits & stats)
     */
    public function getUser($id)
    {
        $quizUser = QuizUser::with(['visits'])->findOrFail($id);

        return response()->json([
            'quiz_user' => $quizUser,
        ]);
    }
}
