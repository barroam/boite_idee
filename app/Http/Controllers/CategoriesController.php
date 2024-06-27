<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
               // Récupérez toutes les idées
               $categories = Categorie::all();
               // Passez les idées à la vue
               return view('categories/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
        //
        Categorie::create($request->validated());
     return redirect()->back()->with('succes','Ajout reussi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie) //Idee $idee
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
        return view('categories/edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        //
        $categorie->update($request->validated());
        return redirect()->back()->with('succes','Ajout reussi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
        $categorie->delete();
        return redirect()->back()->with('succes','supprimer avec succes');
    }
}
