export function victoriesFunc() {
    var victoriesCards = document.querySelectorAll('.victories__card')

    if (window.innerWidth < 768) {
        for (let i = 2; i < victoriesCards.length; i++) {
            victoriesCards[i].classList.add('hidden-card');
        }
    }
    window.addEventListener('resize', () => {
        if (window.innerWidth < 768) {
            for (let i = 2; i < victoriesCards.length; i++) {
                victoriesCards[i].classList.add('hidden-card');
            }
        } else {
            for (let i = 2; i < victoriesCards.length; i++) {
                victoriesCards[i].classList.remove('hidden-card');
            }
        }
    })
}