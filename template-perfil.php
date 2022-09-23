<?php 
/* Template Name: Home*/
get_header();
?>

    
<main class="main">
        <div class="container">

            <div class="profile-container content">
                <div class="tabs">
                    <ul class="tabs__head">
                        <li class="tabs__toggle isActive">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                            <p>
                                Editar perfil
                            </p>
                        </li>
                        <li class="tabs__toggle">
                            <span class="material-symbols-outlined">
                                lock
                            </span>
                            <p>
                                Cambiar contraseña
                            </p>
                        </li>
                        <li class="tabs__toggle">
                            <span class="material-symbols-outlined">
                                history
                            </span>
                            <p>
                                Historial de compras
                            </p>
                        </li>
                        <li class="tabs__toggle">
                            <span class="material-symbols-outlined">
                                public
                            </span>
                            <p>
                                Redes conectadas
                            </p>
                        </li>
                        <li class="tabs__toggle">
                            <span class="material-symbols-outlined">
                                credit_card
                            </span>
                            <p>
                                Tarjeta socio
                            </p>
                        </li>
                    </ul>

                    <div class="tabs__body">
                        <div class="tabs__content isActive">
                            <h2 class="tabs__title"> Información del perfil </h2>

                            <div class="info__profile">
                                <section class="profile__data">
                                    <h3 class="profile__subtitle border__bottom">Datos personales</h3>

                                    <form class="form__info" action="">
                                        <!-- grupo email -->
                                        <div class="form__group">
                                            <label for="email" class="form__label">Email</label>
                                            <div class="form__group-input">
                                                <input type="email" class="form__input" name="email" id="email"
                                                    placeholder="correo@correo.com" autocomplete="off">
                                            </div>
                                        </div>
                                        
                                        <!-- grupo nombre -->
                                        <div class="form__group">
                                            <label for="nombre" class="form__label">Nombre</label>
                                            <div class="form__group-input">
                                                <input type="text" class="form__input" name="nombre" id="nombre"
                                                    placeholder="nombre" autocomplete="off">
                                            </div>
                                        </div>

                                        <!-- grupo apellido -->
                                        <div class="form__group">
                                            <label for="apellido" class="form__label">Apellido</label>
                                            <div class="form__group-input">
                                                <input type="text" class="form__input" name="apellido" id="apellido"
                                                    placeholder="apellido" autocomplete="off">
                                            </div>
                                        </div>

                                        <!-- grupo alias -->
                                        <div class="form__group">
                                            <label for="alias" class="form__label">Alias</label>
                                            <div class="form__group-input">
                                                <input type="text" class="form__input" name="alias" id="alias"
                                                    placeholder="alias" autocomplete="off">
                                            </div>
                                        </div>


                                        
                                        
                                    </section>
                                    
                                    <section class="profile__interest">
                                        <h3 class="profile__subtitle border__bottom">Intereses</h3>
                                        <div class="radios__interests">

                                                <input type="checkbox" name="plan" id="radio__prensa" class="radio__prensa" value="prensa">
                                                <label class="label__interests" for="radio__prensa">
                                                    <p class="title__interest">
                                                      Titulares diarios de La Prensa
                                                    </p>
                                                    <span class="radio__empty"></span>
                                                  
                    
                                                </label>

                                                <input type="checkbox" name="club" id="radio__club" class="radio__club" value="club">
                                                <label class="label__interests" for="radio__club">
                                                    <p class="title__interest">
                                                      Recibir promociones y descuentos
                                                    </p>
                                                    <span class="radio__empty"></span>
                                                  
                    
                                                </label>

                                                <input type="checkbox" name="ellas" id="radio__ellas" class="radio__ellas" value="ellas">
                                                <label class="label__interests" for="radio__ellas">
                                                    <p class="title__interest">
                                                      Newsletters de Ellas cada viernes
                                                    </p>
                                                    <span class="radio__empty"></span>
                                                  
                    
                                                </label>
                        
                                                <input type="checkbox" name="midiario" id="radio__midiario" class="radio__midiario" value="midiario">
                                                <label class="label__interests" for="radio__midiario">
                                                    <p class="title__interest">
                                                      Titulares diarios de Mi Diario
                                                    </p>
                                                    <span class="radio__empty"></span>
                                                   
                    
                                                </label>

                                                <input type="checkbox" name="tiketes" id="radio__tiketes" class="radio__tiketes" value="tiketes">
                                                <label class="label__interests" for="radio__tiketes">
                                                    <p class="title__interest">
                                                      Entérate de eventos
                                                    </p>
                                                    <span class="radio__empty"></span>
                                                 
                    
                                                </label>

                                                <input type="checkbox" name="tiendapa" id="radio__tiendapa" class="radio__tiendapa" value="tiendapa">
                                                <label class="label__interests" for="radio__tiendapa">
                                                    <p class="title__interest">
                                                      Ofertas de artículos y servicios
                                                    </p>
                                                    <span class="radio__empty"></span>
                                                  
                                                </label>

                                                <input type="checkbox" name="covid" id="radio__covid" class="radio__covid" value="covid">
                                                <label class="label__interests" for="radio__covid">
                                                    <p class="title__interest">
                                                      Reporte semanal covid
                                                    </p>
                                                    <span class="radio__empty"></span>
                                                  
                    
                                                </label>
                                    
                                        </div>
                                    </section>

                                    <!-- grupo Button aceptar -->
                                    <div class="grid__button">
                                        <div>
                                            <buttom class="button__info ">
                                                Actualizar
                                            </buttom>
                                        </div>
    
                                        <!-- grupo Button cancelar -->
                                        <div>
                                            <buttom class="button__cancel">
                                                Cancelar
                                            </buttom>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>















                        <div class="tabs__content">
                            <h2 class="tabs__title"> Cambiar contraseña </h2>
                            <p class="tabs__text">
                                2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi totam quod officia
                                dolorem eligendi reiciendis in ut iusto dignissimos distinctio?
                            </p>
                        </div>
                        <div class="tabs__content">
                            <h2 class="tabs__title"> Historial de compras </h2>
                            <p class="tabs__text">
                                3 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi totam quod officia
                                dolorem eligendi reiciendis in ut iusto dignissimos distinctio?
                            </p>
                        </div>
                        <div class="tabs__content">
                            <h2 class="tabs__title"> Redes conectadas </h2>
                            <p class="tabs__text">
                                4 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi totam quod officia
                                dolorem eligendi reiciendis in ut iusto dignissimos distinctio?
                            </p>
                        </div>
                        <div class="tabs__content">
                            <h2 class="tabs__title"> Tarjeta socio </h2>
                            <p class="tabs__text">
                                5 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi totam quod officia
                                dolorem eligendi reiciendis in ut iusto dignissimos distinctio?
                            </p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </main>

<?php get_footer(); ?>