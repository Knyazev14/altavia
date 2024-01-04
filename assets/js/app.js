import * as  headerMenu  from "./modules/menu.js"
import * as  notice  from "./modules/notice.js"
import * as  projectOffice  from "./modules/project-office.js"
import * as  servicesCards  from "./modules/services.js"
import * as  victoriesFunc  from "./modules/victories.js"

document.addEventListener('DOMContentLoaded',function(){
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
})

