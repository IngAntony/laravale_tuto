<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = "articles";

    protected $fillabe = ['title','content','user_id','category_id'];

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function images(){
      return $this->hasMany('App\Image');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}