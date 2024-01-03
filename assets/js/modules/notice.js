export function notice() {
    var noticePol = document.querySelector('.notice__policy a')

    if (window.innerWidth >= 768) {
        noticePol.textContent = 'политикой конфиденциальности'
    }

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            noticePol.textContent = 'политикой конфиденциальности'
        }else{
            noticePol.textContent = 'политикой конфиденциаль...'
        }
    })

}