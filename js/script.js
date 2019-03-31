$(document).ready(function(){
      $('.slider').bxSlider();
      adaptiveHeight: false;
      touchEnabled: true;
      pager: false;
    });

var form = document.getElementById('priem');
var formasv = document.getElementById('formasv');

form.onclick = function() {
     form.classList.add('open');
};
formasv.ondblclick = function() {
     form.classList.remove('open');
};


var menu1 = document.getElementById('menu1');
var menu2 = document.getElementById('menu2');
var menulist = document.getElementById('menulist');
var menu3 = document.getElementById('menu3');
var menu4 = document.getElementById('menu4');

menu1.onmouseover = function() {
      menu1.classList.toggle('open');
};
 menu1.onmouseout = function() {
      menu1.classList.remove('open');
};
menu2.onmouseover = function() {
      menulist.classList.toggle('open');
};
 menu2.onmouseout = function() {
      menulist.classList.remove('open');
};
menu3.onmouseover = function() {
      menu3.classList.toggle('open');
};
 menu3.onmouseout = function() {
      menu3.classList.remove('open');
};
menu4.onmouseover = function() {
      menu4.classList.toggle('open');
};
 menu4.onmouseout = function() {
      menu4.classList.remove('open');
};