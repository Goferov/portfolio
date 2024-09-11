(function () {

    // Cache DOM elements
    const loaderWrapper = document.querySelector("#pageLoader");
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

    // Fade out the loader
    function fadeOutLoader() {
        loaderWrapper.classList.add("fade-out");
        setTimeout(() => {
            loaderWrapper.style.display = "none";
        }, 1000);
    }

    // Cookie handling functions
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = `${name}=${value || ""}${expires}; path=/`;
    }

    function getCookie(name) {
        const nameEQ = `${name}=`;
        const cookies = document.cookie.split(';');
        for (let c of cookies) {
            c = c.trim();
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length);
        }
        return null;
    }

    // Scroll active section highlight
    function scrollActive() {
        const scrollY = window.pageYOffset;
        const windowHeight = window.innerHeight;
        let maxVisibleHeight = 0;
        let mostVisibleSection = null;

        sections.forEach(current => {
            const sectionTop = current.offsetTop;
            const sectionHeight = current.offsetHeight;
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

            document.querySelectorAll(`a[href*=${mostVisibleSection}].nav-link, .footer-menu a[href*=${mostVisibleSection}]`).forEach(link => {
                link.classList.add('active');
            });
        }
    }

    // Show/hide scroll up button
    function scrollUp() {
        const scrollUpButton = document.querySelector('.scroll-up');
        if (window.scrollY >= 560) {
            scrollUpButton.classList.add('show');
        } else {
            scrollUpButton.classList.remove('show');
        }
    }

    // Smooth scroll for anchor links
    function smoothScroll(event) {
        event.preventDefault();
        const targetElement = document.querySelector(this.getAttribute('href'));
        const offsetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }

    // Toggle mobile menu
    function toggleMenu() {
        if (mobileNav.classList.contains('active')) {
            closeMobileMenuAfterClick();
        } else {
            mobileNav.style.zIndex = '1000';
            mobileNav.classList.add('active');
        }
    }

    // Close mobile menu after link click
    function closeMobileMenuAfterClick() {
        mobileNav.classList.remove('active');
        setTimeout(() => {
            mobileNav.style.zIndex = '-1';
        }, 500);
    }

    // Change theme and set cookie
    function changeTheme() {
        body.classList.toggle('dark-theme');
        const theme = body.classList.contains('dark-theme') ? 'dark-theme' : null;

        setCookie('theme', theme, 1);
        updateThemeIcons(theme);
    }

    // Set theme from cookie
    function setThemeFromCookie() {
        const theme = getCookie('theme');
        body.className = theme || '';
        updateThemeIcons(theme);
    }

    // Update theme icons
    function updateThemeIcons(theme) {
        themeIcons.forEach(icon => {
            icon.className = theme ? lightThemeIcon : darkThemeIcon;
        });
    }

    // Initialize ScrollReveal animations
    function initializeScrollReveal() {
        const sr = ScrollReveal({
            origin: 'top',
            distance: '30px',
            duration: 1400,
            delay: 200,
        });

        sr.reveal('.from-left', { origin: 'left' });
        sr.reveal('.from-right', { origin: 'right' });
        sr.reveal('.skills-list.left > div', { origin: 'left', interval: 200, delay: 700, duration: 500 });
        sr.reveal('.skills-list.right > div', { origin: 'right', interval: 200, delay: 700, duration: 500 });
        sr.reveal('.project-box', { origin: 'left', interval: 200, delay: 700, duration: 1200 });
    }

    // Event listeners
    window.addEventListener('scroll', scrollActive);
    window.addEventListener('scroll', scrollUp);

    document.querySelectorAll('a[href^="#"].scroll-link').forEach(anchor => {
        anchor.addEventListener('click', smoothScroll);
    });

    menuToggle.addEventListener('click', toggleMenu);
    menuClose.addEventListener('click', toggleMenu);

    mobileNav.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', closeMobileMenuAfterClick);
    });

    changeThemeBtn.forEach(btn => {
        btn.addEventListener('click', changeTheme);
    });

    // Initial setup
    fadeOutLoader();
    setThemeFromCookie();
    scrollUp();
    scrollActive();
    initializeScrollReveal();

    // Initialize Fancybox
    Fancybox.bind("[data-fancybox]");

})();
