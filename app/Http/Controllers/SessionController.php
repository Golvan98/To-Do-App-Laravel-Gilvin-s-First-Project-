<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use illuminate\Contracts\Auth\user as Authenticatable;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Gate;
use illuminate\Support\Facade;
use illuminate\Support\Facades;
use App\Models\project;
use Illuminate\Validation\Rule;
use validator;
use input;
use App\Models\task;
use Illuminate\Http\Request;


class SessionController extends Controller
{

    public function createsession()
    {
        return view('/login');
    }

    public function storelogin()

    {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
       
        ]);

        if (auth()->attempt($attributes)) {
            
            return redirect('/home');
                                          }

         return back()->withErrors(['email' => 'Wrong Email Boie']);

    }



    public function destroy()
    {
        auth()->logout();

        return view('/todolist');
    }
}
