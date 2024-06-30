@extends('base')
@section('main')



<!doctype html>
<html lang="en">

    <div class="jumbotron jumbotron-fluid bg-dark text-light">
        <div class="container">
          <h1 class="display-4">Exprimez vos Idées et Faites la Différence !</h1>
          <p class="lead">Avez-vous une idée brillante qui pourrait améliorer notre entreprise,
             nos produits ou notre environnement de travail ? Nous voulons entendre vos suggestions !
           Déposez vos idées dans notre boîte à idées
                et contribuez à notre succès collectif. Votre créativité et votre engagement peuvent
                 faire une véritable différence. Merci de votre participation !</p>
        </div>
      </div>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body >

        <div class="" style="margin-bottom:4rem;">
            <h1 class=" d-flex justify-content-center text-dark p-2  " style="font-weight:800;">Ajouter votre idée </h1>
  <a href="{{route('idee.create')}}" class="d-flex justify-content-center">
    <img  style="width:20rem; height:20rem; border:0.2rem #007bff solid ; " src="https://img.freepik.com/photos-gratuite/vue-face-du-concept-elections-espace-copie_23-2148499944.jpg?ga=GA1.1.987826604.1713952553" alt="">
  </a>
  <p class="text-center"> Cliquer sur la boite pour ajouter votre idée</p>
        </div>


  <div class="header">
    <h1 class=" d-flex justify-content-center text-dark p-2  " style="font-weight:800;">Liste des  idées </h1>
  </div>
 <div class="d-flex flex-wrap container  " style="gap:2rem; margin-top:3rem;">
    @foreach ($idees as $idee)
  <div class="card-deck" style=" width:22rem;">
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
        @if(Auth::check() && Auth::user()->isAdmin())
        <form action="{{route('idee.destroy',$idee)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
        @endif
       </div>
    </div>
</div>
@endforeach

</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <div style="height: 4rem;"></div>
  <div style="position: relative; width: 100%; height: 0; padding-top: 30.0000%; overflow: hidden; will-change: transform; background:white;">
    <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0; background:white;"
      src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGJhFtY3IU&#x2F;xEZ8oP_iJvEE7choyrlXpg&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
    </iframe>
  </div>

</html>


@endsection
