<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{

  public function user(){
   return $this->belongsTo('App\User');
  }


  # SQL
  // public function getUser() {
  //   return User::where('id', '=', $this->user_id)->first();
  // }

}
