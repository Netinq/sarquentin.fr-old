@extends('layouts.app', ['styles' => ['legal']])

@section('content')
    <div class="col-12 col-md-6 col-lg-5 txt content">
        <h1>Mentions légales et Conditions Générales de vente</h1>
        <p>
            Publicites.fr propose un service de dépôt et de consultation d’espace publicitaire sur Internet destiné aux professionnels, commerçants, particuliers, ou plus généralement toute personne susceptible de vouloir se faire connaître, et améliorer son image sur internet.
            L'accès au site, sa consultation et son utilisation sont subordonnés à l'acceptation sans réserve des présentes Conditions Générales d'Utilisation et des Conditions Générales de Vente ci-après.
        </p>
    </div>
    <div class="col-12 col-md-6 col-lg-7 home-landing">
        <img id="home-ld-bg" src="{{asset('images/landing/home.png')}}" alt="Landing background">
    </div>
@endsection
