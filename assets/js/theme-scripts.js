$(document).ready(function () {
  /*-- Menu --*/
  $('#open-menu').click(function () {
    $('.menu').toggle('abre')
  })

  $('#hero').owlCarousel({
    loop: false,
    margin: 1,
    mouseDrag: true,
    autoplay: true,
    dots: true,
    nav: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1024: {
        items: 1,
      },
    },
  })
})
