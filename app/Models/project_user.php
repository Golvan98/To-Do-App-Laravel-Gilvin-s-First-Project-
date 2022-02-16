<?php


namespace App\Models;

use App\Models\user;
use App\Models\project;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_user extends Model

{
    public $table = 'project_user';
    use HasFactory;

    protected $fillable = array('user_id', 'project_id');
    
}
