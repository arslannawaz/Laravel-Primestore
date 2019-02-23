<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable  implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type','address','shop_title'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products(){
        return $this->hasMany('App\Products');
    }

    public  function isAdmin(){
        if($this->type == "Admin"){
            return view('admin.index');
        }
        if($this->type == "Seller"){
            return view('seller.index');
        }
        return false;
    }

    public  function isSeller(){
        if($this->type == "Admin"){
            return view('admin.index');
        }
        if($this->type == "Seller"){
            return view('seller.index');
        }
        return false;
    }
}
