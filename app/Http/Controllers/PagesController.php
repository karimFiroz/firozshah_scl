<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        
        return view('welcome');
    }
   
   
   
    public function index(){
        $home=  view('school.home');
        return view('layouts.master')->with('content',$home);
    }
    
    public function content(){
        return view('school.pages.content');
    }

    public function about(){
        return view('school.pages.about');
    }

    public function contact(){
        return view('school.pages.contact');
    }











}
