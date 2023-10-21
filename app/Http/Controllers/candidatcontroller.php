<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Candidat; // Modifier le modèle ici
 
class CandidatController extends Controller // Modifier le nom du contrôleur ici
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidat = Candidat::orderBy('created_at', 'DESC')->get(); // Utiliser "candidats" au lieu de "candidat"

        return view('candidats.index', compact('candidat')); // Modifier la vue ici
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidats.create'); // Modifier la vue ici
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Candidat::create($request->all()); // Modifier le modèle ici
 
        return redirect()->route('candidats')->with('success', 'Candidat a été ajouté'); // Modifier la route ici
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $candidat = Candidat::findOrFail($id); // Modifier le modèle ici
  
        return view('candidats.show', compact('candidat')); // Modifier la vue ici
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $candidat = Candidat::findOrFail($id); // Modifier le modèle ici
  
        return view('candidats.edit', compact('candidat')); // Modifier la vue ici
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $candidat = Candidat::findOrFail($id); // Modifier le modèle ici
  
        $candidat->update($request->all()); // Modifier le modèle ici
  
        return redirect()->route('candidats')->with('success', 'Candidat a été modifié'); // Modifier la route ici
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $candidat = Candidat::findOrFail($id); // Modifier le modèle ici
  
        $candidat->delete(); // Modifier le modèle ici
  
        return redirect()->route('candidats')->with('success', 'Candidat supprimé avec succés'); // Modifier la route ici
    }
}
