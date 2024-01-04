export function partnersSlider() {
    const swiper = new Swiper('.partners__slider', {
        slidesPerView: 5,
        spaceBetween: 90,
        loop: true,
        freeMode: true,
        speed: 1500,
        autoplay: {
          enabled: true,
          delay: 0,
        },
      });
}