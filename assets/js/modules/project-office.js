export function projectOffice() {
    var officeCards = document.querySelectorAll('.project-office__card')
    var officeCardsBtn = document.querySelector('.project-office__body .button-secondary')

    if (window.innerWidth < 768) {
        for (let i = 4; i < officeCards.length; i++) {
            officeCards[i].classList.add('hidden-card');
        }
        officeCardsBtn.classList.remove('hidden-card')
        document.addEventListener('click', (e) => {
            if (e.target.closest('.project-office__body .button-secondary')) {
                officeCards.forEach(card => {
                    card.classList.remove('hidden-card')
                })
                officeCardsBtn.classList.add('hidden-card')
            }
        })
    }
    window.addEventListener('resize', () => {
        if (window.innerWidth < 768) {
            for (let i = 4; i < officeCards.length; i++) {
                officeCards[i].classList.add('hidden-card');
            }
            officeCardsBtn.classList.remove('hidden-card')
        } else {
            for (let i = 4; i < officeCards.length; i++) {
                officeCards[i].classList.remove('hidden-card');
            }
            officeCardsBtn.classList.add('hidden-card')
        }
    })
}