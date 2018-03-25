<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    //
    protected $fillable = ['title', 'content', 'user_id', 'channel_id', 'slug'];

    public function channel()
    {

        return $this->belongsTo('App\Channel');

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function replies() 
    {

        return $this->hasMany(Reply::class);

    }


}
