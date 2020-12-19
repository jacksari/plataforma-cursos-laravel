<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //RElacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function course(){
        return $this->belongsTo(Courses::class);
    }
}
