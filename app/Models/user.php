<?php

namespace App\Models;
use Illuminate\Foundation\Auth\user as Authenticatable;   
use Illuminate\Support\Facades;
use App\Models\project;
use App\Models\project_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Validator;
use Input;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;




class user extends Authenticatable
// class user extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'password', 'email'];
    

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password); //sets the data specified into something, bcrypt mutates it into encrypted, mostly used for passwords

    }


    public function project()
    {
        return $this->belongsToMany(project::class);
    }
 
}
