<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
  use SoftDeletes;

  public function users(){
  return $this->belongsToMany('App\User');
}


 public function messages(){
   return $this->hasMany('App\Message');
 }


}
