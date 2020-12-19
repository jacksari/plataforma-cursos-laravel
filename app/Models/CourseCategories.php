<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategories extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //Relacion uno a mucho
    public function posts(){
        return $this->hasMany(Posts::class);
    }

    public function courses(){
        return $this->hasMany(Courses::class);
    }

}
