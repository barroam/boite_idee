@extends('layout.base')
@section('main')
<div style="width: 100%; height:2rem;" >
</div>

 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary" >
                    <h4>Inscription</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <form action="{{route('registerPost')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                        <br>
                        <p> Si vous avez un de compte ? <a href="/login">Se connecter</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="width: 100%; height:5rem;" >
</div>
@endsection
