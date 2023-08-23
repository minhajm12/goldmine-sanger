// Index page parallax

// gsap.registerPlugin(ScrollTrigger);

// gsap.utils.toArray(".panel").forEach((panel, i) => {
//     ScrollTrigger.create({
//         trigger: panel,
//         start: "top top",
//         scrub: true,
//         pin: true,
//         pinSpacing: false
//     });

// });

// ScrollTrigger.create({
//   snap: {
//     snapTo: 1 / 8,
//     duration: 0.5
//   }
// });




//gsap
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".panel").forEach((panel, i) => {
  ScrollTrigger.create({
    trigger: panel,
    start: "top top",
    scrub: true,
    pin: true,
    pinSpacing: false,
    onEnter: () => {
      gsap.to(panel, { duration: 1000000 });
    },
    onLeaveBack: () => {
      gsap.to(panel, { duration: 1000000 });
    },
  });
});


