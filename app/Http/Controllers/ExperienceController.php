<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    public function index(){
        return view('frontend.experience');
    }
    public function Error404(){
        return abort(404);
    }
    public function exp_microsoft(){
        return view('frontend.experience-view');
    }
}
