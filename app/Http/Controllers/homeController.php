<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function newPosts(){
        return view('pages.newposts');
    }
    public function aboutMe(){
        return view('pages.aboutme');
    }
    public function users(){
        return view('pages.users');
    }
}
