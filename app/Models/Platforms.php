<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platforms extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function lessons(){
        return $this->hasMany(Lessons::class);
    }
}
