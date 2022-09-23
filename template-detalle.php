<?php 
/* Template Name: Detalle */
get_header();
?>

    
<main class="main">
        <div class="container content">

            <div class="grid-container">
                <section class="title_form line__bottom">

                    <h1 class="title"> Plan seleccionado </h1>
                    <h2>Experiencia Digital</h2>

                </section>

                <section class="form_plan">
                    <div class="radios__plan">
                        <input type="radio" name="plan" id="ratio__plan-month" class="radio__plan" value="month"
                            checked="checked">
                        <label class="label__form" for="ratio__plan-month">
                            <p class="title__plan">
                                <span class="font__small">$</span><span class="size__number">1</span> Primer mes <span
                                    class="font__gray"> Luego $5</span> <br>
                                <span class="label__cancel"> Puedes cancelar en cualquier momento </span>
                            </p>

                        </label>

                        <input type="radio" name="plan" id="ratio__plan-year" class="radio__plan" value="year">
                        <label class="label__form" for="ratio__plan-year">
                            <p class="title__plan">
                                <span class="font__small">$</span><span class="size__number">50</span> Anual <del
                                    class="font__gray">$60 Anual </del> <br>
                                <span class="label__cancel"> Puedes cancelar en cualquier momento </span>
                            </p>
                        </label>
                    </div>

                    <div class="radio_gift">
                        <input id="ratio__plan-gift" class="radio__gift" type="checkbox" value="gift" name="gift">
                        <label class="label__form" for="ratio__plan-gift">
                            <div class="div__gift">
                                <div class="img__gift">
                                <img src="<?php echo get_template_directory_uri()?>/assets/gift-png.png" class="gift" alt="">
                                </div>
                                <div class="border_left">
                                    <p class="title__plan">
                                        <span class="title__gift"> Enviar como regalo </span>
                                    <h3>Marca esta casilla si quieres regalar esta suscrición a alguien más.
                                        Deberás colocar el correo de esa persona en el campo beneficiario.
                                    </h3>
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="personal__info padding__border">
                        <h2 class="title__form">Información personal</h2>
                        <form class="form__info" action="">
                            <!-- grupo email -->
                            <div class="form__group span__grid">
                                <label for="email" class="form__label">Email</label>
                                <div class="form__group-input">
                                    <input type="email" class="form__input" name="email" id="email" placeholder="correo@correo.com"
                                        autocomplete="off">
                                </div>
                            </div>

                            <!-- grupo contraseña -->
                            <div class="form__group">
                                <label for="password" class="form__label">Contraseña</label>
                                <div class="form__group-input">
                                    <input type="password" class="form__input"  id="password" name="password">
                                </div>
                            </div>

                            <!-- grupo contraseña 2 -->
                            <div class="form__group">
                                <label for="password2" class="form__label">Confirmar contraseña</label>
                                <div class="form__group-input">
                                    <input type="password" class="form__input" name="password2" id="password2">
                                </div>
                            </div>

                            <!-- grupo nombre -->
                            <div class="form__group">
                                <label for="nombre" class="form__label">Nombre</label>
                                <div class="form__group-input">
                                    <input type="text" class="form__input" name="nombre"  id="nombre" placeholder="nombre"
                                        autocomplete="off">
                                </div>
                            </div>

                            <!-- grupo apellido -->
                            <div class="form__group">
                                <label for="apellido" class="form__label">Apellido</label>
                                <div class="form__group-input">
                                    <input type="text" class="form__input" name="apellido" id="apellido"  placeholder="apellido"
                                        autocomplete="off">
                                </div>
                            </div>

                            <!-- Beneficiario -->

                            <div class="form__benefits span__grid">
                                <div>
                                    <label for="email__benefits" class="form__label">Email del beneficiario</label>
                                    <div class="form__group-input">
                                        <input type="email__benefits" class="form__input" name="email__benefits" id="email__benefits" placeholder="correo@correo.com"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div>
                                    <label for="msj__benefits" class="form__label">Agregar mensaje</label>
                                    <div class="form__group-input">
                                            <textarea
                                                class="form__input form__textarea"
                                                name= "msj__benefits"
                                                id="msj__benefits"
                                                placeholder= "Mensaje al beneficiario"
                                            ></textarea>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </section>


                <aside class="sidebar">
                    <div class="card__top-detalle">
                        <img class="img__plan-detalle" src="<?php echo get_template_directory_uri()?>/assets/img_planes/plan_digital.png" alt="">
                    </div>

                    <div class="card__bottom-detalle">
                        <ul class="card__info-detalle">

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
                </aside>


                <div class="payment padding__border">
                    <div class="header__payment">
                        <div>
                            <h2 class="title__form">
                                Detalle de pago
                            </h2>
                        </div>

                        <div class="payment__cardicons">
                            <img src="<?php echo get_template_directory_uri()?>/assets/pay_cards/visa.svg" alt="">
                            <img src="<?php echo get_template_directory_uri()?>/assets/pay_cards/master-card.svg" alt="">
                            <img src="<?php echo get_template_directory_uri()?>/assets/pay_cards/american-express.svg" alt="">        
                        </div>
                    </div>

                    <form class="form__info" action="">
                        <!-- grupo numero de tarjeta -->
                        <div class="form__group span__grid">
                            <div class="form__group-input">
                                <label for="number-card" class="form__label">Número de la tarjeta</label>
                                <input type="text" class="form__input" name="number-card" id="number-card"
                                    placeholder="número de la tarjeta" autocomplete="off">
                            </div>
                        </div>

                        <!-- grupo fecha de expiracion -->
                        <div class="form__group">
                            <div class="form__group-input">
                                <label for="date-exp" class="form__label">Fecha de expiración </label>
                                <input type="text" class="form__input" id="date-exp" name="date-exp" placeholder="MM/AA"
                                    autocomplete="off">
                            </div>
                        </div>

                        <!-- grupo CVC -->
                        <div class="form__group">
                            <div class="form__group-input">
                                <label for="cvc-card" class="form__label">cvc</label>
                                <input type="text" class="form__input" id="cvc-card" placeholder="CVC"
                                    autocomplete="off">
                            </div>
                        </div>

                         <!-- grupo terminos y condiciones -->
                         <div class="span__grid form__term">
                            <p>
                                Nuevas compras de suscripción impresa quedan sujetas a verificación del área de cobertura.
                            </p>
                           <p style="padding-top: 0.5em;">
                                Al suscribirte, aceptas los <b> Términos y Condiciones. </b>Tu suscripción se renovará automáticamente y se te cobrará por adelantado. Puedes cancelar en cualquier momento. La cancelación entra en vigencia al comienzo del siguiente ciclo de facturación.
                           </p>
                        </div>
                        
                        <!-- grupo Button -->
                        <div class="span__grid form__term">                               
                                <buttom class="button__payment">
                                    CONTINUAR CON EL PAGO
                                </buttom> 

                                <div class="info__ssl">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/ssl-logo.png" alt="">
                                        <p> Esta transacción está protegida por cifrado SSL.</p>
                                    </div>
                        </div>

                    </form>

                </div>


                <section class="orden">
                    <hr>
                    <h2 class="title__order"> ORDEN </h2>
                    <hr>
                    <aside class="details__order">
                        <p class="item__order">
                        <h2 class="subtitle__order"> Nombre </h2>
                        <span class="descripction__order"> Plan Experiencia Digital. </span>
                        </p>
                        <p class="item__order">
                        <h2 class="subtitle__order"> Descripción </h2>
                        <span class="descripction__order">
                            Acceso ilimitado a web y apps de La Prensa, Mi Diario, Ellas, Martes Financiero. Incluye 1
                            tarjeta digital del Club La Prensa.
                        </span>
                        </p>
                        <p class="item__order">
                        <h2 class="subtitle__order"> Frecuencia </h2>
                        <span class="descripction__order"> Mensual. </span>
                        </p>
                        <p class="item__order">
                        <h2 class="subtitle__order"> Precio </h2>
                        <span class="descripction__order"> 1$ </span>
                        </p>
                    </aside>


                </section>
            </div>

        </div>
    </main>


<?php get_footer(); ?>