<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $title = "Welcome to laravel! ";
        return view('pages.index',compact('title'));
    }

    function about(){
        $title="THIS IS ABOUT";
        return view('pages.about',compact('title'));
    }

    function services()
    {
        $data = array(
            'title' => 'SERVICES from controller',
            'services' => ['Web Design', 'Programming', 'SEO']
        );

        return view('pages.services')-> with($data);
    }
}
