@extends('base')

@section('main')

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

    <div class="form-group">
        <label for="date_creation">Date de création</label>
        <input type="date" class="form-control" id="date_creation" name="date_creation" value="{{$idee->date_creation}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez la description"> {{ $idee->description }} </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>

@endsection