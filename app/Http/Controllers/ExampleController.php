<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function homepage()
    {
        return view('welcome');
    }

    public function aboutpage()
    {
        return '<h1>Heyyy its about page.</h1> <br> <a href="/">Back to Home</a>  <br> <a href="/magic">Go to Magical URL</a>';
    }

    public function magicurlpage()
    {

        $username = "faisalahammed044274";
        $repoName = "Laravel 9 Learning Path";
        $animals = ['dog','cat','monkey','Elephant','Camel'];

        return view('magical',['username' => $username, 'repoName' => $repoName , 'allAnimals'=>$animals]);
    }
}
