<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectFaqs()
    {
        return $this->hasMany(ProjectFaq::class);
    }
}
