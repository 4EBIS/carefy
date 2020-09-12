<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'name', 'vote_id'
    ];

    public function feedback(){
        return $this->belongsTo(Feedback::class);
    }
}
