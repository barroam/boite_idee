@extends('layout.base')
@section('main')
<div class="" style="">
    <div class="card" style="">
        <img src="https://img.freepik.com/photos-gratuite/arc-fleche-tir-arc-cible-derriere_91128-4447.jpg?t=st=1719534699~exp=1719538299~hmac=d5ce09104f35f246d456e179ccc5fd3a2aef2d83075cad4e60f52f2fc9fd3bbc&w=1380"  style="height: 25rem; object-fit:cover;">
        <div class="card-body container mt-3">
            <h3 class="card-title text-center text-primary"> <strong>Titre: </strong>{{$idee->libelle}}</h3>
<div class="rounded-1 " style=" ;font-size:1.5rem;"><strong> Approbation :</strong> <p class="badge bg-dark text-light"> {{$idee->status}}  </p> </div>
<h5 class="card-title"><strong>Description:</strong> </h5>
            <p class="card-text" style="font-size: 1.2rem">
                {{$idee->description}}
            </p>
            <p class="card-text">
                <ul class="list-unstyled">

                    @foreach($categories as $categorie)
                    @if($categorie->id == $idee->categorie_id)
                    <li><strong>Catégorie:</strong> {{$categorie->libelle}}</li>
                    @endif
                    @endforeach
                    <li><strong>Date de publication:</strong> {{$idee->created_at}}</li>
                    <li><strong>Addresse Email:</strong> {{$idee->user->email}}</li>

                </ul>
            </p>

        </div>

        <div class="container mt-4">
            <div class=" p-4">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Commentaires</h3>
                        <!-- Liste des commentaires -->
                        <ul class="list-unstyled">
                            @foreach ($commentaires as $commentaire)
                            <li>
                                <div class="media">
                                    <img style="width: 4rem; height:4rem;" class="mr-3 rounded-circle" src="https://images.pexels.com/photos/11265080/pexels-photo-11265080.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Utilisateur">
                                    <div class="media-body">
                                        <h5 class="mt-0">{{$commentaire->auteur}}</h5>
                                       <p>{{$commentaire->contenu}}</p>
                                    </div>
                                </div>
                                <a href="{{route ('commentaire.edit', $commentaire )}}">Modifier</a>
                                <form action="{{route('commentaire.destroy',$commentaire)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </li>
                            @endforeach
                            <!-- Ajoutez plus de <li> pour chaque commentaire -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Ajouter un commentaire</h3>
                        <!-- Formulaire d'ajout de commentaire -->
                        <form action="{{route('commentaire.store')}}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                             <!--  -->   <input type="hidden" name="idee_id" value="{{$idee->id}}">
                                <label for="auteur">Nom</label>
                                <input type="text" class="form-control" id="auteur" name="auteur">
                            </div>
                            <div class="form-group">
                                <label for="contenu">Commentaire</label>
                                <textarea class="form-control" id="contenu" name="contenu" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





<div class="d-flex justify-content-center align-items-center   " style="margin-top:3rem; gap:2rem;">
   <!-- Formulaire pour approuver -->
   @if(Auth::check() && Auth::user()->isAdmin())

   <form action="{{ route('idees.approuver', $idee->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('PUT')

    <button type="submit" class="btn btn-success">Approuver</button>
</form>
@endif

<!-- Formulaire pour refuser -->
@if(Auth::check() && Auth::user()->isAdmin())

<form action="{{ route('idees.refuser', $idee->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('PUT')

    <button type="submit" class="btn btn-danger">Refuser</button>
</form>
@endif
</div>



</div>
    </div>




</div>




<!-- limite -->



@endsection
