<section class="contacts">
    <img class="contacts__bg-mobile" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/bg/contacts-bg-375.png" alt="Фон">
    <img class="contacts__bg-tablet" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/bg/contacts-bg-768.png" alt="Фон">
    <img class="contacts__bg-desctop" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/bg/contacts-bg-1920.png" alt="Фон">
    <div class="container">
        <div class="contacts__body">
            <h2 class="contacts__title title">Контакты</h2>
            <p class="contacts__text">Позвоните, напишите на электронную почту
                или приезжайте в офис — <br> мы всегда готовы к общению с вами</p>
            <div class="contacts__info-body">
                <div class="contacts__info">
                    <div class="contacts__item">
                        <span class="contacts__city contacts__item-span">Москва</span>
                        <ul class="contacts__list">
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/location.svg"
                                        alt="Локация">
                                </div>
                                <div class="contacts__list-item-right">
                                    <p class="contacts__list-item-text">Ул. Малая Дмитровка, 16с4</p>
                                </div>
                            </li>
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/contacts-phone.svg"
                                        alt="Телефон">
                                </div>
                                <div class="contacts__list-item-right">
                                    <a class="contacts__list-item-link" href="tel:+74993505579">
                                        <p class="contacts__list-item-text">+7 (499) 350-55-79</p>
                                    </a>
                                </div>
                            </li>
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/contacts-email.svg"
                                        alt="Почта">
                                </div>
                                <div class="contacts__list-item-right">
                                    <a class="contacts__list-item-link" href="mailto:info@alta-via.ru">
                                        <p class="contacts__list-item-text">info@alta-via.ru</p>
                                    </a>
                                </div>
                            </li>
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/time.svg" alt="Время">
                                </div>
                                <div class="contacts__list-item-right">
                                    <p class="contacts__list-item-text">9:00 — 18:00</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="contacts__item">
                        <span class="contacts__city contacts__item-span">Омск</span>
                        <ul class="contacts__list">
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/location.svg"
                                        alt="Локация">
                                </div>
                                <div class="contacts__list-item-right">
                                    <p class="contacts__list-item-text">Ул. 8 Марта, 8</p>
                                </div>
                            </li>
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/contacts-phone.svg"
                                        alt="Телефон">
                                </div>
                                <div class="contacts__list-item-right">
                                    <a class="contacts__list-item-link" href="tel:+74993505579">
                                        <p class="contacts__list-item-text">+7 (499) 350-5-579</p>
                                    </a>
                                </div>
                            </li>
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/contacts-email.svg"
                                        alt="Почта">
                                </div>
                                <div class="contacts__list-item-right">
                                    <a class="contacts__list-item-link" href="mailto:omsk-info@alta-via.ru">
                                        <p class="contacts__list-item-text">omsk-info@alta-via.ru</p>
                                    </a>
                                </div>
                            </li>
                            <li class="contacts__list-item">
                                <div class="contacts__list-item-left">
                                    <img class="contacts__list-item-img"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icon/time.svg" alt="Время">
                                </div>
                                <div class="contacts__list-item-right">
                                    <p class="contacts__list-item-text">9:00 — 18:00</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contacts__sotial">
                    <span class="contacts__sotial-text contacts__item-span">Присоединиться к нам</span>
                    <div class="contacts__sotial-body">
                        <!-- Соц сети -->
                        <?php get_template_part('template/social/telegram') ?>
                        <?php get_template_part('template/social/youtube') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>