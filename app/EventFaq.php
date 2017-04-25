<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventFaq extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
