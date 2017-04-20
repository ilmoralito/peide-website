<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectFaq;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\ProjectFaqRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'display']
        ]);
    }

    public function index()
    {
        return view('project.index', [
            'projects' => Project::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function display(Project $project)
    {
        return view('project.display', compact('project'));
    }

    public function projects()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('project.projects', compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(ProjectRequest $request)
    {
        $project = new Project;

        $project->name = request('name');
        $project->url = request('url');
        $project->body = request('body');
        $project->description = request('description');

        $project->save();

        session()->flash('message', 'Proyecto creado exitosamente');

        return redirect()->route('createProject');
    }

    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    public function update(ProjectRequest $request)
    {
        $project = Project::findOrFail(request('id'));

        $project->name = request('name');
        $project->description = request('description');
        $project->url = request('url');
        $project->body = request('body');

        $project->save();

        session()->flash('message', 'Proyecto actualizado exitosamente');

        return redirect()->route('showProject', [ 'id' => $project->id ]);
    }

    public function destroy()
    {
        Project::findOrFail(request('id'))->delete();

        return redirect()->route('projects');
    }

    public function faqs(Project $project)
    {
        $projectFaqs = $project->projectFaqs;

        return view('project.faqs', compact('project', 'projectFaqs'));
    }

    public function createFaq(Project $project)
    {
        return view('project.createfaq', compact('project'));
    }

    public function storeFaq(ProjectFaqRequest $projectFaqRequest, Project $project)
    {
        $faq = new ProjectFaq;

        $faq->question = request('question');
        $faq->answer = request('answer');

        $project->projectFaqs()->save($faq);

        session()->flash('message', 'FAQ creado exitosamente');

        return redirect()->route('createFaq', [
            'project' => $project->id
        ]);
    }

    public function showFaq(Project $project, ProjectFaq $faq)
    {
        return view('project.showfaq', compact('project', 'faq'));
    }

    public function destroyFaq(Project $project)
    {
        ProjectFaq::findOrFail(request('id'))->delete();

        session()->flash('message', 'FAQ eliminada exitosamente');

        return redirect()->route('faqs', [
            'project' => $project
        ]);
    }

    public function editFaq(Project $project, ProjectFaq $faq)
    {
        return view('project.editfaq', compact('project', 'faq'));
    }

    public function updateFaq(ProjectFaqRequest $projectFaqRequest, Project $project)
    {
        $faq = ProjectFaq::findOrFail(request('id'));

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        session()->flash('message', 'Pregunta frecuente actualizado exitosamente');

        return redirect()->route('showFaq', [
            'project' => $project->id,
            'faq' => $faq->id
        ]);
    }
}
