<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{


    protected $table = "subscriptions";

    protected $fillable = [
      'id',
      'user_id',
      'event_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function event(){
        return $this->belongsTo(Event::class,'event_id','id');
    }

}
