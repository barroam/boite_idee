@extends('base')
@section('main')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div style="display:flex; height:4rem;"></div>
        <div class="" style="margin-bottom:4rem;">
  <h1 class="text-center text-dark " style="font-weight: 800"> Entrer votre Idée</h1>
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
        @if (Auth::check() && Auth::user()->id == $idee->user_id)
        <a href="{{ route('idee.edit', ['idee' => $idee]) }}" class="btn btn-primary">Modifier</a>
    @endif


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







@endsection
