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
                                    <p class="contacts__list-item-text">Ул. Малая Дмитровка, 16с4</p>
                            </li>
                            <li class="contacts__list-item">
                                    <a class="contacts__list-item-link" href="tel:+74993505579">
                                        <p class="contacts__list-item-text">+7 (499) 350-55-79</p>
                                    </a>
                            </li>
                            <li class="contacts__list-item">
                                    <a class="contacts__list-item-link" href="mailto:info@alta-via.ru">
                                        <p class="contacts__list-item-text">info@alta-via.ru</p>
                                    </a>
                            </li>
                            <li class="contacts__list-item">
                                    <p class="contacts__list-item-text">9:00 — 18:00</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contacts__item">
                        <span class="contacts__city contacts__item-span">Омск</span>
                        <ul class="contacts__list">
                            <li class="contacts__list-item">
                                    <p class="contacts__list-item-text">Ул. 8 Марта, 8</p>
                            </li>
                            <li class="contacts__list-item">
                                    <a class="contacts__list-item-link" href="tel:+74993505579">
                                        <p class="contacts__list-item-text">+7 (499) 350-5-579</p>
                                    </a>
                            </li>
                            <li class="contacts__list-item">
                                    <a class="contacts__list-item-link" href="mailto:omsk-info@alta-via.ru">
                                        <p class="contacts__list-item-text">omsk-info@alta-via.ru</p>
                                    </a>
                            </li>
                            <li class="contacts__list-item">
                                    <p class="contacts__list-item-text">9:00 — 18:00</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contacts__social">
                    <span class="contacts__social-text contacts__item-span">Присоединиться к нам</span>
                    <div class="contacts__social-body">
                        <!-- Соц сети -->
                        <?php get_template_part('template/social/telegram') ?>
                        <a class="social-youtube" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="21" viewBox="0 0 27 21" fill="none">
                                <rect class="social-youtube__rect" width="27" height="21" rx="2" fill="url(#2)" />
                                <path class="social-youtube__path" d="M9.5 6.81953L17.2641 10.814L9.5 14.8085V6.81953Z" stroke="white" />
                                <defs>
                                    <linearGradient id="2" x1="13.5" y1="0" x2="13.5" y2="21" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2C4646" />
                                        <stop offset="1" stop-color="#678E96" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>