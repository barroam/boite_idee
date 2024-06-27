@extends('base')
@section('main')
<div class="d-flex flex-wrap gap-3" style="width:100%;">
    <div class="card" style="width: 25rem ; height:25rem;" >
        <div class="card-body">

            <h5 class="card-title"> {{$idee->libelle}}</h5>
            <p class="card-text">{{$idee->description}}</p>
            <h6 class="card-subtitle mb-2 badge">  {{$idee->categorie}}</h6>
            <h6 class="card-text"> {{$idee->auteur}}</h6>
            <h1>{{$idee->status}}</h1>
            @foreach($categories as $categorie)
            @if($categorie->id == $idee->categorie_id)
                <p class="card-text"><strong>Catégorie:</strong> {{$categorie->libelle }}</p>
            @endif
            @endforeach
            <p class="card-text"><small class="text-muted">{{$idee->date_creation}}</small></p>
        
        </div>
    </div>
</div>
        <div>
            <div class="">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Commentaires</h3>
                        <!-- Liste des commentaires -->
                        <ul class="list-unstyled">
                            @foreach ($commentaires as $commentaire)
                            <li>
                                <div class="media">
                                    <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="Utilisateur">
                                    <div class="media-body">
                                        <h5 class="mt-0">{{$commentaire->auteur}}</h5>
                                       <p>{{$commentaire->contenu}}</p>
                                    </div>
                                </div>
                                <a href="{{route ('commentaire.edit', $commentaire )}}">Modifier</a>
                                <a href="#">Supprimer</a>
                            </li>
                            @endforeach
                            <!-- Ajoutez plus de <li> pour chaque commentaire -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Ajouter un commentaire</h3>
                        <!-- Formulaire d'ajout de commentaire -->
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="nomUtilisateur">Nom</label>
                                <input type="text" class="form-control" id="nomUtilisateur" name="nomUtilisateur">
                            </div>
                            <div class="form-group">
                                <label for="contenuCommentaire">Commentaire</label>
                                <textarea class="form-control" id="contenuCommentaire" name="contenuCommentaire" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div>

</div>

<div class="d-flex justify-content-center align-items-center " style="margin: auto 00; gap:2rem;">
   <!-- Formulaire pour approuver -->
   <form action="{{ route('idees.approuver', $idee->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('PUT')

    <button type="submit" class="btn btn-success">Approuver</button>
</form>

<!-- Formulaire pour refuser -->
<form action="{{ route('idees.refuser', $idee->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('PUT')

    <button type="submit" class="btn btn-danger">Refuser</button>
</form>

</div>



</div>


@endsection
