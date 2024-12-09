<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table='events';
    protected $fillable = ['title', 'description', 'start_time', 'end_time'];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'event_id', 'id');
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'event_id', 'id');
    }

}
