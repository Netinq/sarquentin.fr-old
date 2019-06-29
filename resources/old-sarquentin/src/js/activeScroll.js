window.addEventListener('scroll', function() {
  var y = this.scrollY;
  var a = document.getElementById("apropos");
  var b = document.getElementById("competences");
  var c = document.getElementById("realisations");
  var d = document.getElementById("contact");
  var textHide = document.getElementsByClassName("text-hide");
  var competencesTiret = document.getElementById("competencesTiret");
  var competencesHide = document.getElementsByClassName("competences-hide");
  var langages = document.getElementsByClassName("langage");
  var reaTiret = document.getElementById("reaTiret");
  var reaHide = document.getElementsByClassName("rea-hide");
  var slide = document.getElementsByClassName("slide");
  if (y>=document.body.clientHeight/1.5) {
    d.classList.add("active");
    b.classList.remove("active");
    c.classList.remove("active");
    a.classList.remove("active");
    return;
  }

  if (y>=document.body.clientHeight/3) {
    reaTiret.classList.add("tiret-active");
    for (var o = reaHide.length - 1; o >= 0; o--) {
      reaHide[o].classList.remove("hide");
    }
    for (var i2 = slide.length - 1; i2 >= 0; i2--) {
      slide[i2].classList.add("rea-active");
    }
  }
  if (y>=document.body.clientHeight/2.5) {
    c.classList.add("active");
    a.classList.remove("active");
    b.classList.remove("active");
    d.classList.remove("active");
    return;
  }

  if (y>=document.body.clientHeight/8) {
    competencesTiret.classList.add("tiret-active");
    for (var i = langages.length - 1; i >= 0; i--) {
      langages[i].classList.add("langage-active");
    }
    for (var i = textHide.length - 1; i >= 0; i--) {
      textHide[i].classList.add("text-active");
    }
    for (var o = competencesHide.length - 1; o >= 0; o--) {
      competencesHide[o].classList.remove("hide");
    }
  }
  if (y>=document.body.clientHeight/4.75) {
    b.classList.add("active");
    a.classList.remove("active");
    c.classList.remove("active");
    d.classList.remove("active");
    return;
  }

  if(y<=50) {
    reaTiret.classList.remove("tiret-active");
    competencesTiret.classList.remove("tiret-active");
    for (var i1 = reaHide.length - 1; i1 >= 0; i1--) {
      reaHide[i1].classList.add("hide");
    }
    for (var i2 = slide.length - 1; i2 >= 0; i2--) {
      slide[i2].classList.remove("rea-active");
    }
    for (var i3 = langages.length - 1; i3 >= 0; i3--) {
      langages[i3].classList.remove("langage-active");
    }
    for (var i = textHide.length - 1; i >= 0; i--) {
      textHide[i].classList.remove("text-active");
    }
    for (var o = competencesHide.length - 1; o >= 0; o--) {
      competencesHide[o].classList.add("hide");
    }
  }
  if (y>=0) {
    a.classList.add("active");
    b.classList.remove("active");
    c.classList.remove("active");
    d.classList.remove("active");
    return; 
  }
});