<?php

$projects = [
    [
        "title" => "Restaurant Rater",
        "description" => "Restaurant Rater to aplikacja, która pozwala użytkownikom oceniać i recenzować restauracje, obsługując zarówno zwykłych użytkowników, jak i administratorów z różnymi uprawnieniami. Posiada funkcję rejestracji użytkowników i oferuje możliwość wyszukiwania i sortowania ofert restauracji w oparciu o różne kryteria, zwiększając komfort użytkowania.",
        "main_image" => "assets/img/projects/restaurant-rater/project.png",
        "images" => [
            "assets/img/projects/restaurant-rater/login.png",
            "assets/img/projects/restaurant-rater/list.png",
            "assets/img/projects/restaurant-rater/details.png"
        ],
        "github_link" => "https://github.com/Goferov/restaurant-rater",
        "technologies" => ["HTML", "JS", "CSS", "PHP", "POSTGRESQL", "DOCKER"]
    ],

    [
        "title" => "Notes",
        "description" => "Jest to projekt aplikacji internetowej do zarządzania notatkami. Projekt jest zbudowany przy użyciu PHP z obiektową architekturą MVC (Model-View-Controller). Zawiera również obsługę błędów.",
        "main_image" => "assets/img/projects/notes/notes_list.png",
        "images" => [
            "assets/img/projects/notes/add_note.png",
            "assets/img/projects/notes/delete_note.png",
            "assets/img/projects/notes/show_note.png"
        ],
        "github_link" => "https://github.com/Goferov/notes",
        "technologies" => ["HTML", "CSS", "PHP", "MYSQL"]
    ],

    [
        "title" => "Order Management System",
        "description" => "Jest to oparta na Javie aplikacja desktopowa przeznaczona do zarządzania zamówieniami w sklepie. Aplikacja zapewnia funkcjonalność zarządzania klientami, produktami i zamówieniami za pośrednictwem graficznego interfejsu użytkownika (GUI) opracowanego przy użyciu frameworka Swing. Aplikacja jest zbudowana wokół wzorca projektowego MVC (Model-View-Controller) i jest zbudowana z naciskiem na rozszerzalność i łatwość konserwacji.",
        "main_image" => "assets/img/projects/order-management-system/img.png",
        "images" => [
            "assets/img/projects/order-management-system/img_1.png",
            "assets/img/projects/order-management-system/img_2.png",
            "assets/img/projects/order-management-system/img_6.png"
        ],
        "github_link" => "https://github.com/Goferov/shop-orders-java-app",
        "technologies" => ["JAVA", "SWING"]
    ],
    [
        "title" => "Game Rater",
        "description" => "Ta aplikacja internetowa została zaprojektowana, aby zapewnić użytkownikom kompleksowy sposób odkrywania i recenzowania gier. Oferuje szeroki zakres funkcji, w tym zarządzanie kontem użytkownika, eksplorację katalogu gier, spersonalizowane listy gier i szczegółowe statystyki gier. Platforma została zbudowana w oparciu o framework Laravel, zgodnie z architekturą MVC i wzorcem projektowym Repository.",
        "main_image" => "assets/img/projects/game-rater/dashboard.png",
        "images" => [
            "assets/img/projects/game-rater/login.png",
            "assets/img/projects/game-rater/list.png",
            "assets/img/projects/game-rater/details.png"
        ],
        "github_link" => "https://github.com/Goferov/game-rater",
        "technologies" => ["PHP", "JS", 'SCSS', 'LARAVEL', 'SQL']
    ],

    [
        "title" => "Event Management API",
        "description" => "Ten projekt to API zbudowane przy użyciu Laravel 10, zaprojektowane do zarządzania tworzeniem wydarzeń, rejestracją uczestników oraz uwierzytelnianiem. API obsługuje logowanie i wylogowywanie użytkowników za pomocą Laravel Sanctum do uwierzytelniania, operacje CRUD dla wydarzeń i uczestników oraz wysyłanie powiadomień przypominających o nadchodzących wydarzeniach. Wykorzystuje również system kolejek Laravel do przetwarzania w tle oraz Scheduler do automatyzacji zadań, takich jak wysyłanie przypomnień.",
        "main_image" => "assets/img/projects/event-management-api/img.png",
        "images" => [

        ],
        "github_link" => "https://github.com/Goferov/event-management-api",
        "technologies" => ["PHP", "LARAVEL", "SANCTUM", "MARIADB"]
    ],
];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marcin Godfryd — Web Developer</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#141414">
    <meta name="msapplication-TileColor" content="#141414">
    <meta name="theme-color" content="#141414">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous"/>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <!-- CSS -->
    <link href="assets/css/custom_bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="">
    <header class="py-3 py-lg-2">
        <div class="container-xxl">
            <div class="row">
                <div class="d-flex align-items-center justify-content-start col-6">
                    <a href="#" class="f-bebas-neue navbar-brand">
                        GODFRYD
                    </a>
                </div>
                <nav class="col-6 navbar navbar-expand align-items-center justify-content-end">
                    <div class="fs-2 d-block d-lg-none me-4">
                        <div class="changeThemeBtn"><i class="fa-solid fa-moon"></i></div>
                    </div>
                    <div id="menuToggle" class="hamburger d-block d-lg-none hamburger-squeeze js-hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <ul class="navbar-nav gap-3 gap-xl-4 align-items-center d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link text-nowrap active scroll-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap scroll-link" href="#about-me">O mnie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap scroll-link" href="#skills">Umiejętności</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap scroll-link" href="#qualifications">Doświadczenie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap scroll-link" href="#projects">Projekty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap scroll-link" href="#contact">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link changeThemeBtn"><i class="fa-solid fa-moon"></i></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <nav id="mobileNav" class="d-block d-lg-none navbar navbar-expand p-0">

        <div class="ul-wrap h-100 ms-auto">
            <ul class="navbar-nav gap-4 align-items-end d-flex flex-column pt-3 ">
                <li id="menuClose" class="hamburger align-self-end pe-3 pt-0 active d-block d-lg-none hamburger-squeeze js-hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-nowrap active scroll-link" href="#home">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-nowrap scroll-link" href="#about-me">O mnie</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-nowrap scroll-link" href="#skills">Umiejętności</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-nowrap scroll-link" href="#qualifications">Doświadczenie</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-nowrap scroll-link" href="#projects">Projekty</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-nowrap scroll-link" href="#contact">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <section id="home" class="py-5 position-relative h-100vh pt-10">
            <div class="container container-xxl">
                <div class="row">
                    <div class="col-lg-6 mt-5 mt-lg-0 pt-5 pt-lg-0 mb-5 mb-lg-0 from-left">
                        <h1 class="f-bebas-neue my-3 text-center d-block d-lg-none">Marcin Godfryd</h1>
                        <div class="avatar position-relative mx-auto mx-lg-0">
                            <div></div>
                            <img src="assets/img/avatar.jpg" alt="Marcin Godfryd - website developer" class="object-fit-cover position-relative img-fluid z-1"/>
                        </div>
                    </div>
                    <div class="col-lg-6 fs-4 d-flex flex-column justify-content-center align-items-start from-right">
                        <h1 class="f-bebas-neue my-3 d-none d-lg-block">Marcin Godfryd</h1>
                        <hr class="w-25 border-title border-2 opacity-100 d-lg-block mx-auto mx-lg-0">
                        <div class="my-3 text-center text-lg-start mx-auto mx-lg-0">
                            <b>Web developer</b>, pasjonat technologii, entuzjasta innowacji, pasjonat programowania.
                        </div>
                        <a href="#contact" title="Contact" class="btn btn-primary my-3 scroll-link mx-auto mx-lg-0">Kontakt</a>
                        <div class="socials my-3 mx-auto mx-lg-0">
                            <a href="https://www.linkedin.com/in/marcin-godfryd-719b36244/" target="_blank" title="LinkedIn" class="me-3"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://github.com/Goferov" target="_blank" title="Github"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <a href="#about-me" class="scroll-down scroll-link fs-5 position-absolute fw-medium d-none d-lg-flex">
                    <i class="fa-solid fs-6 fa-chevron-down"></i>
                </a>
            </div>
        </section>
        <section id="about-me" class=" py-5">
            <div class="container container-xxl">
                <div class="row justify-content-around">
                    <h2 class="section-title">O mnie</h2>
                    <div class="col-lg-5 fs-5 d-flex flex-column justify-content-center align-items-start mb-5 mb-lg-0 from-left">
                        <div class="my-3 text">
                            <p>
                                Od najmłodszych lat interesuję się technologią, co naturalnie doprowadziło mnie do świata programowania. Zaczynając od prostych projektów, z biegiem czasu rozwijałem swoje umiejętności, dzięki czemu programowanie stało się nie tylko moją pasją, ale również codzienną pracą.
                            </p>
                            <p>
                                Obecnie studiuję informatykę, stale poszerzając swoją wiedzę i umiejętności w zakresie tworzenia aplikacji internetowych. Jestem gotowy na nowe wyzwania, które pozwolą mi rozwijać się jako programista oraz zdobywać cenne doświadczenie, a także stworzą możliwość nauki nowych technologi i narzędzi. Wierzę, że każda nowa praca to szansa na dalszy rozwój.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 from-right fs-5">
                        <div class="my-3">
                            <i class="fa-sharp fa-solid fa-chevron-right text-primary me-2"></i>
                            <span class="fw-semibold">Data urodzenia: </span> 13.01.2001
                        </div>
                        <div class="my-3">
                            <i class="fa-sharp fa-solid fa-chevron-right text-primary me-2"></i>
                            <span class="fw-semibold">Status: </span> Student
                        </div>
                        <div class="my-3">
                            <i class="fa-sharp fa-solid fa-chevron-right text-primary me-2"></i>
                            <span class="fw-semibold">Wykształcenie: </span> Średnie
                        </div>
                        <div class="my-3">
                            <i class="fa-sharp fa-solid fa-chevron-right text-primary me-2"></i>
                            <span class="fw-semibold">Numer telefonu: </span> +48 514 363 105
                        </div>
                        <div class="my-3">
                            <i class="fa-sharp fa-solid fa-chevron-right text-primary me-2"></i>
                            <span class="fw-semibold">Email: </span> marcingodfryd@gmail.com
                        </div>

                        <a download="" target="_blank" href="assets/pdf/Marcin-Godfryd-CV.pdf" title="Pobierz CV" class="btn btn-primary mt-4 mb-3 d-inline-flex align-items-center px-5 mx-auto mx-lg-0 w-auto">Pobierz CV <i class="fa-solid fa-download ms-2 fs-5"></i></a>

                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class=" py-5">
            <div class="container container-xxl">
                <div class="row justify-content-between skills">
                    <h2 class="section-title">Umiejętności</h2>
                    <div class="col-lg-5 mb-5 mb-lg-0 ">
                        <h3 class="text-center mb-5 from-left">
                            <div>
                                <i class="fa-solid fa-code"></i>
                                Frontend Developer
                            </div>
                        </h3>
                        <div class="skills-list left" id="frontend-skills">
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-html5"></i>
                                    <p>HTML</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-css3-alt"></i>
                                    <p>CSS</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-js"></i>
                                    <p>JavaScript</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="jquery" fill="currentColor" enable-background="new 0 0 1024 1024"  version="1.1" viewBox="0 0 1024 1024" width="1024px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path clip-rule="evenodd" d="M998.805,732.723c-13.82,22.922-26.303,46.783-41.688,68.604     c-76.772,108.89-181.907,172.541-313.433,192.371c-66.178,9.979-132.508,7.857-198.1-4.579     c-69.746-13.228-132.964-43.214-191.343-82.808C134.691,825.239,52.255,716.616,15.683,575.831     C-8.703,481.958-6.389,388.978,34.968,299.635c10.78-23.292,25.342-45.11,40.216-66.159     c17.196-24.337,36.655-47.075,56.563-69.713c-3.375,7.893-6.939,15.714-10.098,23.694     c-37.179,93.888-37.583,189.26-9.019,284.936c38.868,130.189,119.156,230.037,230.596,305.628     c99.967,67.806,210.821,100.244,331.678,96.827c91.813-2.595,178.04-24.681,252.769-80.38     c24.921-18.575,46.77-41.27,70.024-62.078C998.064,732.502,998.436,732.612,998.805,732.723z" fill-rule="evenodd"/><path clip-rule="evenodd" d="M1024,474.521c-7.513,14.825-14.04,29.874-22.392,43.834     c-53.706,89.768-133.248,140.99-236.166,157.154c-52.851,8.303-105.735,6.77-157.824-3.423     c-37.721-7.381-72.919-23.65-106.017-43.457c-95.812-57.337-164.044-136.989-192.522-246.309     c-24.27-93.162-11.342-180.839,46.995-259.745c11.403-15.424,22.224-31.278,33.336-46.917c0.379-0.535,0.992-0.902,2.345-2.1     c-0.418,2.044-0.443,3.358-0.947,4.451c-42.287,91.75-38.86,184.009,4.677,272.985c68.189,139.356,181.558,219.78,335.73,239.274     c86.489,10.936,167.009-8.228,236.772-62.518C987.96,512.208,1004.938,492.826,1024,474.521z" fill-rule="evenodd"/><path clip-rule="evenodd" d="M605.3,24c-4.276,17.406-10.085,34.323-12.4,51.707     c-7.479,56.16,9.264,106.64,40.688,152.367c47.184,68.662,113.273,106.404,195.819,116.046c26.303,3.071,52.43,2.894,78.281-3.25     c29.313-6.968,40.998-14.011,82.194-48.85c-2.51,4.832-3.814,7.739-5.46,10.44c-38.795,63.714-95.444,95.492-170.116,98.527     c-127.829,5.199-233.313-91.405-256.971-190.864c-13.99-58.816-4.693-113.471,31.083-162.94     C594.042,39.412,599.713,31.672,605.3,24z" fill-rule="evenodd"/></g></g></svg>
                                    <p>jQuery</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-sass"></i>
                                    <p>SASS</p>
                                </div>
                                <p class="rate">Intermediate</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-bootstrap"></i>
                                    <p>Bootstrap</p>
                                </div>
                                <p class="rate">Intermediate</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="tailwind" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.036c-2.667 0-4.333 1.325-5 3.976 1-1.325 2.167-1.822 3.5-1.491.761.189 1.305.738 1.906 1.345C13.387 10.855 14.522 12 17 12c2.667 0 4.333-1.325 5-3.976-1 1.325-2.166 1.822-3.5 1.491-.761-.189-1.305-.738-1.907-1.345-.98-.99-2.114-2.134-4.593-2.134zM7 12c-2.667 0-4.333 1.325-5 3.976 1-1.326 2.167-1.822 3.5-1.491.761.189 1.305.738 1.907 1.345.98.989 2.115 2.134 4.594 2.134 2.667 0 4.333-1.325 5-3.976-1 1.325-2.167 1.822-3.5 1.491-.761-.189-1.305-.738-1.906-1.345C10.613 13.145 9.478 12 7 12z"/></svg>
                                    <p>Tailwind</p>
                                </div>
                                <p class="rate">Intermediate</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <h3 class="text-center mb-5 from-right">
                            <div>
                                <i class="fa-solid fa-server"></i>
                                Backend Developer
                            </div>
                        </h3>
                        <div class="skills-list right" id="backend-skills">
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-php"></i>
                                    <p>PHP</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-python"></i>
                                    <p>Python</p>
                                </div>
                                <p class="rate">Intermediate</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-java"></i>
                                    <p>Java</p>
                                </div>
                                <p class="rate">Intermediate</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-laravel"></i>
                                    <p>Laravel</p>
                                </div>
                                <p class="rate">Intermediate</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-symfony"></i>
                                    <p>Symfony</p>
                                </div>
                                <p class="rate">Beginner</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-wordpress"></i>
                                    <p>Wordpress</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="CodeIgniter" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m8.49 24a4.59 4.59 0 0 1 -2.723-3.824 5.4 5.4 0 0 1 2.45-4.246c-.238.58-.18 1.24.15 1.77a1.625 1.625 0 0 0 1.655.646 1.697 1.697 0 0 0 .66-2.91 3.76 3.76 0 0 1 -1.35-3.436 3.523 3.523 0 0 1 1.096-1.785c-.405 1.08.737 2.146 1.504 2.67 1.36.816 2.67 1.713 3.924 2.686a5.285 5.285 0 0 1 2 4.5 4.986 4.986 0 0 1 -3.385 3.93c3.55-.79 7.21-3.61 7.28-7.61a8.288 8.288 0 0 0 -4.9-7.38h-.13c.065.157.096.326.09.496.01-.11.01-.22 0-.33.016.13.016.26 0 .39a1.699 1.699 0 0 1 -2.976.658c-1.17-1.5 0-3.207.196-4.857a6.171 6.171 0 0 0 -2.554-5.36c.856 1.427-.284 3.3-1.113 4.366-.83 1.066-2.03 1.86-3.008 2.79a24.503 24.503 0 0 0 -2.887 3.21 9.778 9.778 0 0 0 -2 8.205 7.806 7.806 0 0 0 6.015 5.43h.016z"/></svg>
                                    <p>CodeIgniter</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="MySQL" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16.405 5.676c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.87h-.927a50.854 50.854 0 0 0-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 0 0-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008L4.25 13.34h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.79h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483h.88zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.763c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156s-.803.45-1.384.45c-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 0 0 .3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 0 0-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 0 0-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 0 0-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 0 0-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 0 1-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 0 1-.35-.4 8.76 8.76 0 0 1-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 0 1-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 0 1 2.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"/></svg>
                                    <p>MySQL</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-solid fa-leaf"></i>
                                    <p>MongoDB</p>
                                </div>
                                <p class="rate">Beginner</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-git-alt"></i>
                                    <p>GIT</p>
                                </div>
                                <p class="rate">Advanced</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-docker"></i>
                                    <p>Docker</p>
                                </div>
                                <p class="rate">Regular</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="qualifications" class=" py-5">
            <div class="container container-xxl">
                <div class="row justify-content-between qualifications">
                    <h2 class="section-title">Doświadczenie</h2>
                    <div class="col-lg-5 from-left">
                        <h3 class="text-center mb-5">
                            <div class="switch active">
                                <i class="fa-solid fa-graduation-cap"></i>
                                Edukacja
                            </div>
                        </h3>
                        <div class="timeline mx-lg-auto mx-0 border-2 border-start border-primary">
                            <div class="position-relative ps-4">
                                <h3 class="mb-3 fw-semibold fs-4">Politechnika Krakowska</h3>
                                <p class="mb-2  "><i class="fa-sharp fa-regular fa-calendar-days"></i> 2021 - 2025</p>
                                <p class="mb-0 ">Informatyka</p>
                                <i class="fa-solid fa-circle timeline-dot"></i>
                            </div>
                            <div class="position-relative ps-4">
                                <h3 class="mb-3 fw-semibold fs-4">Zespół Szkół Technicznych w Jaśle</h3>
                                <p class="mb-2  "><i class="fa-sharp fa-regular fa-calendar-days"></i> 2017 - 2021</p>
                                <p class="mb-0 ">Technik Informatyk</p>
                                <i class="fa-solid fa-circle timeline-dot"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 from-right">
                        <h3 class="text-center mb-5">
                            <div class="switch">
                                <i class="fa-solid fa-briefcase"></i>
                                Praca
                            </div>
                        </h3>
                        <div class="timeline mx-lg-auto mx-0 border-2 border-start border-primary">
                            <div class="position-relative ps-4">
                                <h3 class="mb-3 fw-semibold fs-4">InnWeb.pl</h3>
                                <p class="mb-2  "><i class="fa-sharp fa-regular fa-calendar-days"></i> 2021 - obecnie</p>
                                <p class="mb-0 ">Full Stack Developer</p>
                                <i class="fa-solid fa-circle timeline-dot"></i>
                            </div>
                            <div class="position-relative ps-4">
                                <h3 class="mb-3 fw-semibold fs-4">Adams Computers </h3>
                                <p class="mb-2  "><i class="fa-sharp fa-regular fa-calendar-days"></i> 2019 </p>
                                <p class="mb-0 ">Stażysta</p>
                                <i class="fa-solid fa-circle timeline-dot"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects" class=" py-5 project">
            <div class="container container-xxl">
                <div class="row ">
                    <h2 class="section-title">Projekty</h2>
                    <div class="project-list">
                        <?php foreach ($projects as $key => $project): ?>
                            <!-- Projekt -->
                                <div data-bs-toggle="modal" class="project-box position-relative overflow-hidden" data-bs-target="#modal-<?php echo strtolower(str_replace(' ', '-', $project['title'])); ?>">
                                    <img src="<?php echo $project['main_image']; ?>" alt="<?php echo $project['title']; ?>" class="w-100 h-100"/>
                                    <div class="overlay text-white fs-5 text-center position-absolute top-0 start-0 bottom-0 end-0 d-flex flex-column justify-content-center align-items-center">
                                        <h3 class="fs-4 mb-0 fw-semibold"><?php echo $project['title']; ?></h3>
                                        <h3 class="fs-5 fw-normal">Zobacz szczegóły <i class="fa-solid fa-arrow-up-right-from-square fs-6"></i></h3>
                                    </div>
                                </div>

                            <!-- Modal dla projektu -->
                            <div class="modal modal-xl fade" id="modal-<?php echo strtolower(str_replace(' ', '-', $project['title'])); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo $project['title']; ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <!-- Galeria zdjęć -->
                                                <div class="col-lg-5 project-gallery">
                                                    <a href="<?php echo $project['main_image']; ?>" data-fancybox="gallery-<?= $key ?>" class="modal-project-img">
                                                        <img src="<?php echo $project['main_image']; ?>" alt="" class="w-100"/>
                                                    </a>
                                                    <div class="row mt-3">
                                                        <?php foreach ($project['images'] as $image): ?>
                                                            <div class="col-4">
                                                                <a href="<?php echo $image; ?>" data-fancybox="gallery-<?= $key ?>" class="modal-project-img">
                                                                    <img src="<?php echo $image; ?>" alt="" class="w-100"/>
                                                                </a>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>

                                                <!-- Opis projektu -->
                                                <div class="col-lg-7 mt-4 mt-lg-0">
                                                    <h4 class="fs-5 mb-1">Opis</h4>
                                                    <p><?php echo $project['description']; ?></p>

                                                    <?php if (!empty($project['github_link'])): ?>
                                                        <h4 class="fs-5 mb-1 mt-4">Link</h4>
                                                        <div class="project-links">
                                                            <a href="<?php echo $project['github_link']; ?>" target="_blank">
                                                                <i class="fa-brands fa-github text-primary me-2"></i> Github
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>

                                                    <h4 class="fs-5 mb-1 mt-4">Technologie</h4>
                                                    <div class="project-tags text-white fw-medium d-flex align-items-center">
                                                        <?php foreach ($project['technologies'] as $tech): ?>
                                                            <span><?php echo $tech; ?></span>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class=" py-5">
            <div class="container container-xxl">
                <div class="row justify-content-around">
                    <h2 class="section-title">Kontakt</h2>
                    <div class="col-xl-5 col-lg-6 fs-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start mb-5 mb-lg-0 from-left">
                        <div class="my-4">
                            <a href="tel:+48514363105" title="+48 514 363 105" class="d-flex justify-content-center flex-xxs-column text-center align-items-center">
                                <i class="fa-solid fa-phone me-4 m-xxs-0"></i>
                                + 48 514 363 105
                            </a>
                        </div>
                        <div class="my-4">
                            <a href="mailto:marcingodfryd@gmail.com" title="marcingodfryd@gmail.com" class="d-flex justify-content-center flex-xxs-column text-center align-items-center">
                                <i class="fa-solid fa-envelope me-4 m-xxs-0"></i>
                                marcingodfryd@gmail.com
                            </a>
                        </div>
                        <div class="my-4">
                            <a href="https://www.linkedin.com/in/marcin-godfryd-719b36244/" target="_blank" title="LinkedIn" class="me-4"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://github.com/Goferov" target="_blank" title="Github"><i class="fa-brands fa-github"></i></a>
                        </div>
                        <a download="" target="_blank" href="assets/pdf/Marcin-Godfryd-CV.pdf" title="Pobierz CV" class="btn btn-primary my-4 d-flex align-items-center px-5">Pobierz CV <i class="fa-solid fa-download ms-2 fs-5"></i></a>
                    </div>
                    <div class="col-xl-5 col-lg-6 from-right">
                        <form id="contactForm" method="post" action="/sendMail.php" class="form-wrapper p-3 p-sm-5">
                            <div class="form-group mb-4">
                                <label for="name" class="mb-1">Imię i nazwisko</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Wpisz imię i nazwisko">
                            </div>
                            <div class="form-group mb-4">
                                <label for="email" class="mb-1">Email</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Wpisz email">
                            </div>
                            <div class="form-group mb-4">
                                <label for="message" class="mb-1">Wiadomość</label>
                                <textarea id="message" name="message" class="form-control" rows="10" placeholder="Wpisz wiadomość"></textarea>
                            </div>
                            <div class="form-group ">
                                <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response" value="">
                                <button title="Wyślij" class="btn fs-6 btn-primary px-5 d-flex align-items-center ms-auto g-recaptcha">Wyślij <i class="fa-solid fa-envelope ms-2 "></i></button>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
        </section>
    </main>
    <footer class="bg-black py-5 text-white">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-start col-6">
                        <a href="#" class="f-bebas-neue navbar-brand">
                            GODFRYD
                        </a>
                    </div>
                    <div>
                        <p class="fw-normal">Website developer</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <h6 class="">Contact</h6>
                    <ul class="footer-menu">
                        <li class="my-1">
                            <a href="tel:+48514363105" title="Call me!">
                                <i class="fa-solid fa-phone"></i>
                                +48 514 363 105
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="mailto:marcingodfryd@gmail.com" title="marcingodfryd@gmail.com">
                                <i class="fa-solid fa-envelope "></i>
                                marcingodfryd@gmail.com
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="https://www.linkedin.com/in/marcin-godfryd-719b36244/" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://github.com/Goferov" target="_blank" title="Github"><i class="fa-brands fa-github"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <h6 class="">Menu</h6>
                    <ul class="footer-menu">
                        <li>
                            <a href="#home" class="scroll-link" title="Home">Home</a>
                        </li>
                        <li>
                            <a href="#about-me" class="scroll-link" title="O mnie">O mnie</a>
                        </li>
                        <li>
                            <a href="#skills" class="scroll-link" title="Umiejętności">Umiejętności</a>
                        </li>
                        <li>
                            <a href="#qualifications" class="scroll-link" title="Doświadczenie">Doświadczenie</a>
                        </li>
                        <li>
                            <a href="#projects" class="scroll-link" title="Projekty">Projekty</a>
                        </li>
                        <li>
                            <a href="#contact" class="scroll-link" title="Kontakt">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="scroll-up position-fixed fs-5  align-items-center justify-content-center border border-primary border-1 "><i class="fa-solid fa-chevron-up"></i></a>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <!-- Scroll Reveal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js" integrity="sha512-Kr+RPfLjQ71E0cJ9nseJ6jwTrnmMnuSPnnsVQQ/ZYYCjOHKfJcWj8ILICXnvf9A7ZQChNzIbr9x/ZAxA6xAZlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfA_TIqAAAAAFV1XknwAETlaOYYTVhWhhpiWVog"></script>

    <!-- sendMail.js -->
    <script src="assets/js/sendMail.js"></script>

    <!-- Main.js -->
    <script src="assets/js/main.js"></script>
</body>
</html>