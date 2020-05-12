<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likeable;
    protected $fillable = ['user_id','body'];

    public function user() {

      return $this->belongsTo(User::class);
    }

}
