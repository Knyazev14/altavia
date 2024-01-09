<!-- <section class="partners">
    <div class="container">
        <h2 class="partners__title title">Нам доверяют</h2>
    </div>
    <div class="swiper partners__slider">
        <div class="swiper-wrapper partners__slider-wrapper">
            <?php
            $slides = CFS()->get('partners_slider', 9);
            foreach ($slides as $slide) {
            ?>
                <div class="swiper-slide partners__slider-slide">
                    <img class="partners__slide-img" src="<?php echo $slide['partners_img']; ?>" alt="Партнер">
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section> -->


<section class="partners">
    <div class="container">
        <h2 class="partners__title title">Нам доверяют</h2>
    </div>
    <div class="splide">
        <div class="splide__slider">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php
                    $slides = CFS()->get('partners_slider', 9);
                    foreach ($slides as $slide) {
                    ?>
                        <div class="splide__slide partners__slider-slide">
                            <img class="partners__slide-img" src="<?php echo $slide['partners_img']; ?>" alt="Партнер">
                        </div>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

    </div>
</section>