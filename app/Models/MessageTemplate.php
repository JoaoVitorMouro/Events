<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageTemplate extends Model
{
    use SoftDeletes;
    protected $table = 'message_template';
    protected $fillable = [
        'name',
        'content',
    ];


}
