<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = "tags";

    protected $fillabe =['name'];

    public function articles(){
      return $this->belongsToMany('App\Article')->withTimestamps();
    }
}
