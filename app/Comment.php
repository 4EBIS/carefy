<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'publisher_id', 'body'
    ];

    public function user(){
        return $this->beongsTo(User::class);
    }

    public function publish(){
        return $this->hasOne(Publish::class);
    }

    public function feedback(){
        return $this->hasMany(Feedback::class);
    }
}
