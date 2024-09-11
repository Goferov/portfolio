(function(){

    const body = document.querySelector('body');
    const sections = document.querySelectorAll('section[id]');
    const offset = document.querySelector('header').offsetHeight;
    const menuToggle = document.querySelector('#menuToggle');
    const menuClose = document.querySelector('#menuClose');
    const mobileNav = document.querySelector('#mobileNav');
    const changeThemeBtn = document.querySelectorAll('.changeThemeBtn');
    const themeIcons = document.querySelectorAll('.changeThemeBtn i');
    const lightThemeIcon = 'fa-solid fa-sun';
    const darkThemeIcon = 'fa-solid fa-moon';


    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i=0;i < ca.length;i++) {
            let c = ca[i];
            while (c.charAt(0)===' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }

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

            document.querySelectorAll('a[href*=' + mostVisibleSection + '].nav-link, .footer-menu a[href*=' + mostVisibleSection + ']').forEach(link => {
                link.classList.add('active')
            });
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

    function toggleMenu() {
        const mobileNav = document.getElementById('mobileNav');

        if (mobileNav.classList.contains('active')) {
            mobileNav.classList.remove('active');
            setTimeout(() => {
                mobileNav.style.zIndex = '-1';
            }, 500);

        } else {
            mobileNav.style.zIndex = '1000';
            mobileNav.classList.add('active');
        }
    }

    menuToggle.addEventListener('click', toggleMenu);
    menuClose.addEventListener('click', toggleMenu);

    function closeMobileMenuAfterClick() {
        mobileNav.classList.remove('active');
    }

    mobileNav.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', closeMobileMenuAfterClick);
    });

    function changeTheme() {
        body.classList.toggle('dark-theme');
        let theme = null;

        if(body.classList.contains('dark-theme')) {
            theme = 'dark-theme';
        }

        setCookie('theme', theme, 1);
        changeThemeIcons(theme);

    }

    changeThemeBtn.forEach(btn => {
        btn.addEventListener('click', changeTheme);
    })


    function setThemeFromCookie() {
        const theme = getCookie('theme');
        body.className = theme;

        changeThemeIcons(theme);
    }

    function changeThemeIcons(theme) {
        themeIcons.forEach(icon => {
            icon.className = theme ? lightThemeIcon : darkThemeIcon;
        });
    }



    Fancybox.bind("[data-fancybox]");

    // setThemeFromCookie();
    scrollUp();
    scrollActive();

    // SCROLL ANIMATIONS
    const sr = ScrollReveal({
        origin: 'top',
        distance: '30px',
        duration: 1400,
        delay: 200,
    });

    sr.reveal('.from-left', {origin: 'left'});
    sr.reveal('.from-right', {origin: 'right'});
    // sr.reveal('.section-title ', {origin: 'top', delay: 50});
    sr.reveal('.skills-list.left > div ', {origin: 'left', interval: 200, delay: 700, duration: 500});
    sr.reveal('.skills-list.right > div ', {origin: 'right', interval: 200, delay: 700, duration: 500});
    sr.reveal('.project-box ', {origin: 'left', interval: 200, delay: 700, duration: 1200});


})();


