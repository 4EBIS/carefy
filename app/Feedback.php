<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model responsável pelo reacionamento entra as entidades descritas abaixo nos métodos
 * 
 */
class Feedback extends Model
{
    protected $fillable = [
        'user_id', 'vote_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasOne(Comment::class);
    }

    public function vote(){
        return $this->hasOne(Vote::class);
    }

}
