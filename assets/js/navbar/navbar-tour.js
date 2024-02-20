

window.addEventListener("scroll", function(){

    var soleil = document.querySelector(".tour");
    soleil.classList.toggle("sticky", window.scrollY > 230);


    
});

