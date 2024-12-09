<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;
    protected $table = 'notification';
    protected $fillable = [
        'user_id',
        'event_id',
        'type',
        'status',
        'message'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function event(){
        return $this->belongsTo(Event::class,'event_id','id');
    }
}
