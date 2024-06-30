<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boîte à Idées</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9eaf1;
        }
        .navbar, .footer {
            background-color: #007bff; /* Bleu Bootstrap */
        }
        .navbar-brand, .nav-link, .footer p {
            color: white;
        }
        .footer {
            padding: 10px 0;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{route('idee.index')}}">Boîte à Idées</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('idee.index')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categorie.index')}}">Catégories</a>
                </li>
                <li class="nav-item">
                    @if (Auth::guest())
                    <a class="btn btn-light ml-3" href="/login">Connexion</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if(Auth::check())
                    <form action="{{route('logout')}}" method="POST" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-light ml-3" type="submit" >Deconnexion</button>
                    </form>
                  @endif
                </li>

            </ul>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="" style="">
@yield('main')
    </div>
<div style="height: 3rem;">

</div>
    <!-- Footer -->
    <footer class="footer" style=" ">
        <div class="container">
            <p>&copy; 2024 Boîte à Idées. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
