import * as  headerMenu  from "./modules/menu.js"
import * as  notice  from "./modules/notice.js"

document.addEventListener('DOMContentLoaded',function(){
    // Навигация
    headerMenu.headerMenu() 
    //Notice
    notice.notice()
})

