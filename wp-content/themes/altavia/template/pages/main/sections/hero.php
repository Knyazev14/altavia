<section class="hero-main">
    <?php get_template_part('template/pages/main/blocks/hero-animation'); ?>
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