<?php


namespace App;


use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait Followable
{

    public function toggleFollow(User $user)
    {

        /*  if ($this->following($user)) {
              return $this->unfollow($user);
          }

          return $this->follow($user);
      }
        */

        //Using toggle method
        $this->follows->toggle($user);
    }

    public function following(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows(): BelongsToMany
    {
        return $this->belongsToMany(
            __CLASS__,
            'follows',
            'user_id',
            'following_user_id'
        );
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }


}
