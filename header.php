<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset") ?>" <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>


<script>
    var cps_login;

    if (localStorage.getItem('cps_login')) {
        cps_login = JSON.parse(localStorage.getItem('cps_login'));
    } else {
        localStorage.setItem('cps_login', false);
    }
</script>

<body>

    <script>
        function logout() {

            cps_login = JSON.parse(localStorage.getItem('cps_login'));

            localStorage.setItem('cps_login', !cps_login);

            console.log("localStorage.getItem('cps_login')");
            console.log(localStorage.getItem('cps_login'));

            setTimeout(function() {
                window.location.reload(true);
            }, 1500);

        }
    </script>

 

    <header class="header">
        
   
        <div class="nav__container">

            <nav class="nav">
                <!-- icons menu -->
                <button class="nav__toggle">
                    <figure id="icon-menu">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                    </figure>
                    <figure id="icon-close" class="icon_hidden">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </figure>
                </button>



                <!-- logo  -->
                <div class="nav__logo">
                    <?php the_custom_logo(); ?>
                </div>



                <!-- MENU REGISTRADO EN WORDPRESS - POR AHORA SE MANEJARÁ POR    -->
                <!-- menu links -->
                <?php
                // wp_nav_menu(array(
                //     'theme_location' => 'menu',
                //     'nav__links' => 'ul',
                //     'container_class' => 'nav__links',
                //     'menu_class' => 'nav__links'
                // ));
                ?>

                <ul id="user-box" class="nav__links">
                    <script>
                        if (cps_login) {

                            document.getElementById("user-box").innerHTML =
                                `<li class="nav__item">
                            <button class="btn__icon">
                                    <a href="">
                                        <svg id="card-menu" data-name="Capa 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 27"><rect fill="currentColor" x="1" y="1" width="46" height="25" rx="4.08"/><path fill="#000" d="M42.92,2A3.08,3.08,0,0,1,46,5.08V21.92A3.08,3.08,0,0,1,42.92,25H5.09A3.08,3.08,0,0,1,2,21.92V5.08A3.08,3.08,0,0,1,5.09,2H42.92m0-2H5.09A5.09,5.09,0,0,0,0,5.08V21.92A5.09,5.09,0,0,0,5.09,27H42.92A5.09,5.09,0,0,0,48,21.92V5.08A5.09,5.09,0,0,0,42.92,0Z"/><path d="M30.6,5H18.06l-4.88,5.51,11,12.4L35.34,10.59Zm2.9,5.05-4.26,0,1.3-3.48Zm-3.9-4-1.22,3.3-2.75-3.3Zm-2,4-6.41,0,3.22-3.78Zm-4.42-4-2.9,3.41L19.05,6.05Zm-5.06.49L19.33,10H15ZM15.05,11l4.66,0,3.1,8.7Zm5.78,0,6.91,0-3.52,9.51Zm4.82,8.69,3.21-8.66h4.6Z"/></svg>
                                        
                                    </a>
                                </button>
                                
                                <button class="btn__icon-gift">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.39 33.14"><g id="Capa_11" data-name="Capa 11"><path d="M36.73,9H27a3.21,3.21,0,0,0,.39-.84A4,4,0,0,0,25,3.26a4.23,4.23,0,0,0-3.68.36,3.42,3.42,0,0,0-.89.89,3.42,3.42,0,0,0-.89-.89,4.24,4.24,0,0,0-3.64-.38,4.05,4.05,0,0,0-2.42,4.94,3.21,3.21,0,0,0,.39.84H4.34a1.5,1.5,0,0,0-1.5,1.5v5.12A1.5,1.5,0,0,0,4.1,17.12v19H37.15V17.07a1.48,1.48,0,0,0,1.08-1.43V10.52A1.5,1.5,0,0,0,36.73,9ZM17,34.13H6.1v-17H17Zm0-19H4.84V11H17ZM16,8.51a1.91,1.91,0,0,1-.61-.91,2,2,0,0,1,1.17-2.47A2.56,2.56,0,0,1,17.43,5a1.68,1.68,0,0,1,1,.28c.66.46,1,1.57,1,3.22V9H17.61A2.52,2.52,0,0,1,16,8.51Zm5.9,25.62H19v-17h3Zm0-19H19V11h3ZM21.45,9V8.48c0-1.64.34-2.75,1-3.21a2.25,2.25,0,0,1,1.87-.13A2,2,0,0,1,25.47,7.6a1.82,1.82,0,0,1-.62.91A2.47,2.47,0,0,1,23.27,9Zm13.7,25.11H23.92v-17H35.15Zm1.08-19H23.92V11H36.23Z" transform="translate(-2.84 -2.99)"/></g></svg>
                                    </a>
                            </button>

                            </li>

                            <li class="nav__link">

                                <a
                                    href="https://promos.suscribete.prensa.com/regalo/?utm_source=suscribete&utm_medium=icono_regalo&utm_campaign=gift_subscription">
                                    <span class="material-symbols-outlined">
                                        redeem
                                    </span>

                                    Enviar Regalo</a>

                            </li>

                            <!-- MENU -->

                            <li class="nav__link">

                                <a href="/perfil/">
                                    <span class="material-symbols-outlined">
                                        person
                                    </span>

                                    Perfil
                                </a>

                            </li>

                            <li class="nav__link">

                                <a href="https://suscribete.prensa.com/guia/">
                                    <span class="material-symbols-outlined">
                                        headphones
                                    </span>

                                    Ayuda

                                </a>

                            </li>

                            <li class="nav__link">

                                <a href="" onclick="javascript:logout()">
                                    <span class="material-symbols-outlined">
                                        logout
                                    </span>
                                    Cerrar Sesión
                                </a>
                            </li>`;
                        } else {
                            document.getElementById("user-box").innerHTML =

                                `<li class="nav__item">
                                <button class="btn__icon">
                                        <a href="">
                                            <svg id="card-menu" data-name="Capa 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 27"><rect fill="currentColor" x="1" y="1" width="46" height="25" rx="4.08"/><path fill="#000" d="M42.92,2A3.08,3.08,0,0,1,46,5.08V21.92A3.08,3.08,0,0,1,42.92,25H5.09A3.08,3.08,0,0,1,2,21.92V5.08A3.08,3.08,0,0,1,5.09,2H42.92m0-2H5.09A5.09,5.09,0,0,0,0,5.08V21.92A5.09,5.09,0,0,0,5.09,27H42.92A5.09,5.09,0,0,0,48,21.92V5.08A5.09,5.09,0,0,0,42.92,0Z"/><path d="M30.6,5H18.06l-4.88,5.51,11,12.4L35.34,10.59Zm2.9,5.05-4.26,0,1.3-3.48Zm-3.9-4-1.22,3.3-2.75-3.3Zm-2,4-6.41,0,3.22-3.78Zm-4.42-4-2.9,3.41L19.05,6.05Zm-5.06.49L19.33,10H15ZM15.05,11l4.66,0,3.1,8.7Zm5.78,0,6.91,0-3.52,9.51Zm4.82,8.69,3.21-8.66h4.6Z"/></svg>
                                            
                                        </a>
                                    </button>
                                    
                                    <button class="btn__icon-gift">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.39 33.14"><g id="Capa_11" data-name="Capa 11"><path d="M36.73,9H27a3.21,3.21,0,0,0,.39-.84A4,4,0,0,0,25,3.26a4.23,4.23,0,0,0-3.68.36,3.42,3.42,0,0,0-.89.89,3.42,3.42,0,0,0-.89-.89,4.24,4.24,0,0,0-3.64-.38,4.05,4.05,0,0,0-2.42,4.94,3.21,3.21,0,0,0,.39.84H4.34a1.5,1.5,0,0,0-1.5,1.5v5.12A1.5,1.5,0,0,0,4.1,17.12v19H37.15V17.07a1.48,1.48,0,0,0,1.08-1.43V10.52A1.5,1.5,0,0,0,36.73,9ZM17,34.13H6.1v-17H17Zm0-19H4.84V11H17ZM16,8.51a1.91,1.91,0,0,1-.61-.91,2,2,0,0,1,1.17-2.47A2.56,2.56,0,0,1,17.43,5a1.68,1.68,0,0,1,1,.28c.66.46,1,1.57,1,3.22V9H17.61A2.52,2.52,0,0,1,16,8.51Zm5.9,25.62H19v-17h3Zm0-19H19V11h3ZM21.45,9V8.48c0-1.64.34-2.75,1-3.21a2.25,2.25,0,0,1,1.87-.13A2,2,0,0,1,25.47,7.6a1.82,1.82,0,0,1-.62.91A2.47,2.47,0,0,1,23.27,9Zm13.7,25.11H23.92v-17H35.15Zm1.08-19H23.92V11H36.23Z" transform="translate(-2.84 -2.99)"/></g></svg>
                                        </a>
                                </button>

                                </li>

                                <li class="nav__link">

                                    <a
                                        href="https://promos.suscribete.prensa.com/regalo/?utm_source=suscribete&utm_medium=icono_regalo&utm_campaign=gift_subscription">
                                        <span class="material-symbols-outlined">
                                            redeem
                                        </span>

                                        Enviar Regalo</a>

                                </li>

                                <!-- MENU -->

                                <li class="nav__link">

                                    <a href="http://suscribeteprensa.local/">
                                        <span class="material-symbols-outlined">
                                            person
                                        </span>

                                        Ver Planes
                                    </a>

                                </li>

                                <li class="nav__link">

                                    <a href="https://suscribete.prensa.com/guia/">
                                        <span class="material-symbols-outlined">
                                            headphones
                                        </span>

                                        Ayuda

                                    </a>

                                </li>
                                
                                <li class="nav__link">
                                

                                    <a href="" onclick="javascript:logout()">
                                        <span class="material-symbols-outlined">
                                            logout
                                        </span>
                                        Iniciar Sesión
                                    </a>
                                </li>`;
                        }
                    </script>


                </ul>

                <!-- icon profile -->
                <button class="nav__profile">
                    <a href="https://suscribete.prensa.com/">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                    </a>
                </button>

            </nav>
        </div>

        <div id="back-menu" class="back-menu"></div>

    </header>




    <div class="container">
        <section class="header__section content">
            Bienvenido, Miguel Ángel
        </section>
    </div>
    
    