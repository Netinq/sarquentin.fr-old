@section('description', 'Créez votre vitrine en ligne, développez un e-commerce, proposez un service de réservation en ligne à vos clients...')

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name='author' content='Quentin Sar, Netinq'>
        <meta name='owner' content='Quentin Sar'>
        <meta name='subject' content="Quentin Sar">

        <meta name='identifier-URL' content='sarquentin.fr'>
        <meta name="description" content="@yield('description')">
        <meta name='reply-to' content='contact@sarquentin.fr'>

        <meta name='language' content='FR'>
        <meta name='target' content='all'>
        <meta name='theme-color' content='#FAEC71'>

        <link rel='shortcut icon' type='image/png' href='{{ asset('images/logo.png') }}'>
        {{-- <link rel='logo' type='image/png' href='{{ asset('images/logo.png') }}'> --}}
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}" />

        <!-- Twitter Card meta -->
        <meta name='twitter:card' content='summary'>
        <meta name="twitter:site" content="@Netinq" />
        <meta name="twitter:title" content="@hasSection('title') {{Config::get('app.name')}} - @yield('title') @else Lancez votre activité sur le web, dès maintenant @endif" />
        <meta name='twitter:url' content='https://sarquentin.fr' />
        <meta name='twitter:domain' content='sarquentin.fr' />
        <meta name="twitter:description" content="@yield('description')" />
        <meta name="twitter:image" content="{{asset('images/meta.png')}}" />

        <!-- Open Graph meta -->
        <meta property='og:title' content='@hasSection('title') {{Config::get('app.name')}} - @yield('title') @else Lancez votre activité sur le web, dès maintenant @endif' />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:image" content="{{asset('images/meta.png')}}" />
        <meta property='og:type' content='website' />
        <meta property='og:url' content='https://sarquentin.fr' />
        <meta property='og:site_name' content='{{Config::get('app.name')}}' />
        <meta property='author' content='Quentin Sar' />
        <meta property='profile:gender' content='male' />
        <meta property="og:locale" content="fr_FR" />

        <!-- IOS meta -->
        <meta name="apple-mobile-web-app-title" content="{{Config::get('app.name')}}">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>
            @hasSection('title') {{Config::get('app.name')}} : @yield('title')
            @else Lancez votre activité sur le web, dès maintenant @endif
        </title>

        {{-- <meta http-equiv="content-language" content="fr"> --}}

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
