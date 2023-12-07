<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function jobList(){
        return view('user.pages.job-list');
    }

    public function about(){
        return view('user.pages.about');
    }

    public function jobDetail(){
        return view('user.pages.job-detail');
    }

    public function contact(){
        return view('user.pages.contact');
    }
}
