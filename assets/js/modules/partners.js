export function partnersSlider() {
  const swiper = new Swiper('.partners__slider', {
    slidesPerView: 5,
    spaceBetween: 70,
     speed: 1000,
    breakpoints: {
      420: {
        spaceBetween: 110
      },
      500: {
        spaceBetween: 120
      },
      590: {
        spaceBetween: 140
      },
      768: {
        spaceBetween: 70
      },
      1360: {
        slidesPerView: 8,
        spaceBetween: 50
      },
    },
    loop: true,
    freeMode: true,
    grabCursor: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: true
    },
    freeModeMomentum: false,
    rewind: true
  });

}