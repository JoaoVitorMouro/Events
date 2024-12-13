<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    protected $table = 'notifications';
    protected $fillable = [
        'user_id',
        'event_id',
        'type',
        'status',
        'message_template_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function event(){
        return $this->belongsTo(Event::class,'event_id','id');
    }
    public function message(){
        return $this->belongsTo(MessageTemplate::class,'message_template_id','id');
    }
}
