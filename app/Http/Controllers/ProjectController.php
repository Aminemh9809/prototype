<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProjectController extends Controller
{
    use AuthorizesRequests;
    /**
     * Affiche tous les projets.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Affiche le formulaire de création.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Enregistre un nouveau projet.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'goal_amount' => 'required|numeric|min:1',
            'location' => 'nullable|string|max:255',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['current_amount'] = 0;

        Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Projet créé avec succès.');
    }

    /**
     * Affiche un projet spécifique.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Affiche le formulaire d’édition.
     */
    public function edit(Project $project)
    {
        // Optionnel si tu veux autoriser l’édition
        return view('projects.edit', compact('project'));
    }

    /**
     * Met à jour un projet.
     */
    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'goal_amount' => 'required|numeric|min:1',
            'location' => 'nullable|string|max:255',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Projet mis à jour.');
    }

    /**
     * Supprime un projet.
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Projet supprimé.');
    }
}
