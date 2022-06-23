const header = document.querySelector('header');
const sectionIntro = document.querySelector('.Intro-product-slider');

const sectionObserved = new IntersectionObserver(
    function (entries, sectionObserved) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                header.classList.add('nav-scrolled');
            } else {
                header.classList.remove('nav-scrolled')
            }
        })
    }, {
        rootMargin: '-200px 0px 0px 0px'
    }
);

sectionObserved.observe(sectionIntro);
