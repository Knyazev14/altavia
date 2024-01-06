<footer class="footer">
    <div class="container">
        <div class="footer__body">
            <div class="footer__header">
                <div class="footer__top">
                    <a class="footer__logo" href="/">
                        <?php get_template_part('template/logo/logo') ?>
                    </a>
                    <div class="footer__social">
                        <!-- Соц сети -->
                        <?php get_template_part('template/social/telegram') ?>
                        <?php get_template_part('template/social/youtube') ?>
                    </div>
                </div>
                <div class="footer__bottom">
                    <!-- Навигация -->
                    <?php get_template_part('template/menu/footer-menu') ?>
                    <!-- Рассылка уведомдений -->
                    <?php get_template_part('template/notice/notice') ?>

                </div>
            </div>
            <div class="footer__footer">
                <ul class="footer__footer-list">
                    <li>
                        <a href="">Политика кофиденциальности</a>
                    </li>
                    <li>
                        <a href="">Пользовательское соглашение</a>
                    </li>
                </ul>
                <p class="footer__copyrite">
                    © 2010-2023 АО «Альта Виа»
                </p>
            </div>
        </div>
    </div>
</footer>

</div>
</body>
<?php wp_footer(); ?>

</html>