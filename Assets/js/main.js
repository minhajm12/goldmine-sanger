// Navbar Transparent

// const topheader = document.querySelector('.header');
// const navbar = document.querySelector('.navbar');
// window.onscroll = () => {
//     if (window.scrollY > 30) {
//         topheader.classList.add('nav-active');
//         navbar.classList.add('box-nav-active');
//     } else {
//         topheader.classList.remove('nav-active');
//         navbar.classList.remove('box-nav-active');
//     }
// };

const topheader = document.querySelector('.header');
const navbar = document.querySelector('.navbar');
var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        topheader.classList.remove('nav-active');
        navbar.classList.remove('box-nav-active');
      } else {
        topheader.classList.add('nav-active');
        navbar.classList.add('box-nav-active');
      }
      prevScrollpos = currentScrollPos;
    }




    // MOBILE NAVBAR INVISIBLE


document.body.addEventListener('click', event => {
    // check if the clicked element is the 'my-element' element or one of its children
    const clickedElement = event.target;
    const myElement = document.querySelector('#navbar');
    if (myElement.contains(clickedElement)) {
        // do nothing if the clicked element is the 'my-element' element or one of its children
        return;
    }
    
    // remove the 'active' class from the 'my-element' element
    document.querySelector('#navbarSupportedContent').classList.remove('show');
    document.querySelector('#navbarSupportedContent').classList.add('collapse');
    document.querySelector('.navbar-toggler').classList.remove('collapsed');
})




//   CLIENT SLIDER

// $('.top').owlCarousel({
//     loop:true,
//     // margin:30,
//    autoplay:true,
//    autoplayTimeout:3000,
//     nav:false,
//     responsive:{
//         0:{
//             items:2
//         },
//         600:{
//             items:4
//         },
//         1000:{
//             items:5
//         }
//     }
// })




// $('.bottom').owlCarousel({
//     loop:true,
//     // margin:30,
//    autoplay:true,
//    autoplayTimeout:3000,
//    rtl:true,
//     nav:false,
//     responsive:{
//         0:{
//             items:3
//         },
//         600:{
//             items:4
//         },
//         1000:{
//             items:5
//         }
//     }
// })





    AOS.init();



    