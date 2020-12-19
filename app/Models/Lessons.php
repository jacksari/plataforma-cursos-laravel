<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    protected $table = 'lessons';

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }

    public function section(){
        return $this->belongsTo(Sections::class,'sections_id');
    }

    public  function platform(){
        return $this->belongsTo(Platforms::class);
    }

    //relacion uno a uno
    public function description(){
        return $this->hasOne(Descriptions::class);
    }
    //muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class);
    }
    //relacion uno a uno polimorfica
    public function resource(){
        return $this->morphOne(Resource::class, 'resourceable');
    }
    //relacion uno a muchos polimorfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function reactions(){
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}
