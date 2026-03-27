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
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton"><?= $hero_cta ?></a>
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
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h3 class="card-title">UI y Prototipado de alta fidelidad</h3>
                            <p>Me gusta trabajar en los proyectos en los que antes de desarrollar, defino la experiencia visual. Creo prototipos que permiten validar la navegación y el diseño final. Esto garantiza el correcto planteamiento del producto final.</p>
                        </div>
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h3 class="card-title">Maquetación avanzada y Desarrollo Frontend</h3>
                            <p>Traduzco estos diseños complejos a código limpio. Utilizo estándares modernos para asegurar que la web sea rápida, accesible y fácil de mantener. Mi enfoque en el frontend ayuda a una mejor experiencia de usuario.</p>
                        </div>
                    </div>
                    <a href="" class="moduloBoton02">
                        <span>Contacta con nosotros</span>
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
                    <h3 class="title">La mejor calidad en productos realizados cada día</h3>                  
                    <p>Nuestra carta de productos se actualiza cada estación, pero se fundamenta en tres pilares que definen nuestra identidad. En primer lugar, el <b>pan de masa madre</b> que fermenta durante 24 horas, desarrollando una corteza crujiente y un alveolado irregular lleno de sabor y nutrientes: es el favorito de quienes nos buscan como “<b>panadería en Aginaga</b>” o “<b>pan masa madre en Usurbil</b>”. En segundo lugar, nuestros <b>pasteles artesanos</b>, elaborados con mantequilla y huevos de caserío, sin aromas artificiales, con rellenos de temporada como crema de avellana de Navarra o compota de manzana reineta. Finalmente, las <b>torrijas</b>, inspiradas en la receta de la amona pero disponibles todo el año; las servimos con miel de azahar o con un delicado almíbar de vainilla bourbon que las hace inolvidables. Cada producto cuenta con su propio proceso cuidadoso, fichas de alérgenos actualizadas y la posibilidad de <b>reserva online</b> para que llegues y lo tengas listo. Además, nuestras famosas <b>torrijas de Aginaga</b> pueden reservarse en línea para cualquier celebración, destacando nuestra <b>panadería en Aginaga</b> como la opción preferida para un dulce tradicional.</p>
                    <a href="./productos-panaderia.php" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a Nuestros productos" title="Más información">
                    </a>
                </div>

                <div class="imagenes">                    
                    <a href="<?=$_ENV['RUTA'];?>/es/productos" title="Los mejores panes de masa madre">
                        <img src="https://dummyimage.com/1500x900" alt="Pan de masa madre en Usurbil y Aginaga" title="Pan de masa madre en Usurbil y Aginaga">
                        <h4 class="title">Branding</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA'];?>/es/productos" title="Pastelería artesana bajo demanda">
                        <img src="https://dummyimage.com/1500x900" alt="Pasteles artesanos: del obrador a tu mesa" title="Pasteles artesanos: del obrador a tu mesa">
                        <h4 class="title">Diseño UX/UI</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA'];?>/es/productos" title="Torrijas tradicionales a fuego lento">
                        <img src="https://dummyimage.com/1500x900" alt="Torrijas tradicionales todo el año" title="Torrijas tradicionales todo el año">
                        <h4 class="title">Desarrollo Web</h4>
                    </a>                    
                </div>
            </article>


            <!-- artículo 4 -->
            <article class="art04">
                <h2>Opiniones: La experiencia de trabajar conmigo</h2>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4>E.E.A - Desarrolladora Web</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/avatar-01.png" alt="" title="">                        
                        <p>Ainhoa es una diseñadora gráfica y desarrolladora web todo-terreno...Es una gran profesional, responsable, proactiva con una gran iniciativa..</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>J.M.V. - Gestor de proyectos</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/avatar-02.png" alt="" title="">                        
                        <p>“Ainhoa siempre ha demostrado ser una persona honesta, trabajadora y en la que se puede confiar totalmente...con grandes cualidades para su trabajo...</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>N.M.L. - Frontend Developer</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/avatar-03.png" alt="" title="">                        
                        <p>Ainhoa es una persona multidisciplinar con un excelente gusto estético, lo que potencia su habilidad en el ámbito del diseño gráfico..</p>
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
