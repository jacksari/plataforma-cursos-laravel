<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;


    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    //Relación uno a uno
    public function profile(){
        return $this->hasOne(Profiles::class);
    }
    //Relación uno a mucho
    public function posts(){
        return $this->hasMany(Posts::class);
    }
    //Relacion muchos a muchos
    public function roles(){
        return $this->belongsToMany(Roles::class);
    }
    //Relación uno a muchos
    public function courses_dictated(){
        return $this->hasMany(Courses::class);
    }
    //Relación muchos a muchos
    public function courses_enrolled(){
        return $this->belongsToMany(Courses::class);
    }
    //Relacion uno a muchos
    public function reviews(){
        return $this->hasMany(Reviews::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function reactions(){
        return $this->hasMany(Reaction::class);
    }

    public function lessons(){
        return $this->belongsToMany(Lessons::class);
    }
}
