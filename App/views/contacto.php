<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">

    <!-- ASIGNACION DE ARCHIVO CSS (MINIFICADO) A ESTE HTML -->
    <?php echo vite_tags('src/js/contacto.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?= $_ENV['RUTA'] ?><?= $url ?>">

    <!-- Metadatos para Redes Sociales - Open Graph (Facebook, LinkedIn, etc) -->
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:url" content="<?= $_ENV['RUTA'] ?><?= $url ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= $_ENV['RUTA'] ?><?= $og_image ?>">
    <meta property="og:image:alt" content="<?= $og_image_alt ?>">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:locale" content="<?= $lang ?>_<?= strtoupper($lang) ?>">

    <!-- Metadatos para Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $meta_description ?>">
    <meta name="twitter:image" content="<?= $_ENV['RUTA'] ?><?= $og_image ?>">
    <meta name="twitter:url" content="<?= $_ENV['RUTA'] ?><?= $url ?>">

    <!-- Indexacion y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/metadatos_globales.php'
    ?>

</head>

<body>
    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/body_global.php'
    ?>


    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?> 

    <main>
        <section>
            
            <!-- artForm03 -->
            <article class="artForm03">
                <div>
                <div class="contenedor-form">
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                    <div id="modal_envio_ok" class="modal_envio_ok">
                    <div>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                        <p id="modal_envio_ok_msg" class="modal_envio_ok_msg">Gracias por tu email</p>
                        <button id="volver_al_formulario" class="boton">Volver al formulario</button>
                    </div>
                    </div>
                    <form id="idFormAjax">
                    <p class="error" id="errorForm03"></p>
                    <!--nombre-->
                    <input type="text" id="nombreAjax" name="nombre" placeholder="Nombre *" value="<?php if(isset($error)){echo $nombre;} ?>">

                    <!--telefono-->
                    <input type="tel" id="telefonoAjax" name="telefono" placeholder="Teléfono *" value="<?php if(isset($error)){echo $telefono;} ?>">

                    <!--email-->
                    <input type="text" id="emailAjax" name="email" placeholder="Email *" value="<?php if(isset($error)){echo $email;} ?>">

                    <!--mensaje-->
                    <textarea name="mensaje" id="mensajeAjax" placeholder="Mensaje *"><?php if(isset($error)){echo $mensaje;} ?></textarea>

                    <!--terminos-->
                    <div class="horizontal">
                        <label for="terminosAjax">Aceptar términos y condiciones de la privacidad *</label>
                        <input type="checkbox" name="terminos" id="terminosAjax">
                    </div>
                    
                    
                    <div class="horizontal">
                        <!--captcha-->
                        <span id="num1ajax"></span>
                        <span id="operadorajax"></span>
                        <span id="num2ajax"></span>
                        <span>=</span>
                        <input type="hidden" name="respSystem" id="respSystemajax" value="">
                        <input type="text" name="respUser" id="respuestaajax" placeholder="Resultado" autocomplete="off">
                    </div>
                    <input type="hidden" name="lang" value="<?= $lang ?>">
                    <input type="hidden" name="url" value="<?= $url ?>">
                    <input type="submit" value="Enviar" class="boton" id="btnEnviarAjax">
                    </form>
                    
                    <div class="moduloLoader01" id="moduloLoader01">
                    <!-- Loader 10 -->

                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                        <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform 
                            attributeName="transform" 
                            attributeType="XML" 
                            type="rotate"
                            dur="1s" 
                            from="0 50 50"
                            to="360 50 50" 
                            repeatCount="indefinite" />
                        </path>
                    </svg>
                    </div>
                </div>
                
                <div class="contenedor-info">
                    <h1>¿Hablamos?</h1>
                    <p>Si quieres contactar conmigo utiliza el formulario de al lado, en breve te responderé.</p>
                    <ul>
                    <li>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-address.svg" alt="">
                        <span>Zarautz (Gipuzkoa)</span>
                    </li>
                    <li>
                        <a href="mailto:soy@ainhoagomez.com" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                        <span>soy@ainhoagomez.com</span>
                        </a>
                    </li>
                    </ul>
                    <ul>
                        <li class="rrss">

                            <a href="https://www.linkedin.com/in/ainhoa-gomez-vallejo/" title="Visita mi LinkedIn" target="_blank">
                                <img src="http://localhost:3000/assets/img/system/logo-linkedin.svg" alt="Visita mi LinkedIn" title="Visita mi LinkedIn" width="30" height="30">
                            </a>

                        </li>
                    </ul>
                </div>
                </div>
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>


</html>
