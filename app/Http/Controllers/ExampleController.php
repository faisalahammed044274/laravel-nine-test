<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function homepage()
    {
        return view('hompage');
    }

    public function singlepostpage()
    {
        return view('single-post');
    }

    public function aboutpage()
    {
        return '<h1>Heyyy its about page.</h1> <br> <a href="/">Back to Home</a>  <br> <a href="/magic">Go to Magical URL</a>';
    }

}
