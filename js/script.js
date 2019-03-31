$(document).ready(function(){
      $('.slider').bxSlider();
      adaptiveHeight: false;
      touchEnabled: true;
      pager: false;
    });

var form = document.getElementById('priem');
var formasv = document.getElementById('form');

form.onclick = function() {
     formasv.classList.toggle('open');
};


var menu1 = document.getElementById('menu1');
var menu2 = document.getElementById('menu2');
var menulist = document.getElementById('menulist');
var menu3 = document.getElementById('menu3');
var menu4 = document.getElementById('menu4');

menu1.onclick = function() {
      menu1.classList.toggle('open');
};
menu2.onclick = function() {
      menulist.classList.toggle('open');
};
menu3.onclick = function() {
      menu3.classList.toggle('open');
};
menu4.onclick = function() {
      menu4.classList.toggle('open');
};