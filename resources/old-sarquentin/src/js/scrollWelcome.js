var event = 0,
  welcomePose = 0;
  elem = null;

function move(el) {
  if (welcomePose==0) { y = 450; welcomePose = 1; } else { y = 0; welcomePose = 0; }
  if (event == 1) return; event = 1;
  elem = document.querySelector(el);
  var top = parseInt( getComputedStyle( elem, null ).getPropertyValue( 'top' ), 10 ),
    dy = top + y,
    i = 1;
  function loop() {
    if ( i >= 20 ) { window.scrollTo(0,0); event = 0; return; } i += 1;
    elem.style.top = ( top - ( dy * i / 20 ) ) + 'px';
    setTimeout( loop, 20 );
} loop(); }