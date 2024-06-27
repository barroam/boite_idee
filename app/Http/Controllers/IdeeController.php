<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use App\Http\Requests\StoreIdeeRequest;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\UpdateIdeeRequest;

class IdeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // Récupérez toutes les idées
            $idees = Idee::all();
            // Passez les idées à la vue
            return view('idees.home', compact('idees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('idees/store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdeeRequest $request )
    {
     //
     Idee::create($request->validated());
     return redirect()->back()->with('succes','Ajout reussi');

    }

    /**
     * Display the specified resource.
     */
    public function show(Idee $idee)
    {
        //
        $idee = Idee::findOrFail($id);
        return view('idees.show', compact('idee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idee $idee)
    {

        return view('idees.edit', compact('idee'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdeeRequest $request, Idee $idee)
    {
        //
        $idee->update($request->validated());
        return redirect()->back()->with('succes','Modification reussi');

}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idee $idee)
    {
        //
        $idee->delete();
        return redirect()->back()->with('succes','supprimer avec succes');

    }
}
