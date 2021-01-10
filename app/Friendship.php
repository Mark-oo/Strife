<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
  // friendship that this user started
protected function friendsOfThisUser()
{
  return $this->belongsToMany(User::class, 'friendships', 'first_user', 'second_user')
  ->withPivot('status')
  ->wherePivot('status', 'confirmed');
}

// friendship that this user was asked for
protected function thisUserFriendOf()
{
  return $this->belongsToMany(User::class, 'friendships', 'first_user', 'second_user')
  ->withPivot('status')
  ->wherePivot('status', 'confirmed');
}

// accessor allowing you call $user->friends
public function getFriendsAttribute()
{
  if ( ! array_key_exists('friends', $this->relations)) $this->loadFriends();
  return $this->getRelation('friends');
}

protected function loadFriends()
{
  if ( ! array_key_exists('friends', $this->relations))
  {
  $friends = $this->mergeFriends();
  $this->setRelation('friends', $friends);
}
}

protected function mergeFriends()
{
  if($temp = $this->friendsOfThisUser)
  return $temp->merge($this->thisUserFriendOf);
  else
  return $this->thisUserFriendOf;
}
// friendship that this user started but now blocked
	protected function friendsOfThisUserBlocked()
	{
		return $this->belongsToMany(User::class, 'friendships', 'first_user', 'second_user')
					->withPivot('status', 'acted_user')
					->wherePivot('status','blocked')
					->wherePivot('acted_user', 'first_user');
	}

	// friendship that this user was asked for but now blocked
	protected function thisUserFriendOfBlocked()
	{
		return $this->belongsToMany(User::class, 'friendships', 'second_user', 'first_user')
					->withPivot('status', 'acted_user')
					->wherePivot('status', 'blocked')
					->wherePivot('acted_user', 'second_user');
	}

	// accessor allowing you call $user->blocked_friends
	public function getBlockedFriendsAttribute()
	{
		if ( ! array_key_exists('blocked_friends', $this->relations)) $this->loadBlockedFriends();
			return $this->getRelation('blocked_friends');
	}

	protected function loadBlockedFriends()
	{
		if ( ! array_key_exists('blocked_friends', $this->relations))
		{
			$friends = $this->mergeBlockedFriends();
			$this->setRelation('blocked_friends', $friends);
		}
	}

	protected function mergeBlockedFriends()
	{
		if($temp = $this->friendsOfThisUserBlocked)
			return $temp->merge($this->thisUserFriendOfBlocked);
		else
			return $this->thisUserFriendOfBlocked;
	}
}
