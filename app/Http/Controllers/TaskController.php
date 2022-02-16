<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\task;
use App\Models\project;
use App\Models\user;
use App\Models\project_user;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskedit(project $projects, task $tasks)
    {
       return view('edittasks')
       ->with(['projects' => $projects, 
                'tasks' => $tasks]);
    }

    public function taskupdate(project $projects, task $tasks)
    {
       
       $dataz = request()->validate(
          [
             'task_description' => 'required'
          ]);
       
         $tasks->update($dataz);
          return view('/about ');
    }

    public function taskcreate(project $projects, task $tasks)
    {
        return view('/createtask')->with(['projects' => $projects, 'tasks' => $tasks]);
        
    }
    public function store(project $projects)
    {
      

        $datas = request()->validate([
            'task_description' => 'required',
            
        ]);

        task::create($datas);
     //   $lel = $projects->id;
       $hehe = task::where('project_id', 0)->update(['project_id' => $projects->id]);
      

        return view('/todolist');

    
    }

    public function taskdestroy(task $task)
    {
        $task->delete();

        return view('todolist');
    }

    public function incompletestatus(project $projects, task $task)
    {
    
        $task->update(['completed' => false]);
     
        return view('/todolist');
    }

    public function completestatus(project $projects, task $task)

    {
        $task->update(['completed' => true]);

        return view('/todolist');

    }
}
