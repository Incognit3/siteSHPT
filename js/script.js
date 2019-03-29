$(document).ready(function(){
      $('.slider').bxSlider();
      adaptiveHeight: false;
      touchEnabled: true;
      pager: false;
    });

var menuElem = document.getElementById('priem');

menuElem.onclick = function() {
      menuElem.classList.toggle('open');
};