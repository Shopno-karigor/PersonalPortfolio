<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Added from CreateNewUser
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;


class RegistrationController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }

    public function create(Request $request){
        // dd("this is Registration Controller");
    }


}
