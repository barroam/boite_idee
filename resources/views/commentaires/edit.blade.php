@extends('base')
@section('main')

                    <div class="col-md-4">
                        <h3>Ajouter un commentaire</h3>
                        <!-- Formulaire d'ajout de commentaire -->
                        <form action="#" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nomUtilisateur">Nom</label>
                                <input type="text" class="form-control" id="nomUtilisateur" name="nomUtilisateur " value="{{$commentaire->auteur}}">
                            </div>
                            <div class="form-group">
                                <label for="contenuCommentaire">Commentaire</label>
                                <textarea class="form-control" id="contenuCommentaire" name="contenuCommentaire" rows="3">{{$commentaire->contenu}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>






@endsection
