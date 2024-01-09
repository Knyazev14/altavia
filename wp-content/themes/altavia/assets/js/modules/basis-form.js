export function basisForm(){
document.addEventListener('wpcf7mailsent', function (e) {
    if (e.detail.contactFormId == '13') {
        const form = document.querySelector('.basis-form');
        if (form) {
            form.classList.add('form__success');
        }
    }
}, false);
}