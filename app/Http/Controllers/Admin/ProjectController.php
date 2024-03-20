<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class ProjectController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderByDesc('updated_at')->orderByDesc('created_at')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|unique:projects',
            'description' => 'required|string',
            'image' => 'nullable|url',
        ], [
            'title.required' => 'Inserisci il titolo del progetto',
            'description.required' => 'Inserisci la descrizione del progetto',
            'image.url' => 'L\'url dell\'immagine non è corretto',
        ]);

        $data = $request->all();
        
        $project = new Project();

        $project->fill($data);

        $project->slug = Str::slug($project->title);
        $project->save();

        return to_route('admin.projects.show', $project->id);


    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => ['required', 'string', Rule::unique('projects')->ignore($project->id)],
            'description' => 'required|string',
            'image' => 'nullable|url',
        ], [
            'title.required' => 'Inserisci il titolo del progetto',
            'description.required' => 'Inserisci la descrizione del progetto',
            'image.url' => 'L\'url dell\'immagine non è corretto',
        ]);

        $data = $request->all();

        $project->update($data);

        return to_route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return to_route('admin.projects.index')
            ->with('message', "Progetto '$project->title' eliminato con successo!")
            ->with('type', "danger");
    }

    // public function modal(Project $project)
    // {
    //     return to_route('admin.projects.index')->with('modal_id', "$project->id")
    //     ->with('modal_label', "modal-$project->id-Label")
    //     ->with('modal_text', "$project->title")
    //     ->with('modal_project', $project->id);
    // }

    
}
