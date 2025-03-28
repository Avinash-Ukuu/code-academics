<?php

namespace App\Http\Controllers\cms;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{

    public function getCourse($id)
    {
        $course     = Course::with('durations')->find($id);

        if ($course) {
            $durations = $course->durations->map(function ($duration) {
                return [
                    'duration' => $duration->duration,
                    'mrp' => $duration->mrp,
                    'fix_price' => $duration->fix_price
                ];
            });

            return response()->json([
                'durations' => $durations
            ]);
        } else {
            return response()->json([]);
        }
    }
}
