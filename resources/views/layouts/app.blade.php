@section('description', 'Créez votre vitrine en ligne, développez un e-commerce, proposez un service de réservation en ligne à vos clients...')

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name="author" content="MONSIEUR QUENTIN SAR, Netinq">
        <meta name="owner" content="MONSIEUR QUENTIN SAR">
        <meta name="subject" content="MONSIEUR QUENTIN SAR">

        <meta name="identifier-URL" content="sarquentin.fr">
        <meta name="description" content="@yield('description')">
        <meta name="reply-to" content="contact@sarquentin.fr">

        <meta name="language" content="FR">
        <meta name="target" content="all">
        <meta name="theme-color" content="#E7BD53">

        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}" />

        <!-- Twitter Card meta -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Netinq" />
        <meta name="twitter:title" content="@hasSection('title') {{Config::get('app.name')}} - @yield('title') @else Lancez votre activité sur le web, dès maintenant @endif" />
        <meta name="twitter:url" content="https://sarquentin.fr" />
        <meta name="twitter:domain" content="sarquentin.fr" />
        <meta name="twitter:description" content="@yield('description')" />
        <meta name="twitter:image" content="{{asset('images/meta.png')}}" />

        <!-- Open Graph meta -->
        <meta property="og:title" content="@hasSection('title') {{Config::get('app.name')}} - @yield('title') @else Lancez votre activité sur le web, dès maintenant @endif" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:image" content="{{asset('images/meta.png')}}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://sarquentin.fr" />
        <meta property="og:site_name" content="{{Config::get('app.name')}}" />
        <meta property="author" content="MONSIEUR QUENTIN SAR" />
        <meta property="profile:gender" content="male" />
        <meta property="og:locale" content="fr_FR" />

        <!-- IOS meta -->
        <meta name="apple-mobile-web-app-title" content="{{Config::get('app.name')}}">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "MONSIEUR QUENTIN SAR",
                "legalName": "MONSIEUR QUENTIN SAR",
                "description": "Créez votre vitrine en ligne, développez un e-commerce, proposez un service de réservation en ligne à vos clients...",
                "image": "https://sarquentin.fr/images/meta.png",
                "logo": "https://sarquentin.fr/images/logo.png",
                "url": "https://sarquentin.fr",
                "email": "pro@sarquentin.fr"
            }
        </script>

        <title>
            @hasSection('title') {{Config::get('app.name')}} : @yield('title')
            @else Lancez votre activité sur le web, dès maintenant @endif
        </title>

        <!-- STATIC Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/header.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/top.css') }}">

        <!-- STATIC Scripts -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/scroll.js')}}"></script>
        <script src="{{asset('js/header.js')}}"></script>

        @hasSection('noMaster') @else
            <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
        @endif

        <!-- GENERATE Stylesheet -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132838792-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-132838792-1');
        </script>

        <script data-ad-client="ca-pub-4501219983180544" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        @if($styles ?? null)
            @foreach($styles as $style)
            <link rel="stylesheet" type="text/css"
            href="{{ asset('css/'.$style.'.css') }}">
            @endforeach
        @endif
    </head>


    <body class="row" itemscope itemtype="https://schema.org/LocalBusiness">
        <meta itemprop="name" content = "MONSIEUR SAR QUENTIN">
        <meta itemprop="url" content = "https://sarquentin.fr">
        <meta itemprop="telephone" content = "0750976893">
            @include('layouts.header')
        @yield('content')
    </body>

    @if($scripts ?? null)
        @foreach($scripts as $script)
        <script src="{{ asset('js/'.$script.'.js') }}"> </script>
        @endforeach
    @endif
</html>
