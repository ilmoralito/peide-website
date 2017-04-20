<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectFaq extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
