<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageTemplate extends Model
{
    protected $table = 'message_templates';
    protected $fillable = [
        'name',
        'content',
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'message_template_id', 'id');
    }

}
