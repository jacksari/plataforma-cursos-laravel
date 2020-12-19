<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonUser extends Model
{

    protected $table = 'lessons_user';
    protected $fillable = ['lessons_id','user_id'];
    use HasFactory;
}
