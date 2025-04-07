<?php

// app/Models/ChatMessage.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = ['from_id', 'to_id', 'message'];

    public function sender()
    {
        return $this->belongsTo(Masuk::class, 'from_id');
    }

    public function receiver()
    {
        return $this->belongsTo(Masuk::class, 'to_id');
    }
}
