<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function courses(){
        return $this->hasMany(Courses::class);
    }
}
