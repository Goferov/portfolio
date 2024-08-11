(function(){

    const sections = document.querySelectorAll('section[id]');
    const offset = document.querySelector('header').offsetHeight;

    function scrollActive() {
        const scrollY = window.pageYOffset;
        const windowHeight = window.innerHeight;
        let maxVisibleHeight = 0;
        let mostVisibleSection = null;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop;
            const sectionBottom = sectionTop + sectionHeight;
            const sectionId = current.getAttribute('id');

            const visibleTop = Math.max(sectionTop, scrollY);
            const visibleBottom = Math.min(sectionBottom, scrollY + windowHeight);
            const visibleHeight = visibleBottom - visibleTop;

            if (visibleHeight > maxVisibleHeight) {
                maxVisibleHeight = visibleHeight;
                mostVisibleSection = sectionId;
            }
        });

        if (mostVisibleSection) {
            document.querySelectorAll('.nav-link, .footer-menu a').forEach(link => {
                link.classList.remove('active');
            });

            document.querySelector('a[href*=' + mostVisibleSection + '].nav-link, .footer-menu a[href*=' + mostVisibleSection + ']').classList.add('active');
        }
    }

    window.addEventListener('scroll', scrollActive);

    function scrollUp() {
        const scrollUp = document.querySelector('.scroll-up');
        if(this.scrollY >= 560) {
            scrollUp.classList.add('show')
        }
        else {
            scrollUp.classList.remove('show')
        }
    }
    window.addEventListener('scroll', scrollUp);

    document.querySelectorAll('a[href^="#"].scroll-link').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetElement = document.querySelector(this.getAttribute('href'));
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        });
    });

    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
})();


