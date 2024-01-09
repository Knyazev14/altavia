import * as  headerMenu from "./modules/menu.js"
import * as  notice from "./modules/notice.js"
import * as  projectOffice from "./modules/project-office.js"
import * as  servicesCards from "./modules/services.js"
import * as  victoriesFunc from "./modules/victories.js"
import * as  partnersSlider from "./modules/partners.js"
import * as  pressFunc from "./modules/press.js"
import * as  basisForm  from "./modules/basis-form.js"
import * as  observeAnime from "./modules/observeAnime.js"


document.addEventListener('DOMContentLoaded', function () {
    //Нам доверяют
    partnersSlider.partnersSlider()
    //Нам доверяют
    observeAnime.observeAnime()
    // Навигация
    headerMenu.headerMenu()
    //Рассылка
    notice.notice()
    //Проектный офис
    projectOffice.projectOffice()
    //Услуги
    servicesCards.servicesCards()
    //Наши победы
    victoriesFunc.victoriesFunc()
    //Пресс-центр
    pressFunc.pressFunc()
    //Контактная форма
    basisForm.basisForm()
})
