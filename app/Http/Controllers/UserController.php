<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show create form 
    public function create(){
        return view('users.register');
    }

    //store users

    public function store(Request $request){
        $formFields = $request->validate([
            'name'=> ['required', 'min:3'],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

    
        // hash password 

        $formFields['password'] = bcrypt($formFields['password']);



        // START FROM LOGOUT AND MANAGE

        //create user and store 
        $user = User::create($formFields);

        // //for login
        auth()->login($user);

        return redirect('/')->with('message', 'User, created successfully');
    
    
    
    }

    //show login form 

    public function login(){
        return view('users.login');
    }


    //logout 

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'auth(have been log out)');
    }



    //authenticating

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' =>['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are loggined in!');
        }
        return back()->withErrors(['email' => 'Invalid Credential'])->onlyInput('email');
    }






}
