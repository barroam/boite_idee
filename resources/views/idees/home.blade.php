@extends('base')
@section('main')



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>


  <div class="header">
    <h1 class="text-center">Les idées </h1>
  </div>
  <a class="btn btn-primary" style="float: right;" href="{{route('idee.create')}}"> Ajouter une Idée</a>
 <div class="d-flex flex-wrap " style="gap:2rem;">
    @foreach ($idees as $idee)
  <div class="card-deck" style=" width:20rem;">
    <div class="card">
      <img class="card-img-top" src="https://img.freepik.com/photos-gratuite/vue-dessus-ampoule-allumee-ordinateur-portable_1232-673.jpg?t=st=1719529728~exp=1719533328~hmac=9fb5b3376caace9654cbcce450bf9bede1b8e20dba12504f87752b8ebd31eec3&w=1060" alt="Company logo">
      <div class="card-body bg-secondary ">

        <ul class="list-group bg-primary">
          <li class="list-group-item "><i class="fa fa-user "style="font-size:20px; color:blue;"></i>  {{$idee->auteur}}</li>
          <li class="list-group-item "><i class="fa-solid fa-lightbulb"style="font-size:20px; color:blue;"></i> {{$idee->libelle}}</li>
          <li class="list-group-item "> <a href="{{ route('idee.show', $idee->id) }}">Voir details</a></li>

        </ul>

      </div>

      <div class="card-footer d-flex justify-content-between bg-light " style="gap:2rem;">
        <a href="{{route ('idee.edit',$idee)}}" class="btn btn-primary">Modifier</a>
        <form action="{{route('idee.destroy',$idee)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
       </div>
    </div>
</div>
@endforeach

</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>


@endsection
