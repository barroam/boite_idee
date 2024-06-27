@extends('base')
@section('main')
<div class="d-flex flex-wrap gap-3" style="width:100%;">
    @foreach ($idees as $idee)
    <div class="card" style="width: 25rem ; height:15rem;" >
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
            <a href="{{ route('idee.show', $idee->id) }}">Voir details</a>
        </div>
    </div>
    @endforeach
</div>

<div>

</div>





@endsection
