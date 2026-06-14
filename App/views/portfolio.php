<!DOCTYPE html>
<html lang="<?= $lang ?>">
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
        <h1><?= $header_title ?></h1>
        <div>            
            <img src="<?= $_ENV['RUTA'] ?><?= $header_logo_src ?>" alt="<?= $header_logo_alt ?>">
        </div>
    </header>

    <main>
        <section>

            <article class="art02">
                <div class="textos">
                    <h2><?= $section_title ?></h2>
                    <p><?= $section_paragraph ?></p>
                </div>
            </article>
        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $pilares_title ?></h2>
            </div>

            <article class="art01" id="hitoBranding">
                <img src="<?= $_ENV['RUTA'] ?><?= $project1_img_src ?>" alt="<?= $project1_img_alt ?>" title="<?= $project1_img_title ?>">
                <div>
                    <h3><?= $project1_heading ?></h3>
                    <p><?= $project1_paragraph ?></p>
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_branding ?>" class="moduloBoton02">
                        <span><?= $project1_cta ?></span>
                        <img src="<?= $_ENV['RUTA'] ?><?= $arrow_icon_src ?>" alt="<?= $arrow_icon_alt ?>" title="<?= $arrow_icon_title ?>">
                    </a>
                </div>
            </article>

            <article class="art01 invert" id="hitoDesign">
                <img src="<?= $_ENV['RUTA'] ?><?= $project2_img_src ?>" alt="<?= $project2_img_alt ?>" title="<?= $project2_img_title ?>">
                <div>
                    <h3><?= $project2_heading ?></h3>
                    <p><?= $project2_paragraph ?></p>
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_design ?>" class="moduloBoton02">
                        <span><?= $project2_cta ?></span>
                        <img src="<?= $_ENV['RUTA'] ?><?= $arrow_icon_src ?>" alt="<?= $arrow_icon_alt ?>" title="<?= $arrow_icon_title ?>">
                    </a>
                </div>
            </article>

            <article class="art01" id="hitoTorrijas">
                <img src="<?= $_ENV['RUTA'] ?><?= $project3_img_src ?>" alt="<?= $project3_img_alt ?>" title="<?= $project3_img_title ?>">
                <div>
                    <h3><?= $project3_heading ?></h3>
                    <p><?= $project3_paragraph ?></p>
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_desarrollo ?>" class="moduloBoton02">
                        <span><?= $project3_cta ?></span>
                        <img src="<?= $_ENV['RUTA'] ?><?= $arrow_icon_src ?>" alt="<?= $arrow_icon_alt ?>" title="<?= $arrow_icon_title ?>">
                    </a>
                </div>
            </article>

        </section>

    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
