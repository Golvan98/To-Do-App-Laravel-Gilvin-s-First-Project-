<?php

namespace App\Models;

use App\Models\task;
use App\Models\user;
use App\Models\project_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class project extends Model
{
    use HasFactory;


    protected $fillable = array('project_name', 'project_id');

    public function user()
    {
        return $this->belongsToMany(user::class);
    }
  
    public function task()
    {
        return $this->hasMany(task::class);
    }
}
