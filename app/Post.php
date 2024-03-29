<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['body','title'];
  // protected $guarded=[];
  public function user(){
    return $this->belongsTo('App\User');
  }
}
