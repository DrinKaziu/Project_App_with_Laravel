<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index()
  {
    $projects = Project::all();
    return view('projects.index', compact('projects'));
  }

  public function create()
  {
    return view('projects.create');
  }

  public function store()
  {
    $attributes = request()->validate([
      'title' => ['required', 'min:3'],
      'description' => ['required', 'min:3']
    ]);
    
    Project::create($attributes);

    return redirect('/projects');
  }

  public function show(Project $project)
  {
    return view('projects.show', compact('project'));
  }

  public function edit(Project $project)
  {
    return view('projects.edit', [
      'project' => $project
    ]);
  }

  public function update(Request $request, Project $project)
  {
    $attributes = request()->validate([
      'title' => ['required', 'min:3'],
      'description' => ['required', 'min:3']
    ]);
    
    $project->update($attributes);
    return redirect('/projects/'.$project->id);
  }

  public function destroy(Project $project)
  {
    $project->delete();
    return redirect('/projects');
  }
}
