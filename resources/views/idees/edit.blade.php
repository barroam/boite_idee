@extends('base')

@section('main')
<div class="container mt-4">
<a class="btn btn-primary" href="/idee" style="float: right" >Retour</a>
<h1 class="d-flex text-align-center" > modifier une idée </h1>
@if(session('succes'))
<div class="alert alert-primary">
    {{ session('succes') }}
</div>
@endif

<form action="{{route('idee.update',$idee)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group" >
        <label for="auteur">Auteur</label>
        <input type="text" class="form-control" id="auteur" name="auteur"  value="{{$idee->auteur}}" placeholder="Entrez le nom de l'auteur">
    </div>
    <div class="form-group">
        <label for="libelle">Libellé</label>
        <input type="text" class="form-control" id="libelle" name="libelle" value="{{$idee->libelle}}" placeholder="Entrez le libellé">
    </div>

   <div>
    <label for="categorie_id">Catégorie :</label>
    <select name="categorie_id" id="categorie_id">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
        @endforeach
    </select>
   </div>
    <div class="form-group">
        <label for="date_creation">Date de création</label>
        <input type="date" class="form-control" id="date_creation" name="date_creation" value="{{$idee->date_creation}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez la description"> {{ $idee->description }} </textarea>
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
