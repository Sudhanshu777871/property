// / JS CODE owl carousle 
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  autoplay: true,
  autoplayHoverPause: true,
  autoplayTimeout:5000,
  autoHeight:true,
  responsiveClass:true,
  center: true,
  dots: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})

console.log("Hello World");