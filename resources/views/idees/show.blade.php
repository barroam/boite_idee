@extends('base')
@section('main')
<div class="d-flex flex-wrap gap-3" style="width:100%;">
    <div class="card" style="width: 25rem ; height:25rem;" >
        <div class="card-body">

            <h5 class="card-title"> {{$idee->libelle}}</h5>
            <p class="card-text">{{$idee->description}}</p>
            <h6 class="card-subtitle mb-2 badge">  {{$idee->categorie}}</h6>
            <h6 class="card-text"> {{$idee->auteur}}</h6>
            @foreach($categories as $categorie)
            @if($categorie->id == $idee->categorie_id)
                <p class="card-text"><strong>Catégorie:</strong> {{$categorie->libelle }}</p>
            @endif
            @endforeach
            <p class="card-text"><small class="text-muted">{{$idee->date_creation}}</small></p>
            <a href="{{route ('idee.edit',$idee)}}" class="btn btn-primary">Modifier</a>
            <form action="{{route('idee.destroy',$idee)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
        </div>
    </div>

</div>

<div>

</div>





@endsection
