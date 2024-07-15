@extends('layout.base')
@section('main')
<div class="container mt-4">
<a class="btn btn-primary text-center" href="/idee" style="float: right" >Retour</a>
<h1 class="d-flex text-align-center" > Formulaire d'ajout d'une idée </h1>
@if(session('succes'))
<div class="alert alert-primary">
    {{ session('succes') }}
</div>
@endif
<form action="{{ route ('idee.store')}}" method="post">
    @csrf
    @method('POST')

    <div class="form-group" >
        <label for="auteur">Auteur</label>
        <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Entrez le nom de l'auteur">
    </div>

    <div class="form-group">
        <label for="libelle">Libellé</label>
        <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrez le libellé">
    </div>
<div>
    <label for="categorie_id">Catégorie :</label>
    <select name="categorie_id" id="categorie_id" class="form-control">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
        @endforeach
    </select>
</div>


    <div class="form-group">
        <label for="date_creation">Date de création</label>
        <input type="date" class="form-control" id="date_creation" name="date_creation">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez la description"></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" class="form-control" id="status" name="status" value="en attente">
    </div>
    <div class="form-group">
     <input type="hidden" class="form-control" id="user_id" name="user_id" value="1">
    </div>

    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>
</div>
@endsection
