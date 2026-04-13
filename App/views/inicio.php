<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/inicio.js'); ?>

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
    <meta name="twitter:url" content="<?= $_ENV['RUTA'] ?><?= $url ?>"

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

    <!-- HERO01 -->
    <header>
        <h1>Ainhoa Gómez Vallejo<br>Front-End Developer & Diseñadora UX/UI</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logo-agv.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?><?= $ruta_contacto ?>" class="boton"><?= $hero_cta ?></a>
    </header>

    <main>

        <!-- Sección 01 -->
        <section class="sect01">
            <!-- <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la sect01</h2>
            </div> -->
            <article>
                <!-- hijo 1 -->
                <div>
                    <h2 class="title">Donde el diseño funcional se encuentra con el código limpio</h2>
                    <p>Busco el equilibrio perfecto entre estética y funcionalidad. Mis proyectos no solo son atractivos, sino que sino que también son prácticos. Diseño interfaces que guían al usuario de forma intuitiva, asegurando que cada interacción sea la más lógica y fluida.</p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-design.svg" alt="">
                            <h3 class="card-title">UI y Prototipado de alta fidelidad</h3>
                            <p>Me gusta trabajar en los proyectos en los que antes de desarrollar, defino la experiencia visual. Creo prototipos que permiten validar la navegación y el diseño final. Esto garantiza el correcto planteamiento del producto final.</p>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-layout.svg" alt="">
                            <h3 class="card-title">Maquetación avanzada y Desarrollo Frontend</h3>
                            <p>Traduzco estos diseños complejos a código limpio. Utilizo estándares modernos para asegurar que la web sea rápida, accesible y fácil de mantener. Mi enfoque en el frontend ayuda a una mejor experiencia de usuario.</p>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_sobre_mi ?>" class="moduloBoton02">
                        <span>Más sobre mi</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="https://dummyimage.com/1000x1500" alt="">
                </div>
            </article>
        </section>

        <section>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h2 class="title">Selección de proyectos destacados</h2>                  
                    <p>A lo largo de mi trayectoria, he desarrollado soluciones para diversos sectores, desde e-commerce hasta sitios corporativos. Aquí presento una muestra de trabajos donde he liderado tanto la fase creativa como la implementación técnica, demostrando versatilidad y capacidad de adaptación a diferentes necesidades y lenguajes de programación.</p>
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_portfolio ?>" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a Nuestros productos" title="Más información">
                    </a>
                </div>

                <div class="imagenes">                    
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_branding ?>" title="Identidad Visual y Branding corporativo">
                        <img src="https://dummyimage.com/1500x900" alt="Identidad Visual y Branding corporativo" title="Identidad Visual y Branding corporativo">
                        <h3 class="title">Identidad Visual y Branding corporativo</h3>
                    </a>
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_design ?>" title="Diseño de interfaces centradas en el usuario">
                        <img src="https://dummyimage.com/1500x900" alt="Diseño de interfaces centradas en el usuario" title="Diseño de interfaces centradas en el usuario">
                        <h3 class="title">Diseño de interfaces centradas en el usuario</h3>
                    </a>
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_desarrollo ?>" title="Desarrollo a medida y ecosistemas CMS">
                        <img src="https://dummyimage.com/1500x900" alt="Desarrollo a medida y ecosistemas CMS" title="Desarrollo a medida y ecosistemas CMS">
                        <h3 class="title">Desarrollo a medida y ecosistemas CMS</h3>
                    </a>                    
                </div>
            </article>


            <!-- artículo 4 -->
            <article class="art04">
                <h2>Opiniones: La experiencia de trabajar conmigo</h2>
                <p>La confianza de mis compañeros es mi mejor carta de presentación. Tras años de proyectos, he cultivado relaciones profesionales basadas en la transparencia, el cumplimiento de plazos y la calidad técnica. Estas reseñas reflejan mi capacidad para integrarme en equipos multidisciplinares y aportar valor real desde el primer día.</p>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h3 class="ficha-title">E.E.A<br>Desarrolladora Web</h3>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/avatar-01.png" alt="" title="">                        
                        <p>"Ainhoa es una diseñadora gráfica y desarrolladora web todo-terreno...Es una gran profesional, responsable, proactiva con una gran iniciativa.."</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h3 class="ficha-title">J.M.V.<br>Gestor de proyectos</h3>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/avatar-02.png" alt="" title="">                        
                        <p>"Ainhoa siempre ha demostrado ser una persona honesta, trabajadora y en la que se puede confiar totalmente...con grandes cualidades para su trabajo..."</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h3 class="ficha-title">N.M.L.<br>Frontend Developer</h3>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/avatar-03.png" alt="" title="">                        
                        <p>"Ainhoa es una persona multidisciplinar con un excelente gusto estético, lo que potencia su habilidad en el ámbito del diseño gráfico.."</p>
                        <span class="ralla"></span>
                    </div>

                </div>
            </article>            
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>

</body>
</html>
