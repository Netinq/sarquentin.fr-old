<header class="row d-none d-lg-flex">
    <div class="logo col-6">
        <img itemprop="logo" src="{{asset('images/logo.png')}}" alt="Logo">
    </div>
    <div class="menu col-6" id="menu">
        <a href="#home"><div class="menu-elem">
            Accueil
        </div></a>
        <a href="#services"><div class="menu-elem">
            Services
        </div></a>
        <a href="#tarifs"><div class="menu-elem">
            Tarifs
        </div></a>
        <a href="#devis"><div class="menu-elem">
            Devis
        </div></a>
        <a href="#plus"><div class="menu-elem">
            Plus
        </div></a>
    </div>
</header>
<header class="row d-flex d-lg-none">
    <div class="logo col-6">
        <img itemprop="logo" src="{{asset('images/logo.png')}}" alt="Logo">
    </div>
    <div class="menu col-6">
        <svg id="open" onclick="display_header();" xmlns="http://www.w3.org/2000/svg" width="38" height="21" viewBox="0 0 38 21"  alt="Burger Menu">
            <g id="burger" transform="translate(-285 -22)">
              <line id="Ligne_8" data-name="Ligne 8" x2="35" transform="translate(286.5 23.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
              <line id="Ligne_9" data-name="Ligne 9" x2="19" transform="translate(302.5 32.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
              <line id="Ligne_10" data-name="Ligne 10" x2="27" transform="translate(294.5 41.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
            </g>
          </svg>
    </div>
</header>
<div class="menu-m">
    <img class="landing" src="{{asset('images/landing/home.png')}}" alt="Landing background">
    <div class="top" id="close"  onclick="hide_header();">
        <img src="{{asset('images/svg/burger.svg')}}" alt="Burger menu">
        <span>Fermer</span>
    </div>
    <div class="list">
        <a href="#home" onclick="hide_header();">
            <div class="elem">
                Accueil
            </div>
        </a>
        <a href="#services" onclick="hide_header();">
            <div class="elem">
                Services
            </div>
        </a>
        <a href="#tarifs">
            <div class="elem">
                Tarifs
            </div>
        </a>
        <a href="#devis">
            <div class="elem">
                Devis
            </div>
        </a>
        <a href="#plus">
            <div class="elem">
                Plus
            </div>
        </a>
    </div>
</div>
