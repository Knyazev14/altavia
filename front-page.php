<?php get_header(); ?>
<main class="main">
    <!-- Главный баннер -->
    <?php get_template_part('template/pages/main/sections/hero'); ?>
    <!-- Почему выбирают нас -->
    <?php get_template_part('template/pages/main/sections/about-us'); ?>
    <!-- Миссия компании -->
    <?php get_template_part('template/pages/main/sections/mission'); ?>
    <!-- Услуги -->
    <?php get_template_part('template/pages/main/sections/services'); ?>
    <!-- Кадровый учет и обучение -->
    <?php get_template_part('template/pages/main/sections/personnel'); ?>
    <!-- Проектный оффис -->
    <?php get_template_part('template/pages/main/sections/project-office'); ?>
    <!-- Наши победы -->
    <?php get_template_part('template/pages/main/sections/victories'); ?>
   <!-- Нашм доверяют -->
    <?php get_template_part('template/partners/partners'); ?>
    <!-- Контакты -->
    <?php get_template_part('template/pages/main/sections/contacts'); ?>
</main>
<?php get_footer(); ?>