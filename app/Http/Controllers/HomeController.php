<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function home()
    {
        $data['courses']        =       Course::where('is_active',1)->get();
        $data['blogs']          =       Blog::where('publish_type','publish')->take(5)->orderBy('blog_created_at','desc')->get();

        return view('home',$data);
    }

    public function thankyou()
    {
        return view('thankyou');
    }

    public function coursePage()
    {
        $data['courses']        =       Course::where('is_active',1)->get();

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
        $data['courses']        =       Course::where('is_active',1)->get();

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

    public function sitemap()
    {
        $urls = [
            ['loc' => url('/'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '1.0'],
            ['loc' => url('/courses'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.9'],
            ['loc' => url('/blog'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.8'],
            ['loc' => url('/contact'), 'lastmod' => Carbon::now()->toAtomString(), 'priority' => '0.7'],
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

        // Generate XML
        $xml = view('sitemap', compact('urls'));

        return Response::make($xml, 200)->header('Content-Type', 'application/xml');
    }
}
