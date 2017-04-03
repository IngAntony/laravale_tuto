<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = "images";

    protected $fillabe = ['name','article_id'];

    public function article(){
      return $this->belongsTo('App\Article');
    }
}
