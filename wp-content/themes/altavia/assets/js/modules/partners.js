export function partnersSlider() {
  var partnersSlider = new Swiper('.partners__slider', {
    slidesPerView: 'auto',
    speed: 1200,
    loop: true,
    freeMode: true,
    grabCursor: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false
    },
    freeModeMomentum: false,
    rewind: true
  });

}