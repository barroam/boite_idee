@extends('base')
@section('main')
<div class="container mt-4">
                    <div class="col-md-4">
                        <h3>Ajouter un commentaire</h3>
                        <!-- Formulaire d'ajout de commentaire -->
                        <form action="{{route('commentaire.update',$commentaire)}}" method="POST">
                            @csrf
                            @method('PUT')
                                   <!-- -->   <input type="hidden" name="idee_id" value="{{$commentaire->idee_id}}">
                            <div class="form-group">
                                <label for="nomUtilisateur">Nom</label>
                                <input type="text" class="form-control" id="auteur" name="auteur" value="{{$commentaire->auteur}}">
                            </div>
                            <div class="form-group">
                                <label for="contenuCommentaire">Commentaire</label>
                                <textarea class="form-control" id="contenu" name="contenu" rows="3">{{$commentaire->contenu}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>

</div>




@endsection
