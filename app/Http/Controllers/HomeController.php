<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function portfolio()
    {
        return view('user.portfolio');
    }

    public function resources()
    {
        return view('user.resources');
    }

    public function blog()
    {
        return view('user.blog.blog');
    }

    public function blogDetail()
    {
        return view('user.blog.blog-detail');
    }
}
