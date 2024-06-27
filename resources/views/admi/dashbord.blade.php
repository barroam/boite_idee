@extends('base')
@section('main')
<div class="container mt-5">
    <div class="card shadow">
      <div class="card-body text-center">
        <img src="https://via.placeholder.com/150" alt="Profile Image" class="profile-image mb-3">
        <h5 class="card-title">Profil Utilisateur</h5>
        <p class="card-text">Informations sur l'utilisateur vont ici.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><i class="fas fa-user"></i> Nom: John Doe</li>
        <li class="list-group-item"><i class="fas fa-birthday-cake"></i> Âge: 30 ans</li>
        <li class="list-group-item"><i class="fas fa-envelope"></i> Email: john.doe@example.com</li>
      </ul>
      <div class="card-body d-flex justify-content-center">
        <a href="#" class="btn btn-primary me-2"><i class="fas fa-edit me-1"></i> Modifier</a>
       <!--  <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt me-1"></i> Supprimer</a> -->
      </div>
    </div>
  </div>
  @endsection
