<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
 * Model responsável pelo reacionamento entra as entidades descritas abaixo nos métodos
 * 
 */
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function feedback(){
        return $this->hasMany(Feedback::class);
    }

    public function publication(){
        return $this->hasMany(Publication::class);
    }
}
