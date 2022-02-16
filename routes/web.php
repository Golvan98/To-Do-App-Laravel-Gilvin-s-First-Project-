<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Models\project_user;
use App\Models\project;
use App\Models\task;
use App\Models\user;
use Illuminate\Support\Facades\Route;
use Validator;
use input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Provider;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use illuminate\Support\Facades;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use illuminate\Support\Facade;

use illuminate\Contracts\Auth\user as Authenticatable;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/firstpage', [FirstPageController::class, 'show']);


/* Route::get('register', function()
{ return view('register');  
}); */

Route::get('/home' , function(){
    return view('homepage');
});

Route::get('/todo', function(){
    return view('todolist');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/storeuser', [UserController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'createsession'])->middleware('guest');
Route::post('/sessionlogin', [SessionController::class, 'storelogin'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/projects', 'App\Http\Controllers\ProjectController@show');  



Route::get('/userslist', [UserController::class, 'showallusers'])->middleware('Admin');
Route::get('/users/{projects}', 'App\Http\Controllers\UserController@showusers')->middleware('Admin');
Route::get('/members/{users}/editusers/',  'App\Http\Controllers\UserController@showmembers')->name('updater');


Route::patch('/update/{users}', 'App\Http\Controllers\UserController@updateuser');
Route::delete('/deleteuser/{users}', [UserController::class, 'destroyuser']);





Route::patch('/users/edit/{users}', [UserController::class, 'useredit'])->middleware('Admin');

Route::get('projects/{projects}/create', 'App\Http\Controllers\TaskController@taskcreate');
Route::get('project/{projects}/task/{tasks}/edit',[TaskController::class, 'taskedit']);
Route::patch('/project/{projects}/task/{tasks}/update/confirm',[TaskController::class, 'taskupdate']);
Route::delete('/deletetask/{task}', [TaskController::class, 'taskdestroy']);

Route::post('/projects/store/{projects}', [TaskController::class, 'store']);

Route::patch('/projects/{projects}/updatestatus/{task}', 'App\Http\Controllers\TaskController@incompletestatus');

Route::patch('/projects/{projects}/{task}/completestatus', 'App\Http\Controllers\TaskController@completestatus');

Route::patch('/projects/{project}/update', [ProjectController::class, 'update'])->middleware('Admin');
Route::get('/projects/{projects}/edit', [ProjectController::class, 'edit'])->middleware('Admin');
Route::get('projects/create', [ProjectController::class, 'create']);
Route::post('/projects/store', [ProjectController::class, 'store']);
Route::post('addmember/{projects}', [ProjectController::class, 'addmemberpage']);


Route::delete('/deleteproject/{projects}', [ProjectController::class, 'destroy'])->middleware('Admin');

Route::post('/newproject/{projects}/getandstore/newuser/{users}', [ProjectController::class, 'createmember']);

Route::delete('/removemember/{users}/deletethemember/{projects}', [ProjectController::class, 'removemember']);

