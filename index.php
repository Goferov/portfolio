<?php

session_start();

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
        "github_link" => "https://github.com/Goferov/top-kebab",
        "technologies" => ["LARAVEL", "REACT", "TAILWIND", "PHP", "POSTGRESQL", "DOCKER"]
    ],

    [
        "title" => "Gym planner",
        "description" => "Aplikacja dla trenera personalnego – system webowy umożliwiający trenerom tworzenie, edytowanie i przypisywanie indywidualnych planów treningowych klientom. Użytkownicy mogą w prosty sposób przeglądać i realizować ćwiczenia w intuicyjnym interfejsie. Backend zbudowany w Laravel (REST API, JWT, PostgreSQL), frontend w React + Vite z Tailwind CSS. Projekt obejmuje pełny proces od analizy wymagań, przez projektowanie (UML, makiety), po implementację i testy (unit, integracyjne, end-to-end).",
        "main_image" => "assets/img/projects/gymplanner/dashboard.png",
        "images" => [
            "assets/img/projects/gymplanner/plan_create.png",
            "assets/img/projects/gymplanner/client_exercise.png",
            "assets/img/projects/gymplanner/client_history.png",
        ],
        "github_link" => "https://github.com/Goferov/gym-planner",
        "technologies" => ["LARAVEL", "REACT", "REST API", "TAILWIND", "POSTGRESQL", "JWT", "PHPUNIT"]
    ],

    [
        "title" => "Testbench",
        "description" => "TestBench.pl to nowoczesna strona oparta na WordPressie z bazą danych MySQL, dedykowana publikacji artykułów o sprzęcie komputerowym, poradników oraz testów produktów. W projekcie skupiono się na optymalizacji SEO, co pozwala na lepszą widoczność w wyszukiwarkach. Strona została zaprojektowana z myślą o responsywności, zapewniając wygodne przeglądanie na różnych urządzeniach. Dzięki elastycznemu systemowi WordPress, zarządzanie treściami i kategoryzacją artykułów jest intuicyjne i efektywne.",
        "main_image" => "assets/img/projects/testbench/hp.png",
        "images" => [
            "assets/img/projects/testbench/article.png",
            "assets/img/projects/testbench/article2.png"
        ],
        "website" => "https://testbench.pl/",
        "technologies" => ["HTML", "JS", "CSS", "PHP", "WORDPRESS", "MARIADB"]
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Marcin Godfryd — Web Developer</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#141414">
    <meta name="msapplication-TileColor" content="#141414">
    <meta name="theme-color" content="#141414">

    <meta name="description" content="Marcin Godfryd - Web Developer - CV & Portfolio">
    <meta name="keywords" content="marcin godfryd, marcingodfryd.pl, marcin godfryd cv, marcin godfryd portfolio, web developer, full stack developer">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=block" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous"/>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <!-- CSS -->
    <link href="assets/css/custom_bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- pageLoader.js -->
    <script defer src="assets/js/pageLoader.min.js"></script>

    <!-- sendMail.js -->
    <script defer src="assets/js/sendMail.min.js"></script>

    <!-- Main.js -->
    <script defer src="assets/js/main.min.js"></script>
</head>
<body class="<?= $_COOKIE['theme'] ?? '' ?>">
    <div id="pageLoader">
        <div class="loading loading-anim">
            <span>G</span>
            <span>O</span>
            <span>D</span>
            <span>F</span>
            <span>R</span>
            <span>Y</span>
            <span>D</span>
        </div>
    </div>
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
                        <div class="changeThemeBtn"><i class="fa-solid <?= isset($_COOKIE['theme']) && $_COOKIE['theme'] ? 'fa-sun' : 'fa-moon' ?>"></i></div>
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
                            <div class="nav-link changeThemeBtn"><i class="fa-solid <?= isset($_COOKIE['theme']) && $_COOKIE['theme'] ? 'fa-sun' : 'fa-moon' ?>"></i></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <nav id="mobileNav" class="d-block d-lg-none navbar navbar-expand p-0">

        <div class="ul-wrap h-100 ms-auto">
            <ul class="navbar-nav gap-4 align-items-end d-flex flex-column pt-3 ">
                <li id="menuClose" class="hamburger align-self-end mt-2 pe-3 pt-0 active d-block d-lg-none hamburger-squeeze js-hamburger">
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
                            <img src="assets/img/avatar.png" alt="Marcin Godfryd - website developer" width="320" class="object-fit-cover position-relative img-fluid z-1"/>
                        </div>
                    </div>
                    <div class="col-lg-6 fs-4 d-flex flex-column justify-content-center align-items-start from-right">
                        <h1 class="f-bebas-neue my-3 d-none d-lg-block">Marcin Godfryd</h1>
                        <hr class="w-25 border-title border-2 opacity-100 d-lg-block mx-auto mx-lg-0">
                        <div class="my-3 text-center text-lg-start mx-auto mx-lg-0">
                            <b>Web developer</b>, pasjonat technologii, entuzjasta innowacji, miłośnik programowania.
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
                                Obecnie studiuję informatykę, stale poszerzając swoją wiedzę i umiejętności w zakresie tworzenia aplikacji internetowych. Jestem gotowy na nowe wyzwania, które pozwolą mi rozwijać się jako programista oraz zdobywać cenne doświadczenie, a także stworzą możliwość nauki nowych technologii i narzędzi.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 from-right fs-5">
                        <div class="my-3">
                            <i class="fa-sharp fa-solid fa-chevron-right text-primary me-2"></i>
                            <span class="fw-semibold">Wykształcenie: </span> Wyższe
                        </div>

                        <div class="my-3">
                            <i class="fa-sharp fa-solid fa-chevron-right text-primary me-2"></i>
                            <span class="fw-semibold">Email: </span> marcingodfryd@gmail.com
                        </div>

                        <a download="" target="_blank" href="assets/pdf/Marcin-Godfryd-CV.pdf" title="Pobierz CV" class="btn btn-primary mt-4 mb-3 d-flex align-items-center px-5 mx-auto mx-sm-0 w-fit-content">Pobierz CV <i class="fa-solid fa-download ms-2 fs-5"></i></a>

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
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-css3-alt"></i>
                                    <p>CSS</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-js"></i>
                                    <p>JavaScript</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="jquery" fill="currentColor" enable-background="new 0 0 1024 1024"  version="1.1" viewBox="0 0 1024 1024" width="1024px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path clip-rule="evenodd" d="M998.805,732.723c-13.82,22.922-26.303,46.783-41.688,68.604     c-76.772,108.89-181.907,172.541-313.433,192.371c-66.178,9.979-132.508,7.857-198.1-4.579     c-69.746-13.228-132.964-43.214-191.343-82.808C134.691,825.239,52.255,716.616,15.683,575.831     C-8.703,481.958-6.389,388.978,34.968,299.635c10.78-23.292,25.342-45.11,40.216-66.159     c17.196-24.337,36.655-47.075,56.563-69.713c-3.375,7.893-6.939,15.714-10.098,23.694     c-37.179,93.888-37.583,189.26-9.019,284.936c38.868,130.189,119.156,230.037,230.596,305.628     c99.967,67.806,210.821,100.244,331.678,96.827c91.813-2.595,178.04-24.681,252.769-80.38     c24.921-18.575,46.77-41.27,70.024-62.078C998.064,732.502,998.436,732.612,998.805,732.723z" fill-rule="evenodd"/><path clip-rule="evenodd" d="M1024,474.521c-7.513,14.825-14.04,29.874-22.392,43.834     c-53.706,89.768-133.248,140.99-236.166,157.154c-52.851,8.303-105.735,6.77-157.824-3.423     c-37.721-7.381-72.919-23.65-106.017-43.457c-95.812-57.337-164.044-136.989-192.522-246.309     c-24.27-93.162-11.342-180.839,46.995-259.745c11.403-15.424,22.224-31.278,33.336-46.917c0.379-0.535,0.992-0.902,2.345-2.1     c-0.418,2.044-0.443,3.358-0.947,4.451c-42.287,91.75-38.86,184.009,4.677,272.985c68.189,139.356,181.558,219.78,335.73,239.274     c86.489,10.936,167.009-8.228,236.772-62.518C987.96,512.208,1004.938,492.826,1024,474.521z" fill-rule="evenodd"/><path clip-rule="evenodd" d="M605.3,24c-4.276,17.406-10.085,34.323-12.4,51.707     c-7.479,56.16,9.264,106.64,40.688,152.367c47.184,68.662,113.273,106.404,195.819,116.046c26.303,3.071,52.43,2.894,78.281-3.25     c29.313-6.968,40.998-14.011,82.194-48.85c-2.51,4.832-3.814,7.739-5.46,10.44c-38.795,63.714-95.444,95.492-170.116,98.527     c-127.829,5.199-233.313-91.405-256.971-190.864c-13.99-58.816-4.693-113.471,31.083-162.94     C594.042,39.412,599.713,31.672,605.3,24z" fill-rule="evenodd"/></g></g></svg>
                                    <p>jQuery</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-sass"></i>
                                    <p>SASS</p>
                                </div>
                                <p class="rate">Średni</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-bootstrap"></i>
                                    <p>Bootstrap</p>
                                </div>
                                <p class="rate">Średni</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="tailwind" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.036c-2.667 0-4.333 1.325-5 3.976 1-1.325 2.167-1.822 3.5-1.491.761.189 1.305.738 1.906 1.345C13.387 10.855 14.522 12 17 12c2.667 0 4.333-1.325 5-3.976-1 1.325-2.166 1.822-3.5 1.491-.761-.189-1.305-.738-1.907-1.345-.98-.99-2.114-2.134-4.593-2.134zM7 12c-2.667 0-4.333 1.325-5 3.976 1-1.326 2.167-1.822 3.5-1.491.761.189 1.305.738 1.907 1.345.98.989 2.115 2.134 4.594 2.134 2.667 0 4.333-1.325 5-3.976-1 1.325-2.167 1.822-3.5 1.491-.761-.189-1.305-.738-1.906-1.345C10.613 13.145 9.478 12 7 12z"/></svg>
                                    <p>Tailwind</p>
                                </div>
                                <p class="rate">Podstawowy</p>
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
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-python"></i>
                                    <p>Python</p>
                                </div>
                                <p class="rate">Średni</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-java"></i>
                                    <p>Java</p>
                                </div>
                                <p class="rate">Średni</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-laravel"></i>
                                    <p>Laravel</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-symfony"></i>
                                    <p>Symfony</p>
                                </div>
                                <p class="rate">Podstawowy</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-wordpress"></i>
                                    <p>Wordpress</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="CodeIgniter" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m8.49 24a4.59 4.59 0 0 1 -2.723-3.824 5.4 5.4 0 0 1 2.45-4.246c-.238.58-.18 1.24.15 1.77a1.625 1.625 0 0 0 1.655.646 1.697 1.697 0 0 0 .66-2.91 3.76 3.76 0 0 1 -1.35-3.436 3.523 3.523 0 0 1 1.096-1.785c-.405 1.08.737 2.146 1.504 2.67 1.36.816 2.67 1.713 3.924 2.686a5.285 5.285 0 0 1 2 4.5 4.986 4.986 0 0 1 -3.385 3.93c3.55-.79 7.21-3.61 7.28-7.61a8.288 8.288 0 0 0 -4.9-7.38h-.13c.065.157.096.326.09.496.01-.11.01-.22 0-.33.016.13.016.26 0 .39a1.699 1.699 0 0 1 -2.976.658c-1.17-1.5 0-3.207.196-4.857a6.171 6.171 0 0 0 -2.554-5.36c.856 1.427-.284 3.3-1.113 4.366-.83 1.066-2.03 1.86-3.008 2.79a24.503 24.503 0 0 0 -2.887 3.21 9.778 9.778 0 0 0 -2 8.205 7.806 7.806 0 0 0 6.015 5.43h.016z"/></svg>
                                    <p>CodeIgniter</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="MySQL" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16.405 5.676c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.87h-.927a50.854 50.854 0 0 0-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 0 0-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008L4.25 13.34h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.79h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483h.88zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.763c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156s-.803.45-1.384.45c-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 0 0 .3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 0 0-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 0 0-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 0 0-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 0 0-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 0 1-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 0 1-.35-.4 8.76 8.76 0 0 1-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 0 1-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 0 1 2.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"/></svg>
                                    <p>MySQL</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-solid fa-leaf"></i>
                                    <p>MongoDB</p>
                                </div>
                                <p class="rate">Podstawy</p>
                            </div>
                            <div>
                                <div class="content">
                                    <svg id="PostgreSQL" fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m22.839 0c-1.245.011-2.479.188-3.677.536l-.083.027c-.751-.131-1.516-.203-2.276-.219-1.573-.027-2.923.353-4.011.989-1.073-.369-3.297-1.016-5.641-.885-1.629.088-3.411.583-4.735 1.979-1.312 1.391-2.009 3.547-1.864 6.485.041.807.271 2.124.656 3.837.38 1.709.917 3.709 1.589 5.537.672 1.823 1.405 3.463 2.552 4.577.572.557 1.364 1.032 2.296.991.652-.027 1.24-.313 1.751-.735.249.328.516.468.755.599.308.167.599.281.907.355.552.14 1.495.323 2.599.135.375-.063.771-.187 1.167-.359.016.437.032.869.047 1.307.057 1.38.095 2.656.505 3.776.068.183.251 1.12.969 1.953.724.833 2.129 1.349 3.739 1.005 1.131-.24 2.573-.677 3.532-2.041.948-1.344 1.375-3.276 1.459-6.412.02-.172.047-.312.072-.448l.224.021h.027c1.208.052 2.521-.12 3.62-.631.968-.448 1.703-.901 2.239-1.708.131-.199.281-.443.319-.86.041-.411-.199-1.063-.595-1.364-.791-.604-1.291-.375-1.828-.26-.525.115-1.063.176-1.599.192 1.541-2.593 2.645-5.353 3.276-7.792.375-1.443.584-2.771.599-3.932.021-1.161-.077-2.187-.771-3.077-2.177-2.776-5.235-3.548-7.599-3.573-.073 0-.145 0-.219 0zm-.063.855c2.235-.021 5.093.604 7.145 3.228.464.589.6 1.448.584 2.511s-.213 2.328-.573 3.719c-.692 2.699-2.011 5.833-3.859 8.652.063.047.135.088.208.115.385.161 1.265.296 3.025-.063.443-.095.767-.156 1.105.099.167.14.255.349.244.568-.02.161-.077.317-.177.448-.339.509-1.009.995-1.869 1.396-.76.353-1.855.536-2.817.547-.489.005-.937-.032-1.319-.152l-.02-.004c-.147 1.411-.484 4.203-.704 5.473-.176 1.025-.484 1.844-1.072 2.453-.589.615-1.417.979-2.537 1.219-1.385.297-2.391-.021-3.041-.568s-.948-1.276-1.125-1.719c-.124-.307-.187-.703-.249-1.235-.063-.531-.104-1.177-.136-1.911-.041-1.12-.057-2.24-.041-3.365-.577.532-1.296.88-2.068 1.016-.921.156-1.739 0-2.228-.12-.24-.063-.475-.151-.693-.271-.229-.12-.443-.255-.588-.527-.084-.156-.109-.337-.073-.509.041-.177.145-.328.287-.443.265-.215.615-.333 1.14-.443.959-.199 1.297-.333 1.5-.496.172-.135.371-.416.713-.828 0-.015 0-.036-.005-.052-.619-.02-1.224-.181-1.771-.479-.197.208-1.224 1.292-2.468 2.792-.521.624-1.099.984-1.713 1.011-.609.025-1.163-.281-1.631-.735-.937-.912-1.688-2.48-2.339-4.251s-1.177-3.744-1.557-5.421c-.375-1.683-.599-3.037-.631-3.688-.14-2.776.511-4.645 1.625-5.828s2.641-1.625 4.131-1.713c2.672-.151 5.213.781 5.724.979.989-.672 2.265-1.088 3.859-1.063.756.011 1.505.109 2.24.292l.027-.016c.323-.109.651-.208.984-.28.907-.215 1.833-.324 2.76-.339zm.203.89h-.197c-.76.009-1.527.099-2.271.26 1.661.735 2.916 1.864 3.801 3 .615.781 1.12 1.64 1.505 2.557.152.355.251.651.303.88.031.115.047.213.057.312 0 .052.005.105-.021.193 0 .005-.005.016-.005.021.043 1.167-.249 1.957-.287 3.072-.025.808.183 1.756.235 2.792.047.973-.072 2.041-.703 3.093.052.063.099.125.151.193 1.672-2.636 2.88-5.547 3.521-8.032.344-1.339.525-2.552.541-3.509.016-.959-.161-1.657-.391-1.948-1.792-2.287-4.213-2.871-6.24-2.885zm-6.391.343c-1.572.005-2.703.48-3.561 1.193-.887.74-1.48 1.745-1.865 2.781-.464 1.224-.625 2.411-.688 3.219l.021-.011c.475-.265 1.099-.536 1.771-.687.667-.157 1.391-.204 2.041.052.657.249 1.193.848 1.391 1.749.939 4.344-.291 5.959-.744 7.177-.172.443-.323.891-.443 1.349.057-.011.115-.027.172-.032.323-.025.572.079.719.141.459.192.771.588.943 1.041.041.12.072.244.093.38.016.052.027.109.027.167-.052 1.661-.048 3.323.015 4.984.032.719.079 1.349.136 1.849.057.495.135.875.188 1.005.171.427.421.984.875 1.364.448.381 1.093.631 2.276.381 1.025-.224 1.656-.527 2.077-.964.423-.443.672-1.052.833-1.984.245-1.401.729-5.464.787-6.224-.025-.579.057-1.021.245-1.36.187-.344.479-.557.735-.672.124-.057.244-.093.343-.125-.104-.145-.213-.291-.323-.432-.364-.443-.667-.937-.891-1.463-.104-.22-.219-.439-.344-.647-.176-.317-.4-.719-.635-1.172-.469-.896-.979-1.989-1.245-3.052-.265-1.063-.301-2.161.376-2.932.599-.688 1.656-.973 3.233-.812-.047-.141-.072-.261-.151-.443-.359-.844-.828-1.636-1.391-2.355-1.339-1.713-3.511-3.412-6.859-3.469zm-8.853.068c-.167 0-.339.005-.505.016-1.349.079-2.62.468-3.532 1.432-.911.969-1.509 2.547-1.38 5.167.027.5.24 1.885.609 3.536.371 1.652.896 3.595 1.527 5.313.629 1.713 1.391 3.208 2.12 3.916.364.349.681.495.968.485.287-.016.636-.183 1.063-.693.776-.937 1.579-1.844 2.412-2.729-1.199-1.047-1.787-2.629-1.552-4.203.135-.984.156-1.907.135-2.636-.015-.708-.063-1.176-.063-1.473 0-.011 0-.016 0-.027v-.005l-.005-.009c0-1.537.272-3.057.792-4.5.375-.996.928-2 1.76-2.819-.817-.271-2.271-.676-3.843-.755-.167-.011-.339-.016-.505-.016zm16.53 7.041c-.905.016-1.411.251-1.681.552-.376.433-.412 1.193-.177 2.131.233.937.719 1.984 1.172 2.855.224.437.443.828.619 1.145.183.323.313.547.391.745.073.177.157.333.24.479.349-.74.412-1.464.375-2.224-.047-.937-.265-1.896-.229-2.864.037-1.136.261-1.876.277-2.751-.324-.041-.657-.068-.985-.068zm-10.978.158c-.276 0-.552.036-.823.099-.537.131-1.052.328-1.537.599-.161.088-.317.188-.463.303l-.032.025c.011.199.047.667.063 1.365.016.76 0 1.728-.145 2.776-.323 2.281 1.333 4.167 3.276 4.172.115-.469.301-.944.489-1.443.541-1.459 1.604-2.521.708-6.677-.145-.677-.437-.953-.839-1.109-.224-.079-.457-.115-.697-.109zm10.557.27h.068c.083.005.167.011.239.031.068.016.131.037.183.073.052.031.088.083.099.145v.011c0 .063-.016.125-.047.183-.041.072-.088.14-.145.197-.136.151-.319.251-.516.281-.193.027-.385-.025-.547-.135-.063-.048-.125-.1-.172-.157-.047-.047-.073-.109-.084-.172-.004-.061.011-.124.052-.171.048-.048.1-.089.157-.12.129-.073.301-.125.5-.152.072-.009.145-.015.213-.02zm-10.428.224c.068 0 .147.005.22.015.208.032.385.084.525.167.068.032.131.084.177.141.052.063.077.14.073.224-.016.077-.048.151-.1.208-.057.068-.119.125-.192.172-.172.125-.385.177-.599.151-.215-.036-.412-.14-.557-.301-.063-.068-.115-.141-.157-.219-.047-.073-.067-.156-.057-.24.021-.14.141-.219.256-.26.131-.043.271-.057.411-.052zm12.079 9.791h-.005c-.192.073-.353.1-.489.163-.14.052-.251.156-.317.285-.089.152-.156.423-.136.885.057.043.125.073.199.095.224.068.609.115 1.036.109.849-.011 1.896-.208 2.453-.469.453-.208.88-.489 1.255-.817-1.859.38-2.905.281-3.552.016-.156-.068-.307-.157-.443-.267zm-10.708.125h-.027c-.072.005-.172.032-.375.251-.464.52-.625.848-1.005 1.151-.385.307-.88.469-1.875.672-.312.063-.495.135-.615.192.036.032.036.043.093.068.147.084.333.152.485.193.427.104 1.124.229 1.859.104.729-.125 1.489-.475 2.141-1.385.115-.156.124-.391.031-.641-.093-.244-.297-.463-.437-.52-.089-.043-.183-.068-.276-.084z"/></svg>
                                    <p>PostgreSQL</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-git-alt"></i>
                                    <p>GIT</p>
                                </div>
                                <p class="rate">Zaawansowany</p>
                            </div>
                            <div>
                                <div class="content">
                                    <i class="fa-brands fa-docker"></i>
                                    <p>Docker</p>
                                </div>
                                <p class="rate">Średni</p>
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
                                <p class="mb-2"><i class="fa-sharp fa-regular fa-calendar-days"></i> 2021 - obecnie</p>
                                <p class="mb-0">Full Stack Developer</p>
                                <i class="fa-solid fa-circle timeline-dot"></i>
                            </div>
                            <div class="position-relative ps-4">
                                <h3 class="mb-3 fw-semibold fs-4">Adams Computers</h3>
                                <p class="mb-2"><i class="fa-sharp fa-regular fa-calendar-days"></i> 2019 </p>
                                <p class="mb-0">Stażysta</p>
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
                                <div data-bs-toggle="modal" class="project-box position-relative overflow-hidden" data-bs-target="#modal-<?php echo strtolower(str_replace(' ', '-', $project['title'])); ?>">
                                    <img src="<?php echo $project['main_image']; ?>" alt="<?php echo $project['title']; ?>" class="w-100 h-100"/>
                                    <div class="overlay text-white fs-5 text-center position-absolute top-0 start-0 bottom-0 end-0 d-flex flex-column justify-content-center align-items-center">
                                        <h3 class="fs-4 mb-0 fw-semibold"><?php echo $project['title']; ?></h3>
                                        <h3 class="fs-5 fw-normal">Zobacz szczegóły <i class="fa-solid fa-arrow-up-right-from-square fs-6"></i></h3>
                                    </div>
                                </div>

                            <div class="modal modal-xl fade project-modal" id="modal-<?php echo strtolower(str_replace(' ', '-', $project['title'])); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo $project['title']; ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
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

                                                <div class="col-lg-7 mt-4 mt-lg-0">
                                                    <h4 class="fs-5 mb-1">Opis</h4>
                                                    <p><?php echo $project['description']; ?></p>

                                                    <?php if (!empty($project['github_link']) || !empty($project['website'])): ?>
                                                        <h4 class="fs-5 mb-1 mt-4">Link</h4>
                                                        <div class="project-links d-flex flex-column">
                                                            <?php if(!empty($project['github_link'])): ?>
                                                                <a href="<?= $project['github_link']; ?>" target="_blank">
                                                                    <i class="fa-brands fa-github text-primary me-2"></i> Github
                                                                </a>
                                                            <?php endif; ?>

                                                            <?php if(!empty($project['website'])): ?>
                                                                <a href="<?= $project['website']; ?>" target="_blank">
                                                                    <i class="fa-solid fa-globe text-primary me-2"></i> <?= $project['website']; ?>
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endif; ?>

                                                    <h4 class="fs-5 mb-1 mt-4">Technologie</h4>
                                                    <div class="project-tags text-white fw-medium d-flex align-items-center flex-wrap gap-2">
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
                            <?php if (isset($_SESSION['errors'])): ?>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <div class="bi flex-shrink-0 me-2 fs-5"><i class="fa-sharp fa-solid fa-triangle-exclamation"></i></div>
                                    <ul class="mb-0">
                                        <?php foreach ($_SESSION['errors'] as $error): ?>
                                            <li><?php echo htmlspecialchars($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php unset($_SESSION['errors']); ?>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['success'])): ?>
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <div class="bi flex-shrink-0 me-2 fs-5"><i class="fa-sharp fa-solid fa-circle-check"></i></div>
                                    <p class="mb-0"><?php echo htmlspecialchars($_SESSION['success']); ?></p>
                                </div>
                                <?php unset($_SESSION['success']);  ?>
                            <?php endif; ?>

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


</body>
</html>