<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function schedules()
    {
        return $this->hasMany(Shcedule::class);
    }

    public function faqs()
    {
        return $this->hasMany(EventFaq::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
