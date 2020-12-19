<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descriptions extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    // uno a uno inversa
    public function lesson(){
        return $this->belongsTo(Lessons::class);
    }
}
