<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\session;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('session.create');
    }
    public function store(){
        $attributes = \request()->validate([

            'Email'=>'required|exists:users,Email',
//            'Email'=>'required|email',
            'Password'=>'required',

        ]);
   if(auth()->attempt($attributes)){

       throw ValidationException::withMessages([
           'Email'=>'Your Provided credentials could not be verified'
       ]);
   }
        session()->regenerate();
   return redirect('/Create');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
