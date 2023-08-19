// BANNER SLIDER

$(document).ready(function(){
    $('.banner-slider').owlCarousel({
        loop:true,
        // margin:10,
        // nav:true,
        // dots:true,
        autoplay:true,
        autoplayTimeout:30000,
        autoplayHoverPause:false,
        items:2.5,
        // navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1,
                dots:true
            },
            1300:{
                items:1
            },
            1500:{
                items:1
            }
        }
      })
  });







//   CLIENT SLIDER

$('.top').owlCarousel({
    loop:true,
    // margin:30,
   autoplay:true,
   autoplayTimeout:3000,
    nav:false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})




$('.bottom').owlCarousel({
    loop:true,
    // margin:30,
   autoplay:true,
   autoplayTimeout:3000,
   rtl:true,
    nav:false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})