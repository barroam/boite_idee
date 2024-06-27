@extends('base')

@section('main')
<a class="btn btn-primary text-center" href="/idee" style="float: right" >Retour</a>
<h1 class="d-flex text-align-center" > ajouter une idée </h1>
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

{{$idee->categorie_id}}
    @foreach($categories as $categorie)
    @if($categorie->id )
        <p class="card-text"><strong>Catégorie:</strong> {{$categorie->libelle }}</p>
    @endif
    @endforeach

    <div class="form-group">
        <label for="categorie">Catégorie</label>
        <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Entrez la catégorie">
    </div>

    <div class="form-group">
        <label for="date_creation">Date de création</label>
        <input type="date" class="form-control" id="date_creation" name="date_creation">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez la description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>

@endsection
