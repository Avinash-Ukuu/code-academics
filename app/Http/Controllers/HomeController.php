<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data['courses']        =       Course::where('is_active',1)->get();
        $data['blogs']          =       Blog::where('publish_type','publish')->get();

        return view('home',$data);
    }
}
