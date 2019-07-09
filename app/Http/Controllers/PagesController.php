<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        /*$title1 = 'Hello';
        $title2 = 'World';
        return view('pages.index')->with('title1', $title1)->with('title2', $title2);*/

        return view('pages.index');


    }

    public function about(){

        $abouts = ['This is a Blog Site', 'Mobile No: 09123456789', 'Email: sample@gmail.com'];

        return view('pages.about')->with('abouts', $abouts);

    }
    public function services(){

        return view('pages.services');
        
    }
    public function login(){

        return view('pages.login');
        
    }
    public function register(){

        return view('pages.register');
        
    }

}
