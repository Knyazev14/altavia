<section class="hero-main">
    <!-- <img class="hero-main__shard shard-1" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-11.svg" alt="Осколок">
    <img class="hero-main__shard shard-2" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-12.svg" alt="Осколок">
    <img class="hero-main__shard shard-3" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-13.svg" alt="Осколок">
    <img class="hero-main__shard shard-4" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-14.svg" alt="Осколок">
    <img class="hero-main__shard shard-5" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-15.svg" alt="Осколок">
    <img class="hero-main__shard shard-6" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-16.svg" alt="Осколок">
    <img class="hero-main__shard shard-7" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-17.svg" alt="Осколок">
    <img class="hero-main__shard shard-8" src="<?php bloginfo('template_url'); ?>/assets/img/bg/shard-18.svg" alt="Осколок"> -->
    <div class="container">
        <div class="hero-main__body">
            <h1 class="hero-main__title">
                <span><?php echo CFS()->get( 'hero_main_title' ); ?></span>
                <span><?php echo CFS()->get( 'hero_main_sub-title' ); ?></span>
            </h1>
            <div class="hero-main__bottom">
                      <p><?php echo CFS()->get( 'hero_main_text' ); ?></p>
            <?php display_button_normal('Расчистить путь');?>   
            </div>
        
        </div>
    </div>
</section>