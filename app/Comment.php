<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'publication_id', 'body'
    ];
    public $timestamps = false;
    public function user(){
        return $this->beongsTo(User::class);
    }

    public function publication(){
        return $this->hasOne(Publication::class);
    }

    public function feedback(){
        return $this->hasMany(Feedback::class);
    }
}
