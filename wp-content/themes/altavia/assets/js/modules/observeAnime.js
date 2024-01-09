export function observeAnime(){
    function observeElements(selector, callback, customThreshold = 0.5) {
        const observerOptions = {
          root: null,
          rootMargin: '0px',
          threshold: customThreshold
        };
    
        const observer = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const target = entry.target;
              callback(target);
              observer.unobserve(target);
            }
          });
        }, observerOptions);
    
        document.querySelectorAll(selector).forEach(element => {
          observer.observe(element);
        });
    }
    
    observeElements('.about-us', (element) => {
        element.classList.add('start-anime');
    }, 0.4);

    observeElements('.ruby', (element) => {
        element.classList.add('start-anime');
    }, 0.4);


}