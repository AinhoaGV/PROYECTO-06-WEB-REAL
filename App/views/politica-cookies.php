<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/terminos.js'); ?>

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
        <h1><?= $hero_h1 ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logo-agv.svg" alt="<?= $hero_logo_alt ?>" title="<?= $hero_logo_title ?>">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es" class="boton" title="<?= $hero_cta_title ?>"><?= $hero_cta_text ?></a>
    </header>

    <?php
    $razonSocial = $razon_social;
    $correo = $correo_contacto;
    $cif = $cif_legal;
    $telefono = $telefono_contacto;
    $direccion = $direccion_legal;
    ?>

    <main>

        <section>
            <div class="hito" id="cookiesZona"></div>
            <h2><?= $cookies_h2 ?></h2>

            <article id="que-son-cookies">
                <h3><?= $cookies_que_h3 ?></h3>
                <p><?= $cookies_que_p ?></p>
            </article>

            <article id="cookies-utilizadas">
                <h3><?= $cookies_utilizadas_h3 ?></h3>
                <ul>
                    <li><strong><?= $cookies_tecnicas_lbl ?></strong> <?= $cookies_tecnicas_txt ?></li>
                    <li><strong><?= $cookies_personalizacion_lbl ?></strong> <?= $cookies_personalizacion_txt ?></li>
                    <li><strong><?= $cookies_analisis_lbl ?></strong> <?= $cookies_analisis_txt_1 ?> <a href="#config-cookies"><?= $cookies_analisis_panel_link ?></a> <?= $cookies_analisis_txt_2 ?></li>
                </ul>
            </article>

            <article id="base-juridica-cookies">
                <h3><?= $cookies_base_h3 ?></h3>
                <p><?= $cookies_base_p_1 ?> <a href="#config-cookies" id="configurarCookies"><?= $cookies_base_link ?></a>, <?= $cookies_base_p_2 ?> <em><?= $cookies_base_aceptar ?></em> <?= $cookies_base_y ?> <em><?= $cookies_base_rechazar ?></em> <?= $cookies_base_p_3 ?></p>
            </article>

            <article id="transferencias-internacionales-cookies">
                <h3><?= $cookies_transferencias_h3 ?></h3>
                <p><?= $cookies_transferencias_p_1 ?> <em><?= $cookies_transferencias_framework ?></em> <?= $cookies_transferencias_p_2 ?></p>
            </article>

            <article id="gestionar-cookies-navegador">
                <h3><?= $cookies_navegador_h3 ?></h3>
                <p><?= $cookies_navegador_p ?></p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener"><?= $cookies_nav_chrome ?></a></li>
                    <li><a href="https://support.mozilla.org/kb/borrar-cookies" target="_blank" rel="noopener"><?= $cookies_nav_firefox ?></a></li>
                    <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener"><?= $cookies_nav_safari ?></a></li>
                    <li><a href="https://support.microsoft.com/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="noopener"><?= $cookies_nav_edge ?></a></li>
                </ul>
                <p><?= $cookies_navegador_p2 ?></p>
            </article>

            <article id="config-cookies">
                <h3><?= $cookies_config_h3 ?></h3>
                <p><?= $cookies_config_p ?></p>
                <div class="cookies-preferences-container" aria-live="polite"></div>
            </article>

            <article id="actualizaciones-cookies">
                <h3><?= $cookies_actualizaciones_h3 ?></h3>
                <p><?= sprintf($cookies_actualizaciones_p, $razonSocial) ?></p>
            </article>
        </section>

    </main>

    <?php include $appRoot . '/includes/footer.php' ?>
</body>
</html>
