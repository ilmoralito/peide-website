<?php

namespace App\Http\Controllers;

use App\Event;
use App\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $heros = ['is-info', 'is-danger', 'is-warning', 'is-primary'];
        $events = Event::latest()->where('is_published', true)->get();

        return view('home.index', compact('projects', 'heros', 'events'));
    }
}
