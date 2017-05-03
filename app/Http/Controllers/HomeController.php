<?php

namespace App\Http\Controllers;

use App\Event;
use App\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->where('is_published', true)->take(2)->get();
        $events = Event::latest()->where('is_published', true)->get();

        return view('home.index', compact('projects', 'events'));
    }
}
