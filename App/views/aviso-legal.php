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
            <div class="hito" id="legalZona"></div>
            <h2><?= $legal_h2 ?></h2>

            <article id="identificacion-titular">
                <h3><?= $identificacion_h3 ?></h3>
                <p><?= $identificacion_p ?></p>
                <ul>
                    <li><strong><?= $lbl_razon_social ?></strong> <?= $razonSocial ?></li>
                    <li><strong><?= $lbl_cif ?></strong> <?= $cif ?></li>
                    <li><strong><?= $lbl_domicilio ?></strong> <?= $direccion ?></li>
                    <li><strong><?= $lbl_correo ?></strong> <a href="mailto:<?= $correo ?>"><?= $correo ?></a></li>
                    <li><strong><?= $lbl_telefono ?></strong> <?= $telefono ?></li>
                </ul>
            </article>

            <article id="objeto-sitio">
                <h3><?= $objeto_h3 ?></h3>
                <p><?= sprintf($objeto_p, $razonSocial) ?></p>
            </article>

            <article id="condiciones-uso">
                <h3><?= $condiciones_h3 ?></h3>
                <p><?= sprintf($condiciones_p, $razonSocial) ?></p>
            </article>

            <article id="responsabilidad">
                <h3><?= $responsabilidad_h3 ?></h3>
                <p><?= sprintf($responsabilidad_p, $razonSocial) ?></p>
            </article>

            <article id="propiedad-intelectual">
                <h3><?= $propiedad_h3 ?></h3>
                <p><?= sprintf($propiedad_p, $razonSocial) ?></p>
            </article>

            <article id="enlaces-terceros">
                <h3><?= $enlaces_h3 ?></h3>
                <p><?= sprintf($enlaces_p, $razonSocial) ?></p>
            </article>

            <article id="ley-y-jurisdiccion">
                <h3><?= $jurisdiccion_h3 ?></h3>
                <p><?= $jurisdiccion_p ?></p>
            </article>
        </section>
    </main>

    <?php include $appRoot . '/includes/footer.php' ?>
</body>
</html>
