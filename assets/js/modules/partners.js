export function partnersSlider() {
  const swiper = new Swiper('.partners__slider', {
    slidesPerView: 'auto',
     speed: 1000,
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