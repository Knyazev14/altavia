export function servicesCards() {
    var servicesCards = document.querySelectorAll('.services__card')
    var servicesCardsBtn = document.querySelector('.services__body .button-secondary')

    if (window.innerWidth < 768) {
        for (let i = 4; i < servicesCards.length; i++) {
            servicesCards[i].classList.add('hidden-card');
        }
        servicesCardsBtn.classList.remove('hidden-card')
        document.addEventListener('click', (e) => {
            if (e.target.closest('.services__body .button-secondary')) {
                servicesCards.forEach(card => {
                    card.classList.remove('hidden-card')
                })
                servicesCardsBtn.classList.add('hidden-card')
            }
        })
    }
    window.addEventListener('resize', () => {
        if (window.innerWidth < 768) {
            for (let i = 4; i < servicesCards.length; i++) {
                servicesCards[i].classList.add('hidden-card');
            }
            servicesCardsBtn.classList.remove('hidden-card')
        } else {
            for (let i = 4; i < servicesCards.length; i++) {
                servicesCards[i].classList.remove('hidden-card');
            }
            servicesCardsBtn.classList.add('hidden-card')
        }
    })

}