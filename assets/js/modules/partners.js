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


  const allSlides = swiper.slides.concat(swiper.cloneSlides);

  console.log(allSlides)
  allSlides.forEach((slide, index) => {
    console.log(slide, index)
    // Проверяем, есть ли следующий слайд и не является ли текущий слайд последним
    if (index + 1 < allSlides.length) {
        if (index % 2 === 0) { // Если текущий слайд четный
            if ((index + 1) % 2 !== 0) { 
                // Если следующий слайд нечетный и его значение не равно "0"
                slide.classList.add('even');
            } else if ((index + 1) % 2 === 0) { 
                // Если следующий слайд четный и его значение не равно "0"
                slide.classList.add('odd');
            }
        } else { // Если текущий слайд нечетный
            if ((index + 1) % 2 === 0) { 
                // Если следующий слайд четный и его значение не равно "0"
                slide.classList.add('odd');
            } else if ((index + 1) % 2 !== 0) { 
                // Если следующий слайд нечетный и его значение не равно "0"
                slide.classList.add('even');
            }
        }
    }
});


}