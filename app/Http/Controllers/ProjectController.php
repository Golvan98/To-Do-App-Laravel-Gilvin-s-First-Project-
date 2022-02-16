<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\project;
use App\Models\user;
use App\Models\project_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
class ProjectController extends Controller
{

   public function show(project $projects)
   {
       $projects = project::with('user')->get();
      
       
       return view ('projects')->with(['projects' => $projects, 
      ]);

   }


   public function edit(project $projects)
   {
    
     $tasks = task::where('project_id', $projects->id)->get();

                  return view('/editprojects')->with( 
      ['projects' => $projects,
      'tasks' => $tasks]);
   }  

   

   


   public function update(project $project)

      {
        
      $data = request()->validate(
         [
            'project_name' => 'required'
         ]);

        
   
         $project->update($data);
      

      return view('/about');

      }
     
      public function create()
      {
         return view('/addproject');
      }

      public function store()
      {
         $data = request()->validate([
            'project_name' => 'required'
         ]);

         project::create($data);

         return view('/todolist');
      }
     
      public function destroy(project $projects)
      {
         $projects->delete();

         return view('/todolist');
      }
     
      public function addmemberpage(project $projects, user $users, project_user $project_users)
      {                     
         $ki = $projects->user->pluck('id');
     
         $nonmembers = user::all()->whereNotIn('id', $ki);
    
         $members = user::all()->where('id', $ki);
      

        /* foreach ($ki as $kiss) {
            return user::all()->where('id', '!=', $kiss);
         } */

      
 
       /* $kek = $projects->user->pluck('id');
        $keklul = user::all()->where('id', $kek);
       $keklulz = $keklul->pluck('id');       
        dd($keklulz); */
      //  $keklulz = $keklul->pluck('id');

       //  $list = DB::table('users')->where('id', '!=', $keklulz);

      //  $list = DB::table('users')->where('id', '!=' , $keklulz)->get();
       /* $kek = project_user::where('project_id', '!=', $projects->id)->pluck('user_id');
        dd($kek);
       $users = user::findMany($kek); */

       //  $lol = $projects->user;
         
        /* foreach ($lol as $lols)
         {
         return $lols->username;
         }   */
         
       //  $project_users = project_user::where('project_id', $projects->id)->get();

       //  $users = user::first();
      
       //  $lol = (['user_id' => 2, 'project_id' => 5]);
       //  project_user::create($lol);
         return view('addmemberpage')->with(['members' => $members, 'nonmembers' => $nonmembers, 'users' => $users,'ki' => $ki, 'projects' => $projects, 'project_users' => $project_users ]);
      }


      public function createmember(project $projects, user $users, project_user $project_user)
      {
            
         $data = ['project_id' => $projects->id,
                  'user_id' => $users->id];
                
          
                  project_user::create($data);
                  return view('/about');
      }
      
      public function removemember(user $users, project_user $project_user, project $projects)
      {
        
         $projectdata = $projects->id;
         $userdata = $users->id;

         $memberdata = DB::table('project_user')
         ->where('user_id', '=', $userdata)
         ->where('project_id', '=', $projectdata);

         $memberdata->delete();
         /* $data = ['project_id' => $projects->id,
                  'user_id' => $users->id]; */
         
                  return view('/about');
      }
}
