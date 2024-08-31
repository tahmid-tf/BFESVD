<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Date;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ----------------------- roles ------------------------------

    public function application(){
        return $this->hasMany(Application::class);
    }

    // ----------------------- roles ------------------------------

    // ----------------------- ecosystem --------------------------

    public function ecosystem(){
        return $this->hasMany(Ecosystem::class);
    }

    // ----------------------- ecosystem --------------------------


    // ----------------------- es --------------------------

    public function es(){
        return $this->hasMany(Es::class);
    }

    // ----------------------- es --------------------------

    // ----------------------- study --------------------------

    public function study(){
        return $this->hasMany(Study::class);
    }

    // ----------------------- study --------------------------

    // ----------------------- valuation --------------------------

    public function valuation(){
        return $this->hasMany(Valuation::class);
    }

    // ----------------------- valuation --------------------------

    // ----------------------- bibilographic --------------------------

    public function bibilographic(){
        return $this->hasMany(Bibilographic::class);
    }

    // ----------------------- bibilographic --------------------------

    // ----------------------- data --------------------------

    public function data(){
        return $this->hasMany(Data::class);
    }

    // ----------------------- data --------------------------
}
