<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $guarded = ['id'];
    protected $table = 'courses_user';
    use HasFactory;
}
