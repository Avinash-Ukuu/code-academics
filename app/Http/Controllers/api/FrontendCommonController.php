<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\GalleryCategory;
use App\Models\Student;
use Illuminate\Http\Request;

class FrontendCommonController extends Controller
{
    public function getCourses()
    {
        $courses    =   Course::where('is_active',1)->whereNull('parent_id')->select('id', 'name', 'slug', 'image','parent_id')
                                ->with(['durations:id,course_id,duration','children' => function ($query) {
                                                                                                $query->select('id', 'name', 'slug', 'image', 'parent_id')
                                                                                                    ->where('is_active', 1);
                                                                                            }])->get();

        return response()->json([
            'status'    => true,
            'courses'   => $courses
        ]);
    }

    public function courseDetail($slug)
    {
        $course     =   Course::with('durations')->where('slug', $slug)->where('is_active',1)->first();

        if (!$course) {
            return response()->json([
                'status'    => false,
                'message'   => 'Course not found'
            ], 404);
        }

        $otherCourses = Course::where('is_active',1)->where('slug','<>',$slug)->whereNull('parent_id')->select('id', 'name', 'slug', 'image','parent_id')
                                ->with(['durations:id,course_id,duration','children' => function ($query) {
                                                                                                $query->select('id', 'name', 'slug', 'image', 'parent_id')
                                                                                                    ->where('is_active', 1);
                                                                                            }])->get();

        return response()->json([
            'status'        => true,
            'course'        => $course,
            'otherCourses'  => $otherCourses
        ]);
    }

    public function getBlogs()
    {
        $blogs    =   Blog::where('publish_type','publish')->select('id', 'title', 'slug', 'image','blog_created_at')->orderBy('blog_created_at','desc')->get();

        return response()->json([
            'status' => true,
            'blogs'  => $blogs
        ]);
    }

    public function blogDetail($slug)
    {
        $blog           =   Blog::where('slug', $slug)->where('publish_type', 'publish')->first();

        if (!$blog) {
            return response()->json([
                'status' => false,
                'message' => 'Blog not found'
            ], 404);
        }

        $postUrl        =   url("/blog/{$slug}");
        $postTitle      =   urlencode($blog->title);

        $socialLinks    =   [
                                'facebook' => "https://www.facebook.com/sharer/sharer.php?u={$postUrl}",
                                'twitter'  => "https://twitter.com/intent/tweet?url={$postUrl}&text={$postTitle}",
                                'linkedin' => "https://www.linkedin.com/sharing/share-offsite/?url={$postUrl}"
                            ];

        $otherBlogs     =   Blog::where('slug', '<>', $slug)->where('publish_type', 'publish')->select('id', 'title', 'slug', 'image', 'created_at')
                                ->latest()->take(10)->get();

        $courses        =   Course::where('is_active', 1)->whereNull('parent_id')->select('id', 'name', 'slug', 'image')->get();

        return response()->json([
            'status' => true,
            'blog' => $blog,
            'socialLinks' => $socialLinks,
            'otherBlogs' => $otherBlogs,
            'courses' => $courses
        ]);
    }

    public function gallery()
    {
        $categories     =   GalleryCategory::whereHas('galleries')->with('galleries')->get();

        $allGalleries   =   $categories->flatMap->galleries;

        return response()->json([
            'status' => true,
            'categories' => $categories,
            'allGalleries' => $allGalleries
        ]);
    }

    public function verifyStudentCertificate(Request $request)
    {
        $request->validate([
            'roll_number' => 'required',
            'father_name' => 'required'
        ]);

        $student    =   Student::where('unique_id', $request->roll_number)
                                ->where('father_name', $request->father_name)
                                ->with('studentCourse.course')
                                ->first();

        if ($student) {
            return response()->json([
                'status' => 'success',
                'data' => [
                    'name' => $student->first_name . ' ' . $student->last_name,
                    'course_name' => $student->studentCourse->course->name ?? 'N/A',
                    'status' => $student->is_completed ? 'Completed' : 'Not Completed',
                ]
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Student not found'
            ]);
        }
    }

}
