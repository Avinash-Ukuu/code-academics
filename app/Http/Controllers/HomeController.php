<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function home()
    {
        $data['courses']        =       Course::with('durations')->where('is_active',1)->whereNull('parent_id')->get();
        $data['blogs']          =       Blog::where('publish_type','publish')->take(5)->orderBy('blog_created_at','desc')->get();
        $data['galleries']      =       Gallery::take(10)->get();

        return view('home',$data);
    }

    public function thankyou()
    {
        return view('thankyou');
    }

    public function coursePage()
    {
        $data['courses']        =       Course::whereNull('parent_id')->where('is_active',1)->get();

        return view('coursePage',$data);
    }

    public function blogPage()
    {
        $data['blogs']          =       Blog::where('publish_type','publish')->orderBy('blog_created_at','desc')->get();

        return view('blog',$data);
    }

    public function blogDetail($slug)
    {
        $data['blog']           =       Blog::where('slug',$slug)->where('publish_type','publish')->first();

        if(empty($data['blog']))
        {
            return response()->view('errors.404', [], 404);
        }

        $postUrl                =       url("/blog/{$slug}");
        $postTitle              =       urlencode($data['blog']->title);

        $data['socialLinks']    =       [
                                            'facebook' => "https://www.facebook.com/sharer/sharer.php?u={$postUrl}",
                                            'twitter'  => "https://twitter.com/intent/tweet?url={$postUrl}&text={$postTitle}",
                                            'linkedin' => "https://www.linkedin.com/sharing/share-offsite/?url={$postUrl}"
                                        ];

        $data['otherBlogs']     =       Blog::where('slug','<>',$slug)->where('publish_type','publish')->take(10)->get();
        $data['courses']        =       Course::where('is_active',1)->whereNull('parent_id')->get();

        return view('blogDeatil',$data);
    }

    public function aboutUs()
    {
        return view('aboutus');
    }

    public function contact()
    {
        return view('contact');
    }

    public function verification()
    {
        return view('verification');
    }

    public function gallery()
    {
        $categories     =   GalleryCategory::whereHas('galleries')->with('galleries')->get();
        $allGalleries   =   $categories->flatMap->galleries;

        return view('gallery', compact('categories', 'allGalleries'));
    }

    public function courseDetail($slug)
    {
        $data['course']         =   Course::where('slug',$slug)->first();
        abort_if(empty($data['course']), 404);
        $data['otherCourses']   =   Course::where('is_active',1)->where('slug','<>',$slug)->whereNull('parent_id')->get();
        return view('courseDetail',$data);
    }

    public function ppcDetail()
    {
        $data['otherCourses']   =   Course::where('is_active',1)->whereNull('parent_id')->get();

        return view('static.ppc',$data);
    }

    public function seoDetail()
    {
        $data['otherCourses']   =   Course::where('is_active',1)->whereNull('parent_id')->get();

        return view('static.seo',$data);
    }

    public function smmDetail()
    {
        $data['otherCourses']   =   Course::where('is_active',1)->whereNull('parent_id')->get();

        return view('static.smm',$data);
    }

    public function sitemap()
    {
        $urls = [
            ['loc' => url('/'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '1.0'],
            ['loc' => url('/courses'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.9'],
            ['loc' => url('/blogs'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.8'],
            ['loc' => url('/contact'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.6'],
            ['loc' => url('/gallery'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.5'],
            ['loc' => url('/verification'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.4'],
            ['loc' => url('/ppc-course-in-jalandhar'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.7'],
            ['loc' => url('/seo-course-in-jalandhar'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.7'],
            ['loc' => url('/smm-course-in-jalandhar'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.7'],
        ];

        // Get all blogs
        $blogs = Blog::where('publish_type','publish')->latest()->get();
        foreach ($blogs as $blog) {
            $urls[] = [
                'loc' => url('/blog/' . $blog->slug),
                'lastmod' => $blog->updated_at->toAtomString(),
                'priority' => '0.6'
            ];
        }

        $courses = Course::where('is_active', 1)->latest()->get();
        foreach ($courses as $course) {
            $urls[] = [
                'loc' => url($course->slug . '-course-in-jalandhar'),
                'lastmod' => $course->updated_at->toAtomString(),
                'priority' => '0.7'
            ];
        }

        // Generate XML
        $xml = view('sitemap', compact('urls'));

        return Response::make($xml, 200)->header('Content-Type', 'application/xml');
    }
}
