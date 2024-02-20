

$(document).ready(function(){

    $(".soleil-bottone").hover(function(){

        $(".soleil-bottone").css("transition", " 0.5s ease-in-out ");
        $(".soleil").css("transition", " 0.4s ease-in-out ");
        $(".soleil").css("filter", " blur(5px)");
        $(".soleil").css(" -webkit-filter", "blur(5px) ");

        }, function() {

            $(".soleil-bottone").css("transition", " 0.2s ease-in-out ");
            $(".soleil").css("transition", " 0s ");
            $(".soleil").css("filter", " none");
            $(".soleil").css(" -webkit-filter", "none");
        }
    
    );

});
