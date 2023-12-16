$(document).ready(function() {
    

	$('.caption h1, .caption p').addClass('animated fadeInDown');
    $('.caption span').addClass('animated fadeInUp');

    $('#arama').click(function(e) {
        if ($(this).attr('href') == '#') {
            e.preventDefault();
            $('.top-search-bar').slideToggle('fast');
            $(this).toggleClass('icon-close');
        }
    });

    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
	
	 $(document).on("click",".cookie .agree",function() {
        $('.cookie').hide();
    });

    //Sticky
      $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          if (scroll >= 120) {
            $("header").addClass("sticky");
          } else {
            $("header").removeClass("sticky");
          }
          if ($(window).width() < 1099) {
            $('header').removeClass('sticky')
          }

      });

      $(".sidebar").stick_in_parent({
          offset_top: 100
        });

      $('.text-animate').each(function(){
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
      });

      anime.timeline({loop: true})
        .add({
          targets: '.text-animate .letter',
          opacity: [0,1],
          easing: "easeInOutQuad",
          duration: 2250,
          delay: function(el, i) {
            return 150 * (i+1)
          }
        }).add({
          targets: '.text-animate',
          opacity: 0,
          duration: 1000,
          easing: "easeOutExpo",
          delay: 1000
        });

});
var swiper = new Swiper('.slider-container', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 36000,
      disableOnInteraction: false,

    },
    speed:1000,
    parallax: true,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});

var v = document.getElementsByTagName("video")[0];

   v.addEventListener("canplay", function () {
       mySwiper.stopAutoplay();
   }, true);

   v.addEventListener("ended", function () {
       mySwiper.startAutoplay();
   }, true);