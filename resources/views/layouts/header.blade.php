<header class="row d-none d-lg-flex">
    <div class="logo col-6">
        <img src="{{asset('images/logo.png')}}">
    </div>
    <div class="menu col-6">
        <a href="#"><div class="menu-elem">
            Accueil
        </div></a>
        <a href="#"><div class="menu-elem">
            Services
        </div></a>
        <a href="#"><div class="menu-elem">
            Tarifs
        </div></a>
        <a href="#"><div class="menu-elem">
            Devis
        </div></a>
        <a href="#"><div class="menu-elem">
            About
        </div></a>
    </div>
</header>
<header class="row d-flex d-lg-none">
    <div class="logo col-6">
        <img src="{{asset('images/logo.png')}}">
    </div>
    <div class="menu col-6">
        <img onclick="display_header();" id="open" src="{{asset('images/svg/burger.svg')}}">
    </div>
</header>
<div class="menu-m">
    <img class="landing" src="{{asset('images/landing/home.png')}}">
    <div class="top" id="close"  onclick="hide_header();">
        <img src="{{asset('images/svg/burger.svg')}}">
        <span>Fermer</span>
    </div>
    <div class="list">
        <a href="#">
            <div class="elem">
                Accueil
            </div>
        </a>
        <a href="#">
            <div class="elem">
                Services
            </div>
        </a>
        <a href="#">
            <div class="elem">
                Tarifs
            </div>
        </a>
        <a href="#">
            <div class="elem">
                Devis
            </div>
        </a>
        <a href="#">
            <div class="elem">
                About
            </div>
        </a>
    </div>
</div>

<script>
    $(".page-header ul a").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(href).offset().top }, 800);
  });

</script>
