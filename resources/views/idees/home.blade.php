@extends('base')
@section('main')
{{--
<div class="d-flex flex-wrap gap-3" style="width:100%;">
    @foreach ($idees as $idee)
    <div class="card" style="width: 25rem ; height:25rem;" >
        <div class="card-body">
            <h5 class="card-title"> {{$idee->libelle}}</h5>
            <p class="card-text">{{$idee->description}}</p>
            <h6 class="card-subtitle mb-2 badge">  {{$idee->categorie}}</h6>
            <h6 class="card-text"> {{$idee->auteur}}</h6>
            <a href="{{ route('idee.show', $idee->id) }}">Voir details</a>
            @foreach($categories as $categorie)
            @if($categorie->id == $idee->categorie_id)
                <p class="card-text"><strong>Catégorie:</strong> {{$categorie->libelle }}</p>
            @endif
            @endforeach
            <br>
            <a href="{{route ('idee.edit',$idee)}}" class="btn btn-primary">Modifier</a>
            <form action="{{route('idee.destroy',$idee)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>

        </div>

    </div>
    @endforeach
</div>

<div>

</div>


--}}



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <!-- Header -->
  <div class="header">
    <h1>Renaissance Image Grid</h1>
  </div>

  <!-- Photo Grid -->
  <div class="card-deck" style=" width:20rem;">
    <div class="card">
      <img class="card-img-top" src="https://img.freepik.com/photos-gratuite/ampoule-rendu-3d-dans-solution-bulle-parole_107791-17353.jpg?t=st=1719522046~exp=1719525646~hmac=7b7bf206ce0dea2b71d677bfc4e1f08c515d8e3ba99472ade03fdfa3686dbafc&w=900" alt="Company logo">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <ul class="list-group bg-primary">
          <li class="list-group-item list-group-item-primary"><i class="fa fa-briefcase"style="font-size:20px;"></i>   Company</li>
          <li class="list-group-item list-group-item-primary"><i class="fa fa-user"style="font-size:20px;"></i>   Role</li>
          <li class="list-group-item list-group-item-primary"><i class="fa fa-clock-o"style="font-size:20px;"></i>   Duration</li>
        </ul>

      </div>
      <div class="card-footer">
        <button type="button" class="btn" id="left-panel-link" >Register</button>
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal1" id="right-panel-link">
Learn More
</button>
      </div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>


@endsection
