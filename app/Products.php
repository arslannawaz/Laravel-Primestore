<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'title', 'price', 'description','status','user_id','categories_id'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function categories(){
        return $this->belongsTo('App\Categories');
    }

    public function pictures(){
        return $this->hasMany('App\Pictures');
    }
}
