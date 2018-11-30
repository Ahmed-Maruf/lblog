<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    
    public function getIndex(){
        return view('pages.welcome');
    }
    public function getAbout(){
        $name = "Ahmed Maruf";
        return view('pages.about')->withName($name);
    }
    public function getContact(){
        return view('pages.contact');
    }
}
