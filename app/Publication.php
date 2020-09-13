<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'user_id', 'feedback_id', 'title','body'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function feedback(){
        return $this->hasMany(Feedback::class);
    }

}
