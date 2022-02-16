<?php

namespace App\Models;


use App\Models\project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    
    protected $fillable = ['task_description', 'completed'];

  

    public function project()
    {
    return $this->belongsTo(project::class);
    }
}
