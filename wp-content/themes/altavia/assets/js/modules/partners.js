export function partnersSlider() {
  // new Swiper('.partners__slider', {
  //   slidesPerView: 'auto',
  //   speed: 650,
  //   loop: true,
  //   grabCursor: true,
  //   autoplay: {
  //     delay: 0,
  //     disableOnInteraction: false
  //   },
  // });


  const splide = new Splide( '.splide', {
    type   : 'loop',
    drag   : 'free',
    arrows: false,
    perPage: 9,
    breakpoints: {
      768 : { perPage: 5,  autoScroll: {
        speed: 1,
      }, },
    },
    autoScroll: {
      speed: 2,
    },
  } );
  splide.mount(window.splide.Extensions);

}