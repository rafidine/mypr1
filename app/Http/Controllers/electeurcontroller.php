<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Electeur;
 
class ElecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $electeur = Electeur::orderBy('created_at', 'DESC')->get();
  
        return view('electeurs.index', compact('electeur'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('electeurs.create');
    }
    public function parrain()
    {
        return view('electeurs.parrain');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Electeur::create($request->all());
 
        return redirect()->route('electeurs')->with('success', 'Parrain a été ajouté');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $electeur = Electeur::findOrFail($id);
  
        return view('electeurs.show', compact('electeur'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $electeur = Electeur::findOrFail($id);
  
        return view('electeurs.edit', compact('electeur'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $electeur = Electeur::findOrFail($id);
  
        $electeur->update($request->all());
  
        return redirect()->route('electeurs')->with('success', 'Parrain a été Modifié');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $electeur = Electeur::findOrFail($id);
  
        $electeur->delete();
  
        return redirect()->route('electeurs')->with('success', 'Un parrain a été supprimé');
    }
    
    
    
}