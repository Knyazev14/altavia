export function pressFunc() {
    var pressCards = document.querySelectorAll('.press__card')

    if (window.innerWidth < 1360) {
        for (let i = 2; i < pressCards.length; i++) {
            pressCards[i].classList.add('hidden-card');
        }
    }
    window.addEventListener('resize', () => {
        if (window.innerWidth < 1360) {
            for (let i = 2; i < pressCards.length; i++) {
                pressCards[i].classList.add('hidden-card');
            }
        } else {
            for (let i = 2; i < pressCards.length; i++) {
                pressCards[i].classList.remove('hidden-card');
            }
        }
    })
}