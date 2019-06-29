window.addEventListener('scroll', function() {

  const y = this.scrollY;

  const header = this.document.getElementsByClassName('header')[0];
  const presentation = this.document.getElementById('m-presentation');
  const competences = this.document.getElementById('m-competences');
  const creations = this.document.getElementById('m-creations');
  const plus = this.document.getElementById('m-plus');

  if (y > 75) {
    header.classList.add('header-reduc');
  }
  if (y < 75) {
    header.classList.remove('header-reduc');
  }

  // if (y > presentation.scrollTop && y < presentation.scrollHeight) 
  // { presentation.classList.add('active'); } 
  // else
  // { presentation.classList.remove('active'); }

  // if (y > competences.scrollTop) 
  // { competences.classList.add('active'); } 
  // if (y > competences.offsetHeight) 
  // { competences.classList.remove('active'); }

  // if (y > creations.scrollTop) 
  // { creations.classList.add('active'); } 
  // if (y > creations.offsetHeight) 
  // { creations.classList.remove('active'); }

  // if (y > plus.scrollTop) 
  // { plus.classList.add('active'); } 
  // if (y > plus.offsetHeight) 
  // { plus.classList.remove('active'); }
});