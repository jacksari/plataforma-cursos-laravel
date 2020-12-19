<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relacion mucho a muchos
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
