$(document).ready(function(){
      $('.slider').bxSlider();
      adaptiveHeight: false;
      touchEnabled: true;
      pager: false;
    });

var form = document.getElementById('priem');

form.onclick = function() {
      form.classList.toggle('open');
};


var menu1 = document.getElementById('menu1');
var menu2 = document.getElementById('menu2');
var menu3 = document.getElementById('menu3');
var menu4 = document.getElementById('menu4');
menu1.onclick = function() {
      menu1.classList.toggle('open');
};
menu2.onclick = function() {
      menu2.classList.toggle('open');
};
menu3.onclick = function() {
      menu3.classList.toggle('open');
};
menu4.onclick = function() {
      menu4.classList.toggle('open');
};