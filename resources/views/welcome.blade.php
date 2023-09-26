<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('img/apple-icono.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/icono.png')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language School Boutique - Inicio</title>
    <link rel="shortcut icon" href="{{ asset('img/icono.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Language School Boutique - Examen de colocación" />
    <meta name="description"
    content="Exámen de colocación con el cual podrás registrarte y realizarlo a la brevedad contestando unas breves preguntas que garantíza resultados certeros" />
    

</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <img src="{{ asset('img/logo.png')}}" alt="" width="30%">
            </div>

            <ul class="nav__link nav__link--menu">
                
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="{{ route('login') }}" class="nav__links">Inicia Sesion</a>
                </li>
                <li class="nav__items">
                    <a href="{{ route('register') }}" class="nav__links">Registrate</a>
                </li>
                <li class="nav__items">
                    <a href="https://languageschoolboutique.com/" class="nav__links">Blog</a>
                </li>

                <img src="{{ asset('img/close.svg')}}" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="{{ asset('img/menu.svg')}}" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            
            <h1 class="hero__title">Juntos aprendemos un idioma y alcanzaremos tus metas.</h1>
            <p class="hero__paragraph">Nuestra metodología, está especializada en clases hechas a la medida para las necesidades de cada alumno o grupo. Entra a realizar tu test para empezar con nosotros.</p>
            <a href="" class="cta">Comienza ahora</a>
        </section>
    </header>
    <style type="text/css">
            .hero::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url("public/img/computer.jpg");
                clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 95%, 0 80%);
                z-index: -1;
            }
        </style>

    <main>
        <section class="container about">
            <h2 class="subtitle">Aprender un idioma es conocer un nuevo mundo.</h2>
            <p class="about__paragraph">Nuestros casos de &eacute;xito nos respaldan, aprende en un m&eacute;todo enfocado en ti y con los horarios m&aacute;s flexibles.</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="{{ asset('img/shapes.svg')}}" class="about__icon">
                    <h3 class="about__title">Clases Individuales</h3>
                    <p class="about__paragrah">Clases en el horario m&aacute;s adecuado, se desarrollan con base en objetivos muy espec&iacute;ficos y de acuerdo con sus necesidades en el corto o mediano plazo.</p>
                </article>

                <article class="about__icons">
                    <img src="{{ asset('img/paint.svg')}}" class="about__icon">
                    <h3 class="about__title">Clases Grupales</h3>
                    <p class="about__paragrah">Potenciamos el conocimiento y aptitudes de cada uno de los miembros del equipo, por medio de din&aacute;micas, juegos y mucho trabajo en equipo. Capitalizamos las oportunidades de los miembros sumado al conocimiento de los profesores para facilitar el aprendizaje grupal.</p>
                </article>

                <article class="about__icons">
                    <img src="{{ asset('img/code.svg')}}" class="about__icon">
                    <h3 class="about__title">Int&eacute;rpretes y Peritos Traductores</h3>
                    <p class="about__paragrah">Contamos con int&eacute;rpretes y peritos certificados en todos los idiomas, tanto para traducciones simult&aacute;neas, escritas y sello de perito para documentos oficiales.</p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">¡Queremos empoderarte!</h2>
                    <p class="knowledge__paragraph">para que adquieras habilidades lingü&iacute;sticas s&oacute;lidas y confianza en ti mismo, lo que te permitir&aacute; alcanzar tus objetivos personales.</p>
                    <a href="#" class="cta">Entra al curso</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="{{ asset('img/macbook.png')}}" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">

            <h2 class="subtitle">Ellos ya conf&iacute;an en nosotros, ¡solo faltas t&uacute;!</h2>

            <div class="unatable">
                
                <a href="https://www.seiconn.com.mx/" target="_blank"><div class="price__element" style="background-image: url({{ asset('img/seiconn.jpg')}});"></div></a>
                <a href="https://www.swy.lat/" target="_blank"><div class="price__element" style="background-image: url({{ asset('img/sweetway.jpg')}});"></div></a>
                

            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
                <img src="{{ asset('img/leftarrow.svg')}}" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Jordan Alexander, <span class="testimony__course">estudiante
                                de CSS.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                            blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="{{ asset('img/face.jpg')}}" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Alejandra Perez, <span class="testimony__course">estudiante de
                                CSS.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione
                            voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="{{ asset('img/face2.jpg')}}" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Karen Arteaga, <span class="testimony__course">estudiante de
                                CSS.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="{{ asset('img/face3.jpg')}}" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Kevin Ramirez, <span class="testimony__course">estudiante de
                                CSS.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="{{ asset('img/face4.jpg')}}" class="testimony__img">
                    </figure>
                </section>


                <img src="{{ asset('img/rightarrow.svg')}}" class="testimony__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, porro
                doloribus neque perspiciatis sapiente fuga.</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es CSS?
                            <span class="questions__arrow">
                                <img src="{{ asset('img/arrow.svg')}}" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué aprenderé en este curso?
                            <span class="questions__arrow">
                                <img src="{{ asset('img/arrow.svg')}}" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es CSS GRID?
                            <span class="questions__arrow">
                                <img src="{{ asset('img/arrow.svg')}}" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>
            </section>

            <section class="questions__offer">
                <h2 class="subtitle">¿Est&aacute;s listo para aprender un nuevo idioma?</h2>
                <p class="questions__copy">Sabemos que hoy los idiomas ya no son un lujo, son una necesidad, por eso en LSB te ayudamos a prepararte para dominar un nuevo idioma, desde nuestro m&eacute;todo y la reducci&oacute;n del acento, para lograr sonar como nativo.</p>
                <a href="#" class="cta">Aprende ahora</a>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <img src="{{ asset('img/logo.png')}}" alt="" width="25%">

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="{{ route('login') }}" class="nav__links">Inicia sesion</a>
                    </li>
                    <li class="nav__items">
                        <a href="{{ route('register') }}" class="nav__links">Registrate</a>
                    </li>
                    <li class="nav__items">
                        <a href="https://languageschoolboutique.com/" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>

            
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="{{ asset('img/facebook.svg')}}" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="{{ asset('img/twitter.svg')}}" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="{{ asset('img/youtube.svg')}}" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Gvs - Language School Boutique</h3>
        </section>
    </footer>

    <script src="{{ asset('js/slider.js')}}"></script>
    <script src="{{ asset('js/questions.js')}}"></script>
    <script src="{{ asset('js/menu.js')}}"></script>
</body>

</html>