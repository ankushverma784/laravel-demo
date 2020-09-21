<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function blog()
    {
        return view('home.blog');
    }
    public function blogdetail()
    {
        return view('home.blogdetail');
    }
    public function hoteldetail()
    {
        return view('home.hoteldetail');
    }
    public function hotel()
    {
        return view('home.hotel');
    }
    public function tour()
    {
        return view('home.tour');
    }


}
