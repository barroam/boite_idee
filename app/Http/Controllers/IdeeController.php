<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use App\Models\Categorie;
use App\Mail\IdeeApprouvee;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreIdeeRequest;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\UpdateIdeeRequest;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IdeeController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
            // Récupérez toutes les idées
            $idees = Idee::all();
             $categories = Categorie::all();
            // Passez les idées à la vue
            return view('idees.home', compact('idees','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
 public function create(Idee $idee)
    {
        if (Auth::check()) {
            $idee = Idee::all();
            $categories = Categorie::all();
            return view('idees.store', compact('idee', 'categories'));
        } else {
            return  view ('auth.login'); // Assurez-vous que la route 'login' est définie dans vos fichiers de route
        }
    }

    // public function affiche_idee_categorie(){
     //   $idee = Idee::all();
      //  $categories = Categorie::all();
     //   return view ('idees/store',compact('idee','categories'));
    // }


    /**
     * Store a newly created resource in storage.
     */



    public function store(StoreIdeeRequest $request )
    {
     //
    $request= $request->validated();
     $request['user_id']= Auth::id();
    $request['status']= 'en attente';
    Idee::create($request);
     return redirect()->back()->with('succes','Ajout reussi');

    }

    /**
     * Display the specified resource.
     */
    public function show(Idee $idee)
    {
        //

        $commentaires = Commentaire::all()->where('idee_id',$idee->id);
        $categories = Categorie::all();
        return view ('idees/show',compact('idee','categories' ,'commentaires'));

       //  $idee = Idee::findOrFail($id);
        //return view('idees.show', compact('idee'));
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idee $idee)
    {

        if (!auth()->check()) {
            return redirect()->back();
        }

        if (  auth()->user()->id != $idee->user_id) {

            return redirect()->back();
        }
        $categories = Categorie::all();
        return view('idees.edit', compact('idee','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdeeRequest $request, Idee $idee)
    {
        if (auth()->user()->id != $idee->user_id) {

        return redirect()->back();
    }
        $request = $request->validated();
        $request['user_id']= Auth::id();
       $request['status']= 'en attente';
        $idee->update($request->validated());
        return redirect()->back()->with('succes','Modification reussi');
    }



public function approuver($id)
{
    $idee = Idee::findOrFail($id);
    $idee->update(['status' => 'approuvée']);


    // Envoyer l'email à l'utilisateur après avoir approuvé l'idée
    Mail::to($idee->user->email)->send(new IdeeApprouvee($idee));

    return redirect()->route('idee.show', $idee->id)->with('success', 'Idée approuvée avec succès.');
}

/**
 * Refuser l'idée.
 */
public function refuser($id)
{
    $idee = Idee::findOrFail($id);
    $idee->update(['status' => 'refusée']);
   Mail::to($idee->user->email)->send(new IdeeApprouvee($idee));
    return redirect()->route('idee.show', $idee->id)->with('success', 'Idée refusée avec succès.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idee $idee)
    {

            $idee->delete();
            return redirect()->back()->with('success', 'Supprimé avec succès.');

        return redirect()->back();

    }

}
