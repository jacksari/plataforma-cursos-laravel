<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relacion uno a muchos inversa
    public function course(){
        return $this->belongsTo(Courses::class);
    }

    //relacion uno a muchos
    public function lessons(){
        return $this->hasMany(Lessons::class);
    }
}
