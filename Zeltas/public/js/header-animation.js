const headerMain = document.querySelector('header');

const sectionIntro = document.querySelector('.body-class');


const sectionObserved = new IntersectionObserver(
    function (entries, sectionObserved) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                headerMain.classList.add('nav-scrolled');
            } else {
                headerMain.classList.remove('nav-scrolled')
            }
        })
    }, {
        rootMargin: '-200px 0px 0px 0px'
    }
);

sectionObserved.observe(sectionIntro);
