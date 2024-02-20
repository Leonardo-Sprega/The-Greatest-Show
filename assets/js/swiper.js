
var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    speed: 1500,
    /*autoplay: {
      delay: 7000,
      disableOnInteraction: false
  },*/
  });



$(document).ready(function(){

  $(".titolo-container").click(function(){
    $(location).prop("href", "http://localhost:3000/public/?page=tour");
  });

  $(".titolo-container").hover(function(){

    $(".titolo-container").css("transition", " 0.3s ease-in-out ");
    $(".titolo-container").css("background-color", " rgb(255, 255, 0)");
    $(".titolo-container").css("color", "black");

    }, function() {

        $(".titolo-container").css("transition", " 0.3s ease-in-out ");
        $(".titolo-container").css("background-color", "#000041");
        $(".titolo-container").css("color", "azure");
    }

  );

});













