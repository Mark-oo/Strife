<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
  public function users(){
    return $this->belongsToMany('App\Users');
  }
}
