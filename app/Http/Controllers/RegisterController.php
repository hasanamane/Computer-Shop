<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('Rigsteer.create');
    }
    public function store(){
        $attributes = \request()->validate([
            'Name'=>'required|max:255',
            'Surname'=>'required|min:3|max:255',
            'Email'=>'required|email|max:255',
            'Password'=>'required|min:8|max:255',

        ]);
        $user= User::create($attributes);
        auth()->login($user);
        return redirect()->route('createPro2');
    }
}
