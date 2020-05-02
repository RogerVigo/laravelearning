<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'avatar', 'email', 'password',
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



    public function timeline()
    {
        // Obtener una coleccion de ids
        $friends = $this->follows->pluck('id'); //ids de los usuarios a los que sigo


        return Tweet::whereIn('user_id', $friends)->orWhere('user_id', $this->id)
            ->latest()
            ->get();
        //Devuelve un array con la coleccion de ids en orden descendente
    }

    function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    //Function for create paths.
    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

    //encrypt password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
