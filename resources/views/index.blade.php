@extends('layout.base')

@section('main')
<!-- Hero Section -->
<section class="hero-section py-5 bg-dark text-light text-center">
    <div class="container">
        <h4 class="display-4 text-center">Bienvenue</h4>
        <p class="lead">Nous offrons les meilleures solutions Vous .</p>
        <a href="{{route('idee.index')}}" class="btn btn-primary btn-lg">Mettez en place vos idées</a>
    </div>
</section>

<!-- Features Section -->
<section class="feature py-5 bg-white">
    <div class="container">
        <h4 class="display-4 text-center" >Nos Fonctionnalités</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-4">
                    <div class="card-body">
                        <i class="fas fa-envelope fa-4x mb-3"></i>
                        <h5 class="card-title">Notifications par Email</h5>
                        <p class="card-text">Recevez des notifications par email lors de l'approbation de nouvelles idées.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-dark mb-4">
                    <div class="card-body">
                        <i class="fas fa-tasks fa-4x mb-3"></i>
                        <h5 class="card-title">Gestion des Idées</h5>
                        <p class="card-text">Effectuez des opérations CRUD (Créer, Lire, Mettre à jour, Supprimer) sur les idées soumises.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-4">
                    <div class="card-body">
                        <i class="fas fa-user-lock fa-4x mb-3"></i>
                        <h5 class="card-title">Authentification Sécurisée</h5>
                        <p class="card-text">Assurez une connexion sécurisée pour soumettre et gérer vos idées.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h4 class="display-4 text-center mb-5">Nos Services</h4>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card text-center" style="background-color: #007bff; color: #ffffff;">
                    <div class="card-body">
                        <h3 class="card-title">Plateforme de Gestion d'Ideation Collaborative</h3>
                        <p class="card-text">
                            <strong>Description :</strong> Développez une plateforme en ligne où les entreprises
                             peuvent facilement collecter, organiser et évaluer les idées de leurs employés. Les
                             fonctionnalités incluraient la soumission d'idées, le vote, le classement par priorité,
                              et la gestion des cycles d'innovation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card text-center bg-dark text-white" >
                    <div class="card-body">
                        <h3 class="card-title">Consultation en Stratégie d'Innovation</h3>
                        <p class="card-text">
                            <strong>Description :</strong> Offrez des services de consultation aux entreprises pour
                            les aider à développer des stratégies d'innovation efficaces. Cela comprendrait l'analyse
                             des besoins en innovation, la création de plans d'action personnalisés, et la formation
                             du personnel sur les méthodologies d'innovation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card text-center bg-dark text-white" >
                    <div class="card-body">
                        <h3 class="card-title">Hackathons Virtuels et Événements de Brainstorming</h3>
                        <p class="card-text">
                            <strong>Description :</strong> Organisez des hackathons virtuels et des sessions
                             de brainstorming en ligne pour les entreprises cherchant à générer rapidement des
                             solutions créatives à leurs défis spécifiques. Facilitez la collaboration entre
                             les équipes et la mise en œuvre des meilleures idées issues de ces événements.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card text-center bg-primary text-white" style="">
                    <div class="card-body">
                        <h3 class="card-title">Formation en Innovation et Développement Personnel</h3>
                        <p class="card-text">
                            <strong>Description :</strong> Proposez des formations spécialisées pour aider
                             les employés à développer leurs compétences en innovation et leur développement
                              personnel. Les programmes incluraient des ateliers pratiques, des sessions de
                              coaching individuel, et des certifications reconnues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial py-5 bg-white">
    <div class="container">
        <h4 class="display-4 text-center">Les Témoignages</h4>
        <div class="row">

            <div class="col-md-4">
                <div class="card text-center bg-dark text-white mb-4">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">Des solutions innovantes et un support fantastique.</p>
                            <footer class="blockquote-footer">
                                <img src="https://lh3.google.com/u/0/ogw/AF2bZygnqXb-oKfWuESVPtlmT3d1vgqCYQkfJSe4WOyykfz-Zg=s32-c-mo" class="rounded-circle" alt="Client 2">
                                <cite class="mt-2">Amadou Barro</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-dark text-white mb-4">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">Excellent service, très satisfait.</p>
                            <footer class="blockquote-footer">
                                <img src="https://lh3.google.com/u/0/ogw/AF2bZygnqXb-oKfWuESVPtlmT3d1vgqCYQkfJSe4WOyykfz-Zg=s32-c-mo" class="rounded-circle" alt="Client 1">
                                <cite class="mt-2">Amadou Barro</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-dark text-white mb-4">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">Je recommande vivement cette entreprise.</p>
                            <footer class="blockquote-footer">
                                <img src="https://lh3.google.com/u/0/ogw/AF2bZygnqXb-oKfWuESVPtlmT3d1vgqCYQkfJSe4WOyykfz-Zg=s32-c-mo" class="rounded-circle" alt="Client 3">
                                <cite class="mt-2">Amadou Barro</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section class="about py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 rounded-2">
                <img class="rounded-3" width="100%" height="auto" style="object-fit: cover;" src="https://media.licdn.com/dms/image/D4E03AQH_edEKl4Lfhg/profile-displayphoto-shrink_800_800/0/1693355856042?e=1726099200&v=beta&t=LVAYolWfo5o0MYPqHA2ZPC6Qbm0hFj31ZSWIy_oKvG8" class="img-fluid" alt="À propos de nous">
            </div>
            <div class="col-md-6" style="font-size: 1.2rem">
                <h2>À propos de Moi</h2>
                <p>Je suis un développeur fullstack junior passionné,
                     actuellement en formation chez Simplon Sénégal.
                     Mon parcours m'a permis de maîtriser les technologies modernes
                     du développement web.
                     <br> J'ai  conçu cette application
                      en utilisant UML pour faire l'analyse et la conception ,le developpement Backend le framework Laravel, reconnu pour sa robustesse et sa
                      flexibilité. Grâce à MySQL, j'ai mis en place une base de données performante
                       qui soutient efficacement les fonctionnalités de mon application. Sur le plan
                        esthétique et ergonomique, j'ai enrichi l'expérience utilisateur en utilisant
                        Bootstrap et CSS, assurant ainsi une interface utilisateur intuitive et moderne.
<br>
                    Mon approche combine créativité et rigueur technique pour
                     répondre aux besoins spécifiques de mes projets. Je suis particulièrement
                      enthousiaste à l'idée de contribuer au secteur numérique en développant des
                      solutions innovantes et évolutives. </p>
                      <a href="mailto:barroama23@gmail.com" class="btn btn-primary">Contacter moi</a>

            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<!-- Exemple de formulaire de contact -->
<section class="contact py-5">
    <div class="container">
        <h4 class="display-4 text-center">Formulaire</h4>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Contactez-moi</h2>
                        <form action="mailto:votre_email@gmail.com" method="post" enctype="text/plain">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="">
    <div class="container text-center">
        <h1 class="text-center">Contactez moi</h1>
        <div class="row">
            <div class="col-md-4  ">
                <h5>Adresse</h5>
                <p>Dakar,Sénégal</p>
            </div>
            <div class="col-md-4  ">
                <h5>Téléphone</h5>
                <p>782251774</p>
            </div>
            <div class="col-md-4 ">
                <h5>Email</h5>
                <p>barroama23@gmail.com</p>
            </div>
        </div>
    </div>
</footer>


@endsection

