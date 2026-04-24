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
            <div class="hito" id="privacidadZona"></div>
            <h2><?= $privacidad_h2 ?></h2>

            <article id="responsable-tratamiento">
                <h3><?= $priv_responsable_h3 ?></h3>
                <p><strong><?= $razonSocial ?></strong> (<?= $cif ?>), <?= $direccion ?>. <?= $lbl_correo ?> <a href="mailto:<?= $correo ?>"><?= $correo ?></a>.</p>
            </article>

            <article id="datos-procedencia">
                <h3><?= $priv_datos_h3 ?></h3>
                <p><?= $priv_datos_p_1 ?> <a href="#cookiesZona"><?= $priv_datos_link_cookies ?></a> <?= $priv_datos_p_2 ?></p>
            </article>

            <article id="finalidades-tratamiento">
                <h3><?= $priv_finalidades_h3 ?></h3>
                <ul>
                    <li><strong><?= $priv_fin_1_lbl ?></strong> <?= $priv_fin_1_txt ?></li>
                    <li><strong><?= $priv_fin_2_lbl ?></strong> <?= $priv_fin_2_txt ?></li>
                    <li><strong><?= $priv_fin_3_lbl ?></strong> <?= $priv_fin_3_txt ?></li>
                    <li><strong><?= $priv_fin_4_lbl ?></strong> <?= $priv_fin_4_txt ?></li>
                    <li><strong><?= $priv_fin_5_lbl ?></strong> <?= $priv_fin_5_txt ?></li>
                    <li><strong><?= $priv_fin_6_lbl ?></strong> <?= $priv_fin_6_txt ?></li>
                </ul>
            </article>

            <article id="bases-juridicas">
                <h3><?= $priv_base_h3 ?></h3>
                <ul>
                    <li><strong><?= $priv_base_1_lbl ?></strong> <?= $priv_base_1_txt ?></li>
                    <li><strong><?= $priv_base_2_lbl ?></strong> <?= $priv_base_2_txt ?></li>
                    <li><strong><?= $priv_base_3_lbl ?></strong> <?= $priv_base_3_txt ?></li>
                    <li><strong><?= $priv_base_4_lbl ?></strong> <?= $priv_base_4_txt ?></li>
                </ul>
            </article>

            <article id="plazos-conservacion">
                <h3><?= $priv_plazos_h3 ?></h3>
                <ul>
                    <li><strong><?= $priv_plazos_1_lbl ?></strong> <?= $priv_plazos_1_txt ?></li>
                    <li><strong><?= $priv_plazos_2_lbl ?></strong> <?= $priv_plazos_2_txt ?></li>
                    <li><strong><?= $priv_plazos_3_lbl ?></strong> <?= $priv_plazos_3_txt ?></li>
                    <li><strong><?= $priv_plazos_4_lbl ?></strong> <?= $priv_plazos_4_txt ?></li>
                </ul>
            </article>

            <article id="destinatarios">
                <h3><?= $priv_destinatarios_h3 ?></h3>
                <p><?= $priv_destinatarios_p ?></p>
            </article>

            <article id="transferencias-internacionales">
                <h3><?= $priv_transferencias_h3 ?></h3>
                <p><?= $priv_transferencias_p ?></p>
            </article>

            <article id="derechos-personas">
                <h3><?= $priv_derechos_h3 ?></h3>
                <p><?= $priv_derechos_p_1 ?> <a href="mailto:<?= $correo ?>"><?= $correo ?></a>. <?= $priv_derechos_p_2 ?> <a href="https://www.aepd.es" target="_blank" rel="noopener">www.aepd.es</a>.</p>
            </article>

            <article id="menores">
                <h3><?= $priv_menores_h3 ?></h3>
                <p><?= $priv_menores_p ?></p>
            </article>

            <article id="decisiones-automatizadas">
                <h3><?= $priv_decisiones_h3 ?></h3>
                <p><?= $priv_decisiones_p ?></p>
            </article>

            <article id="seguridad">
                <h3><?= $priv_seguridad_h3 ?></h3>
                <p><?= $priv_seguridad_p ?></p>
            </article>

            <article id="actualizaciones-privacidad">
                <h3><?= $priv_actualizaciones_h3 ?></h3>
                <p><?= $priv_actualizaciones_p ?></p>
            </article>
        </section>
    </main>

    <?php include $appRoot . '/includes/footer.php' ?>
</body>
</html>
