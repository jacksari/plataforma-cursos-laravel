<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relación uno a muchos
    public function courses(){
        return $this->hasMany(Courses::class);
    }
}
