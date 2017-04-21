<?php

namespace App\Http\Controllers;

use App\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $heros = ['is-info', 'is-danger', 'is-warning', 'is-primary'];

        return view('home.index', compact('projects', 'heros'));
    }
}
