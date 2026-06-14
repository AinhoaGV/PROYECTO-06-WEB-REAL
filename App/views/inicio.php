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

    <!-- HERO01 -->
    <header>
        <h1><?= $header_title_line1 ?><br><?= $header_title_line2 ?></h1>
        <div>
            <img src="<?= $_ENV['RUTA'] ?><?= $header_logo_src ?>" alt="<?= $header_logo_alt ?>" title="<?= $header_logo_title ?>">
        </div>
        <a href="<?= $_ENV['RUTA'] ?><?= $ruta_contacto ?>" class="boton"><?= $hero_cta_text ?></a>
    </header>

    <main>

        <!-- Sección 01 -->
        <section class="sect01">
            <article>
                <div>
                    <h2 class="title"><?= $section01_title ?></h2>
                    <p><?= $section01_paragraph ?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?= $_ENV['RUTA'] ?><?= $card1_icon_src ?>" alt="<?= $card1_icon_alt ?>" title="<?= $card1_icon_title ?>">
                            <h3 class="card-title"><?= $card1_title ?></h3>
                            <p><?= $card1_text ?></p>
                        </div>
                        <div class="card">
                            <img src="<?= $_ENV['RUTA'] ?><?= $card2_icon_src ?>" alt="<?= $card2_icon_alt ?>" title="<?= $card2_icon_title ?>">
                            <h3 class="card-title"><?= $card2_title ?></h3>
                            <p><?= $card2_text ?></p>
                        </div>
                    </div>
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_sobre_mi ?>" class="moduloBoton02">
                        <span><?= $more_about_text ?></span>
                        <img src="<?= $_ENV['RUTA'] ?><?= $arrow_icon_src ?>" alt="<?= $arrow_icon_alt ?>" title="<?= $arrow_icon_title ?>">
                    </a>
                </div>
                <div>
                    <img src="<?= $_ENV['RUTA'] ?><?= $hero_image_src ?>" alt="<?= $hero_image_alt ?>" title="<?= $hero_image_title ?>">
                </div>
            </article>
        </section>

        <section>
            <article class="art02-bis">
                <div class="textos">
                    <h2 class="title"><?= $section02_title ?></h2>
                    <p><?= $section02_paragraph ?></p>
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_portfolio ?>" class="moduloBoton02">
                        <span><?= $more_info_text ?></span>
                        <img src="<?= $_ENV['RUTA'] ?><?= $arrow_icon_src ?>" alt="<?= $arrow_icon_alt ?>" title="<?= $arrow_icon_title ?>">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_branding ?>" title="<?= $project1_link_title ?>">
                        <img src="<?= $_ENV['RUTA'] ?><?= $project1_img_src ?>" alt="<?= $project1_img_alt ?>" title="<?= $project1_img_title ?>">
                        <h3 class="title"><?= $project1_title ?></h3>
                    </a>
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_design ?>" title="<?= $project2_link_title ?>">
                        <img src="<?= $_ENV['RUTA'] ?><?= $project2_img_src ?>" alt="<?= $project2_img_alt ?>" title="<?= $project2_img_title ?>">
                        <h3 class="title"><?= $project2_title ?></h3>
                    </a>
                    <a href="<?= $_ENV['RUTA'] ?><?= $ruta_desarrollo ?>" title="<?= $project3_link_title ?>">
                        <img src="<?= $_ENV['RUTA'] ?><?= $project3_img_src ?>" alt="<?= $project3_img_alt ?>" title="<?= $project3_img_title ?>">
                        <h3 class="title"><?= $project3_title ?></h3>
                    </a>
                </div>
            </article>

            <article class="art04">
                <h2><?= $section03_title ?></h2>
                <p><?= $section03_paragraph ?></p>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h3 class="ficha-title"><?= $testimonial1_name ?><br><?= $testimonial1_role ?></h3>
                        <img src="<?= $_ENV['RUTA'] ?><?= $testimonial1_avatar_src ?>" alt="<?= $testimonial1_avatar_alt ?>" title="<?= $testimonial1_avatar_title ?>">
                        <p><?= $testimonial1_quote ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h3 class="ficha-title"><?= $testimonial2_name ?><br><?= $testimonial2_role ?></h3>
                        <img src="<?= $_ENV['RUTA'] ?><?= $testimonial2_avatar_src ?>" alt="<?= $testimonial2_avatar_alt ?>" title="<?= $testimonial2_avatar_title ?>">
                        <p><?= $testimonial2_quote ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h3 class="ficha-title"><?= $testimonial3_name ?><br><?= $testimonial3_role ?></h3>
                        <img src="<?= $_ENV['RUTA'] ?><?= $testimonial3_avatar_src ?>" alt="<?= $testimonial3_avatar_alt ?>" title="<?= $testimonial3_avatar_title ?>">
                        <p><?= $testimonial3_quote ?></p>
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
