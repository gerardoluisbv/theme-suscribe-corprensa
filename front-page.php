

<?php get_header(); ?>


        <div class="container_branday">
            <div class="flex__branday content">
                <div class="flex__branday-left">

                    <p class="title__branday"> 
                        
                         Un año de acceso a la información
                            
                    <br>
                     
                        <span class="title_second_branday"> QUE REALMENTE IMPORTA  </span> 
                    
                    </p>

                    <br>

                    <p>
                    <h3>
                        POR SOLO <del>$50</del> $25
                    </h3>

                     <span  class="price_second_branday">
                         SUSCRIPCIÓN DIGITAL PRIMER AÑO
                    </span>   
                        

                    </p>

                    <br>

                    <button class="button__branday">
                        Obtener oferta
                    </button>

                </div>
                <div class="flex__branday-rigth">

                    <img src="<?php echo get_template_directory_uri()?>/assets/branday/brandayimg.png" alt="">

                </div>
            </div>
        </div>


    <!-- INICIO DEL CUERPO PRINCIPAL -->

    <main class="main">


        <!-- INICIO DEL CONTENEDOR -->

        <div class="container">


            <div class="title__main content">
                <h1 class="h1__title"> El <span class="font__red">periodismo independiente</span> es pieza angular en
                    una sociedad democrática. </h1>
                <h3 class="sub__title">Suscríbete ahora:</h3>
            </div>


            <div class="planes__container content">

                <div class="card__plan">

                    <div class="card__top">
                        <div class="div__title">
                            <h2 class="card__title"> Experiencia Digital </h2>
                            <p class="card__subtitle"> Recomendado </p>
                        </div>

                        <div class="card__pricing">
                            <div class="card__img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img_planes/plan_digital.png" class="card__img" alt="">
                            </div>

                            <div class="card_details">
                                <div class="div__card-price">

                                    <div>
                                        <h1 class="card__price--font">
                                            <span class="span__font">
                                                $
                                            </span>
                                            1
                                        </h1>
                                    </div>
                                    <h3 class="card__price"> Anual </h3>
                                    <h6 class="card__subtitle-price"> Luego 5$ </h6>
                                    <div class="div__button">
                                        <a href="/detalle">
                                            <button class="card__button">
                                                ELEGIR PLAN
                                            </button>
                                        </a>
                                        <span class="button__card-text"> Puedes cancelar en cualquier momento </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card__bottom">
                        <ul class="card__info">

                            <li class="icon">
                                Acceso ilimitado a web y a las apps de prensa.com para iPhone,
                                iPad y Android.
                            </li>

                            <li>
                                Acceso ilimitado a contenido en martesfinanciero.com
                            </li>

                            <li>
                                Acceso ilimitado a contenido en ellas.pa
                            </li>

                            <li>
                                Acceso ilimitado al contenido de Mi Diario digital
                            </li>

                            <li>
                                15% de descuento en clasificados, reseñas y esquelas. (Beneficio solo aplica en plan de
                                pago anual)
                            </li>
                            <li>
                                1 tarjeta digital para disfrutar de los beneficios del Club La Prensa.
                            </li>
                    </div>
                </div> <!-- END PRIMERA CARD PLANES PRINCIPALES -->





                <!-- SEGUNDA CARD  -->

                <div class="card__plan card__border-none">

                    <div class="card__top">
                        <div class="div__title">
                            <h2 class="card__title"> Plan Gold </h2>
                            <p class="card__subtitle hidden"> Anual </p>
                        </div>

                        <div class="card__pricing">
                            <div class="card__img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img_planes/plan_gold2.png" class="card__img" alt="">
                            </div>

                            <div class="card_details">
                                <div class="div__card-price">

                                    <div>
                                        <h1 class="card__price--font">
                                            <span class="span__font">
                                                $
                                            </span>
                                            10
                                        </h1>
                                    </div>
                                    <h3 class="card__price"> Anual </h3>
                                    <h6 class="card__subtitle-price .hidden"> Plan Anual </h6>

                                    <div class="div__button">
                                        <button class="card__button">
                                            ELEGIR PLAN
                                        </button>
                                        <span class="button__card-text"> Puedes cancelar en cualquier momento </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card__bottom">
                        <ul class="card__info">

                            <li class="icon">
                                Entrega a domicilio de La Prensa.
                            </li>

                            <li>
                                Acceso ilimitado a web y a las apps de prensa.com para iPhone, iPad y Android.
                            </li>

                            <li>
                                Acceso ilimitado a contenido en martesfinanciero.com.
                            </li>

                            <li>
                                Acceso ilimitado a contenido en ellas.pa.
                            </li>

                            <li>
                                Acceso ilimitado al contenido de Mi Diario digital.
                            </li>

                            <li>
                                Foto de cortesía en Reseña, sujeta a disponibilidad.
                                (Beneficio solo aplica en plan de pago anual).
                            </li>
                            <li>
                                15% de descuento en clasificados, reseñas y esquelas. (Beneficio solo aplica en plan de
                                pago anual).
                            </li>
                            <li>
                                1 tarjeta digital para disfrutar de los beneficios del Club La Prensa.
                            </li>
                    </div>
                </div> <!-- END PRIMERA CARD PLANES PRINCIPALES -->

            </div> <!-- END FLEX PLANES PRINCIPALES -->



            <div class="content">
                <section class="link__plan-university">
                    <h3 class="title__second">
                        <span class="font__normal">
                            ¿Eres estudiante? Mira nuestro
                        </span>
                        <a href="">
                            Plan Digital Universitarios
                        </a>
                    </h3>
                </section>
            </div>



            <button id="button__other-planes" class="button_planes content">
                    Ver más planes
                <span class="material-symbols-outlined">
                    expand_more
                </span>
                <!-- <span class="material-symbols-outlined">
                            expand_less
                        </span> -->
            </button>

            <div id="others-plans" class="content close">

                <div class="container__others-plans ">


                    <div class="card__others-plans border__blue">


                        <div class="card__top">

                            <div class="div__title">
                                <h2 class="card__title"> Plan Benefactor </h2>
                            </div>


                            <div class="card_details">

                                <div class="div__card-price">

                                    <div>
                                        <h1 class="card__price--font">
                                            <span class="span__font">
                                                $
                                            </span>
                                            400
                                        </h1>
                                    </div>
                                    <h3 class="card__price"> Anual </h3>

                                    <div class="div__button">
                                        <button class="card__button">
                                            ELEGIR PLAN
                                        </button>
                                        <span class="button__card-text"> Puedes cancelar en cualquier momento </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card__bottom">
                            <ul class="card__info">

                                <li class="icon">
                                    Acceso ilimitado a web y a las apps de prensa.com para iPhone, iPad y Android.
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en martesfinanciero.com
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en ellas.pa
                                </li>

                                <li>
                                    Acceso ilimitado al contenido de Mi Diario digital
                                </li>

                                <li>
                                    15% de descuento en clasificados, reseñas y esquelas. (Beneficio solo aplica en plan
                                    de pago anual)
                                </li>

                                <li>
                                    1 tarjeta digital para disfrutar de los beneficios del Club La Prensa.
                                </li>
                        </div>
                    </div>


                    <div class="card__others-plans special__border">


                        <div class="card__top ">

                            <div class="div__title">
                                <h2 class="card__title"> Plan VIP </h2>
                            </div>


                            <div class="card_details">

                                <div class="div__card-price">

                                    <div>
                                        <h1 class="card__price--font">
                                            <span class="span__font">
                                                $
                                            </span>
                                            124
                                        </h1>
                                    </div>
                                    <h3 class="card__price"> Anual </h3>

                                    <div class="div__button">
                                        <button class="card__button">
                                            ELEGIR PLAN
                                        </button>
                                        <span class="button__card-text"> Puedes cancelar en cualquier momento </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card__bottom">
                            <ul class="card__info">

                                <li class="icon">
                                    Acceso ilimitado a web y a las apps de prensa.com para iPhone, iPad y Android.
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en martesfinanciero.com
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en ellas.pa
                                </li>

                                <li>
                                    Acceso ilimitado al contenido de Mi Diario digital
                                </li>

                                <li>
                                    15% de descuento en clasificados, reseñas y esquelas. (Beneficio solo aplica en plan
                                    de pago anual)
                                </li>

                                <li>
                                    1 tarjeta digital para disfrutar de los beneficios del Club La Prensa.
                                </li>
                        </div>
                    </div>


                    <div class="card__others-plans border__blue">


                        <div class="card__top">

                            <div class="div__title">
                                <h2 class="card__title"> Plan Dúo Anual </h2>
                            </div>


                            <div class="card_details">

                                <div class="div__card-price">

                                    <div>
                                        <h1 class="card__price--font">
                                            <span class="span__font">
                                                $
                                            </span>
                                            171
                                        </h1>
                                    </div>
                                    <h3 class="card__price"> Anual </h3>

                                    <div class="div__button">
                                        <button class="card__button">
                                            ELEGIR PLAN
                                        </button>
                                        <span class="button__card-text"> Puedes cancelar en cualquier momento </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card__bottom">
                            <ul class="card__info">

                                <li class="icon">
                                    Acceso ilimitado a web y a las apps de prensa.com para iPhone, iPad y Android.
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en martesfinanciero.com
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en ellas.pa
                                </li>

                                <li>
                                    Acceso ilimitado al contenido de Mi Diario digital
                                </li>

                                <li>
                                    15% de descuento en clasificados, reseñas y esquelas. (Beneficio solo aplica en plan
                                    de pago anual)
                                </li>

                                <li>
                                    1 tarjeta digital para disfrutar de los beneficios del Club La Prensa.
                                </li>
                        </div>
                    </div>


                    <div class="card__others-plans border__blue">


                        <div class="card__top">

                            <div class="div__title">
                                <h2 class="card__title"> Plan Semestral </h2>
                            </div>


                            <div class="card_details">

                                <div class="div__card-price">

                                    <div>
                                        <h1 class="card__price--font">
                                            <span class="span__font">
                                                $
                                            </span>
                                            55
                                        </h1>
                                    </div>
                                    <h3 class="card__price"> Anual </h3>

                                    <div class="div__button">
                                        <button class="card__button">
                                            ELEGIR PLAN
                                        </button>
                                        <span class="button__card-text"> Puedes cancelar en cualquier momento </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card__bottom">
                            <ul class="card__info">

                                <li class="icon">
                                    Acceso ilimitado a web y a las apps de prensa.com para iPhone, iPad y Android.
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en martesfinanciero.com
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en ellas.pa
                                </li>

                                <li>
                                    Acceso ilimitado al contenido de Mi Diario digital
                                </li>

                                <li>
                                    15% de descuento en clasificados, reseñas y esquelas. (Beneficio solo aplica en plan
                                    de pago anual)
                                </li>

                                <li>
                                    1 tarjeta digital para disfrutar de los beneficios del Club La Prensa.
                                </li>
                        </div>
                    </div>


                    <div class="card__others-plans border__blue">


                        <div class="card__top">

                            <div class="div__title">
                                <h2 class="card__title"> Plan Anual Días hábiles </h2>
                            </div>


                            <div class="card_details">

                                <div class="div__card-price">

                                    <div>
                                        <h1 class="card__price--font">
                                            <span class="span__font">
                                                $
                                            </span>
                                            70
                                        </h1>
                                    </div>
                                    <h3 class="card__price"> Anual </h3>

                                    <div class="div__button">
                                        <button class="card__button">
                                            ELEGIR PLAN
                                        </button>
                                        <span class="button__card-text"> Puedes cancelar en cualquier momento </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card__bottom">
                            <ul class="card__info">

                                <li class="icon">
                                    Acceso ilimitado a web y a las apps de prensa.com para iPhone, iPad y Android.
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en martesfinanciero.com
                                </li>

                                <li>
                                    Acceso ilimitado a contenido en ellas.pa
                                </li>

                                <li>
                                    Acceso ilimitado al contenido de Mi Diario digital
                                </li>

                                <li>
                                    15% de descuento en clasificados, reseñas y esquelas. (Beneficio solo aplica en plan
                                    de pago anual)
                                </li>

                                <li>
                                    1 tarjeta digital para disfrutar de los beneficios del Club La Prensa.
                                </li>
                        </div>
                    </div>



                </div> <!-- END GRID OTTHERS PLANS -->

            </div> <!-- END PLAN CONTAINER OTROS PLANES -->


            <!--  -->

            <div class="carousel content">

                <div class="container__carousel">

                    <button aria-label="Anterior" class="carousel__anterior">
                        <span class="material-symbols-outlined">
                            navigate_before
                        </span>
                    </button>

                    <div class="carousel__lista">

                        <div class="carousel__elemento">
                            <img src="<?php echo get_template_directory_uri()?>/assets/carrousel/suscribete.jpg" alt="">
                        </div>

                        <div class="carousel__elemento">
                            <img src="<?php echo get_template_directory_uri()?>/assets/carrousel/img1.jpg" alt="">
                        </div>
                        <div class="carousel__elemento">
                            <img src="<?php echo get_template_directory_uri()?>/assets/carrousel/img2.jpg" alt="">
                        </div>

                    </div>

                    <button aria-label="Anterior" class="carousel__siguiente">
                        <span class="material-symbols-outlined">
                            navigate_next
                        </span>
                    </button>


                </div>

                <div role="tablist" class="carousel__indicadores"></div>


            </div> <!-- END CONTAINER CAROUSEL -->


            <div class="container__benefits content">


                <h2 class="title__benefits">Beneficios de suscribirte a <span class="border__red"> La Prensa </span>
                </h2>

                <h3 class="subtitle__benefits">
                    Hazte socio y obtén estos beneficios así como descuentos y promociones en más de 100
                    comercios al ser parte del Club La Prensa*
                </h3>

                <div class="container__benefits-grid">

                    <div class="card__benefits">

                        <figure class="image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/beneficios_icons/exclusivo.png" alt="">
                        </figure>

                        <div class="card__benefits-description">
                            <h3 class="card__benefits-title">
                                <span class="border__red">Contenido</span> Exclusivo
                            </h3>
                            <p class="card__benefits-text">
                                Infórmate de las noticias más recientes con la inmediatez en la cobertura
                                local e internacional, respaldada por la credibilidad y experiencia periodística de La
                                Prensa.

                            </p>
                        </div>
                    </div>

                    <div class="card__benefits">

                        <figure class="image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/beneficios_icons/access-granted-01.png" alt="">
                        </figure>

                        <div class="card__benefits-description">
                            <h3 class="card__benefits-title">
                                <span class="border__red">Acceso</span> ilimitado
                            </h3>
                            <p class="card__benefits-text">
                                Disfruta de tu suscripción en cualquier momento y en cualquier lugar. Lee artículos de
                                La Prensa en computadoras de escritorio, dispositivos móviles
                                y el app móvil sin límite.
                            </p>
                        </div>
                    </div>

                    <div class="card__benefits">

                        <figure class="image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/beneficios_icons/noticias_edit.png" alt="">
                        </figure>

                        <div class="card__benefits-description">
                            <h3 class="card__benefits-title">
                                <span class="border__red">Titulares</span> por correo
                            </h3>
                            <p class="card__benefits-text">
                                Recibe diariamente los titulares de La Prensa con las noticias más relevantes directo en
                                tu e-mail.
                            </p>
                        </div>
                    </div>



                    <div class="card__benefits">

                        <figure class="image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/beneficios_icons/coment.png" alt="">
                        </figure>

                        <div class="card__benefits-description">
                            <h3 class="card__benefits-title">
                                <span class="border__red">Comentar</span> en las noticas
                            </h3>
                            <p class="card__benefits-text">
                                Únete a la conversación y comenta en las noticias y artículos. Puedes cambiar tu alias
                                desde la página de
                                perfil o en la caja de comentarios.
                            </p>
                        </div>
                    </div>


                    <div class="card__benefits">

                        <figure class="image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/beneficios_icons/club-card.svg" alt="">
                        </figure>

                        <div class="card__benefits-description">
                            <h3 class="card__benefits-title">
                                <span class="border__red">Club</span> La Prensa
                            </h3>
                            <p class="card__benefits-text">
                                Un programa ideado con el objetivo de crear nuevas experiencias para nuestros socios
                                quienes podrán disfrutar de
                                beneficios como descuentos, trato preferencial en comercios afiliados, eventos
                                culturales,
                                artísticos y de entretenimiento programados por el Club.
                                <b>*Beneficios pueden variar de acuerdo al plan seleccionado </b>
                            </p>
                        </div>
                    </div>


                    <div class="card__benefits">

                        <figure class="image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/beneficios_icons/circuito-coment.png" alt="">
                        </figure>

                        <div class="card__benefits-description">
                            <h3 class="card__benefits-title padding-border">
                                <span class="border__red">Circuito</span> de charlas
                            </h3>
                            <p class="card__benefits-text">
                                Conversaciones y análisis con especialistas sobre diferentes materias como actualidad
                                política,
                                economía y temas socioculturales.
                            </p>
                        </div>
                    </div>

                </div> <!-- END GRID BENEFICIOS -->

            </div> <!-- END CONTAINER BENEFICIOS -->




        </div> <!--  END CONTAINER  -->



        
    </main> <!--  END MAIN  -->
    
    <!-- --------------------- VIDEO DE YOUTUBE ------------------- -->
        
    <div class="section__video container">
            <section class="content">
                <h3 class="title__video">
                    Respalda el periodismo independiente
                </h3>
                <h4 class="subtitle__video">
                    En sus casi 40 años de vida La Prensa ha atravesado cinco cierres e innumerables ataques que incluyeron
                    persecución judicial, violencia, acoso y censura.
                </h4>
                    <pre>
                        <div class="video-responsive container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/idJvqANgFZo" title="Memorias de un cierre, que no se repita" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    <pre>
            </section>      
    </div>


<?php get_footer() ?>  