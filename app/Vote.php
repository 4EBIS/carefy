<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'name', 'vote_id'
    ]
    /**
     * Model responsável pelo reacionamento entra as entidades descritas abaixo nos métodos
     * 
     */;

    public function feedback(){
        return $this->belongsTo(Feedback::class);
    }
}
