<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectFaqs()
    {
        return $this->hasMany(ProjectFaq::class);
    }

    public function projectPhotos()
    {
        return $this->hasMany(ProjectPhoto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
