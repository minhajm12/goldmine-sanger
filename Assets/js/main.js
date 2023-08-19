// BANNER SLIDER







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



