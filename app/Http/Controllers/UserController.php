<?php

namespace App\Http\Controllers;



use App\Models\User;



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


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function showusers(user $users, project $projects)
    {
   
        $users = user::with('project')->get();

            
        return view('/editusers')->with(['projects' => $projects, 'users' => $users]);
    }

    public function showallusers(user $users)

    {
        $users =user::all();

        return view('/editusers')->with(['users' => $users]);
    }

    public function showmembers(user $users, project $projects)
    {
        return view('updateuserpage')->with(['projects' => $projects, 'users' => $users]);
    }

    public function updateuser(user $users, project $projects)
    {
        $data = request()->validate([
            'username' => 'required'
        ]);
            
        $users->update($data);

        return view('/todolist');


    }


   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/register');
    }

    public function store()
    {
        $data = request()->validate(
        [
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            
        ]
                                  );
          
        $newuser = user::create($data);

        auth()->login($newuser);
        
        return view('/todolist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroyuser(user $users)
    {
        $users->delete();

        return view('todolist');
    }
}
