const header = document.querySelector('header');
// const sectionIntro = document.querySelector('.Intro');

const sectionIntro = $(window).width() <= 450 ? document.querySelector('#Intro-mobile') :
    document.querySelector('.Intro');


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
        rootMargin: '-500px 0px 0px 0px'
    }
);

sectionObserved.observe(sectionIntro);