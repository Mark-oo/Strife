<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','handle', 'email', 'password',
    ];

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

    public function chat(){
      return $this->belongsToMany('App\Chat');
    }

    public function message(){
      return $this->hasMany('App\Message');
    }

    public function friends(){
	  	return $this->belongsToMany('App\User', 'friends_users', 'user_id', 'friend_id');
  	}

    public function addFriend(User $user){
		  $this->friends()->attach($user->id);
	  }

  	public function removeFriend(User $user){
	  	$this->friends()->detach($user->id);
  	}

    public function friend_requests(){
	   return $this->hasMany(Friendship::class, 'second_user')
	               ->where('status', 'pending');
    }
}
