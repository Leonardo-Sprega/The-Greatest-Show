
$(document).ready(function(){


    $(".animali").click(function(){


        $(".animali").css("background-color", "rgb(255, 255, 0)");

        $(".animali").css("color", "black");
        $(".acrobati").css("color", "azure");
        $(".mangiafuoco").css("color", "azure");

        $(".acrobati").css("background-color", " #000041");
        $(".mangiafuoco").css("background-color", "#000041 ");

        $(".card-1").css("background-image","url(../../assets/immagini/animali/animale-1.png)")
        $(".card-2").css("background-image","url(../../assets/immagini/animali/animale-2.jpg")
        $(".card-3").css("background-image","url(../../assets/immagini/animali/animale-3.jpg")
        $(".card-4").css("background-image","url(../../assets/immagini/animali/animale-4.jpg")
        $(".card-5").css("background-image","url(../../assets/immagini/animali/animale-5.jpg")
        $(".card-6").css("background-image","url(../../assets/immagini/animali/animale-6.jpg")
        $(".card-7").css("background-image","url(../../assets/immagini/animali/animale-7.jpg")

    });
    $(".acrobati").click(function(){


        $(".acrobati").css("background-color", "rgb(255, 255, 0)");

        $(".acrobati").css("color", "black");
        $(".animali").css("color", "azure");
        $(".mangiafuoco").css("color", "azure");

        $(".animali").css("background-color", " #000041");
        $(".mangiafuoco").css("background-color", " #000041");

        $(".card-1").css("background-image","url(../../assets/immagini/acrobati/trapezista-1.jpg)")
        $(".card-2").css("background-image","url(../../assets/immagini/acrobati/trapezista-2.jpg")
        $(".card-3").css("background-image","url(../../assets/immagini/acrobati/trapezista-3.jpg")
        $(".card-4").css("background-image","url(../../assets/immagini/acrobati/trapezista-4.jpg")
        $(".card-5").css("background-image","url(../../assets/immagini/acrobati/trapezista-5.jpg")
        $(".card-6").css("background-image","url(../../assets/immagini/acrobati/trapezista-6.jpg")
        $(".card-7").css("background-image","url(../../assets/immagini/acrobati/trapezista-7.jpg")

    });
    $(".mangiafuoco").click(function(){


        $(".mangiafuoco").css("background-color", "rgb(255, 255, 0)");

        $(".mangiafuoco").css("color", "black");
        $(".animali").css("color", "azure");
        $(".acrobati").css("color", "azure");

        $(".acrobati").css("background-color", " #000041");
        $(".animali").css("background-color", "#000041 ");

        $(".card-1").css("background-image","url(../../assets/immagini/mangiafuoco/mangiafuoco-1.jpg)")
        $(".card-2").css("background-image","url(../../assets/immagini/mangiafuoco/mangiafuoco-2.jpg")
        $(".card-3").css("background-image","url(../../assets/immagini/mangiafuoco/mangiafuoco-3.jpg")
        $(".card-4").css("background-image","url(../../assets/immagini/mangiafuoco/mangiafuoco-4.jpg")
        $(".card-5").css("background-image","url(../../assets/immagini/mangiafuoco/mangiafuoco-5.jpg")
        $(".card-6").css("background-image","url(../../assets/immagini/mangiafuoco/mangiafuoco-6.jpg")
        $(".card-7").css("background-image","url(../../assets/immagini/mangiafuoco/mangiafuoco-7.jpg")


    });

    $(".animali").hover(function(){

        $(".animali").css("transition", " 0.5s ease-in-out ");
        $(".animali").css("background-color", " rgb(255, 255, 0)");
        $(".animali").css("color", "black");

        }, function() {

            $(".animali").css("transition", " 0.5s ease-in-out ");
            $(".animali").css("background-color", "#000041");
            $(".animali").css("color", "azure");
        }
    
    );

    
    $(".mangiafuoco").hover(function(){

        $(".mangiafuoco").css("transition", " 0.2s ease-in-out ");
        $(".mangiafuoco").css("background-color", " rgb(255, 255, 0)");
        $(".mangiafuoco").css("color", "black");

        }, function() {

            $(".mangiafuoco").css("transition", " 0.2s ease-in-out ");
            $(".mangiafuoco").css("background-color", "#000041");
            $(".mangiafuoco").css("color", "azure");
        }
    
    );
    $(".acrobati").hover(function(){

        $(".acrobati").css("transition", " 0.2s ease-in-out ");
        $(".acrobati").css("background-color", " rgb(255, 255, 0)");
        $(".acrobati").css("color", "black");

        }, function() {

            $(".acrobati").css("transition", " 0.2s ease-in-out ");
            $(".acrobati").css("background-color", "#000041");
            $(".acrobati").css("color", "azure");
        }
    
    );



    
});


var swiper2 = new Swiper(".carosello-finale-content", {
    loop: true,
    autoplay: {
        delay: 1,
        disableOnInteraction: false
    },
    slidesPerView: 2,
    speed: 2000,
    grabCursor: true,
    mousewheelControl: true,

    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        1100:{
            slidesPerView: 2,
        }
    }
});

