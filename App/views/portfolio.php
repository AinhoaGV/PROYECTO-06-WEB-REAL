<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/portfolio.js'); ?>

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

    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php include $appRoot . '/includes/metadatos_globales.php' ?>

</head>
<body>

    <?php include $appRoot . '/includes/body_global.php' ?>

    <?php include $appRoot . '/includes/nav.php' ?>

    <header>        
        <h1>Casos de éxito y soluciones digitales</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logo-agv.svg" alt="">
        </div>
    </header>

    <main>
        <section>

            <article class="art02">
                <div class="textos">
                    <h2>Mi trabajo: del concepto visual al código final</h2>
                    <p>En esta sección puedes ver una selección de los proyectos en los que he trabajado últimamente. Mi forma de trabajar es sencilla: me gusta cuidar tanto la imagen como la parte técnica para que el resultado sea equilibrado.</p>
                </div>
            </article>
        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Mis tres pilares</h2>
            </div>

            <article class="art01" id="hitoBranding">
                <img src="https://dummyimage.com/900x900" alt="Identidad y Branding" title="Identidad y Branding">
                <div>
                    <h3>Identidad y Branding: Construyendo marcas sólidas</h3>
                    <p>El branding digital va más allá de un logo bonito. He trabajado en la creación de marcas que nacen preparadas para el entorno web, cuidando la legibilidad y el impacto visual, facilitando que el usuario identifique y recuerde la marca.</p>
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_branding ?>" class="moduloBoton02">
                        <span>Más sobre Branding</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <article class="art01 invert" id="hitoDesign">
                <img src="https://dummyimage.com/900x900" alt="Diseño UX/UI" title="Diseño UX/UI">
                <div>
                    <h3>Diseño UX/UI: Experiencias de usuario optimizadas</h3>
                    <p>Diseño pantallas que no solo son estéticas, sino que responden a un análisis previo, logrando que la experiencia de uso sea gratificante.<br>
                    Propongo soluciones y prototipos de alta fidelidad basados en buenas prácticas de UX, transformando sitios complejos en plataformas fáciles de navegar.</p>
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_design ?>" class="moduloBoton02">
                        <span>Más sobre Diseño</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <article class="art01" id="hitoTorrijas">
                <img src="https://dummyimage.com/900x900" alt="Desarrollo web" title="Desarrollo web">
                <div>
                    <h3>Desarrollo Web: Rendimiento y escalabilidad</h3>
                    <p>Junto a mi equipo construyo sitios web preparados para crecer. Intento mantener un código organizado, modular y fácil de escalar por otros desarrolladores si fuera necesario.</p>
                    <a href="<?=$_ENV['RUTA']?><?= $ruta_desarrollo ?>" class="moduloBoton02">
                        <span>Más sobre Desarrollo Web</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

        </section>


    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
