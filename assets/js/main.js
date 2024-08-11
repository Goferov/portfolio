(function(){

    const sections = document.querySelectorAll('section[id]');
    const offset = document.querySelector('header').offsetHeight;

    function scrollActive(){
        const scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - offset - 1;
            const sectionId = current.getAttribute('id');

            if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                document.querySelector('a[href*=' + sectionId + '].nav-link, .footer-menu a[href*=' + sectionId + ']').classList.add('active');
            } else {
                document.querySelector('a[href*=' + sectionId + '].nav-link, .footer-menu a[href*=' + sectionId + ']').classList.remove('active');
            }
        });
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

})();


