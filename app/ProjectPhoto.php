<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPhoto extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
