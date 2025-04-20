<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContributionController extends Controller
{
    /**
     * Enregistre une contribution à un projet.
     */
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        Contribution::create([
            'user_id' => Auth::id(),
            'project_id' => $project->id,
            'amount' => $request->amount,
        ]);

        // Mise à jour du montant du projet
        $project->current_amount += $request->amount;
        $project->save();

        return redirect()->route('projects.show', $project)->with('success', 'Merci pour votre contribution !');
    }
}
