
//class active

const pagina_URL = window.location.href;

var homepage = "homepage";
var contatti = "contatti";
var prenota = "prenota";
var scopri = "scopri";
var tour = "tour";
var prezzi = "prezzi";
var login = "login"
var profile = "profile"

var activePage = "";


if (pagina_URL.includes(homepage)){
    activePage = homepage;
}
if (pagina_URL.includes(profile)){
    activePage = profile;
}
if (pagina_URL.includes(contatti)){
    activePage = contatti;
}
if (pagina_URL.includes(prenota)){
    activePage = prenota;
}
if (pagina_URL.includes(scopri)){
    activePage = scopri;
}
if (pagina_URL.includes(tour)){
    activePage = tour;
}
if (pagina_URL.includes(prezzi)){
    activePage = prezzi;
}
if (pagina_URL.includes(login)){
    activePage = login;
}


if(activePage == ""){
    activePage = homepage;
}

const page = document.querySelectorAll('.navbar-link a').
forEach (link => {


    if(link.href.includes(activePage)){
        link.classList.add('active');
        console.log(link.classList);
    }

});




