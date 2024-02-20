

//menu a tendina
const menu = document.querySelector(".nav-menu");
menu.onclick = function() {
  
  navLinks = document.querySelector(".navbar-link");
  navLinks.classList.toggle('mobile-menu-navbar');

  /*paragrafocentrale = document.querySelector(".paragrafo-centrale");
  paragrafocentrale.classList.toggle('mobile-menu-paragrafocentrale');*/

}

