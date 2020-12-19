<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $guarded = ['id','status'];
    protected $withCount = ['students','reviews'];
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;



    public function getRatingAttribute(){
        if ($this->reviews_count){
            return round($this->reviews->avg('rating'),1);
        }
            return 5;
    }

    //Relacion uno a muchos
    public function reviews(){
        return $this->hasMany(Reviews::class);
    }

    //Relacion uno a muchos inversia
    public function teacher(){
        return $this->belongsTo(User::class,'user_id');
    }
    //Relacion muchos a muchos
    public function students(){
        return $this->belongsToMany(User::class);
    }

    public function level(){
        return $this->belongsTo(Levels::class);
    }
    public function price(){
        return $this->belongsTo(Price::class);
    }

    public function categoria(){
        return $this->belongsTo(CourseCategories::class,'category_id');
    }

    public function requirements(){
        return $this->hasMany(Requirements::class);
    }

    public function goals(){
        return $this->hasMany(Goals::class);
    }

    public function audiences(){
        return $this->hasMany(Audience::class);
    }

    public function sections(){
        return $this->hasMany(Sections::class);
    }
    //uno a uno polimorfica
    //public function image(){
    //    return $this->morphOne(Image::class, 'imageable');
    //}
    public function lessons(){
        return $this->hasManyThrough(Lessons::class, Sections::class);
    }
}
