<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/portfolioItem.js'); ?>

    <link rel="canonical" href="<?= $_ENV['RUTA'] ?><?= $url ?>">
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php include $appRoot . '/includes/metadatos_globales.php' ?>
</head>
<body>

    <?php include $appRoot . '/includes/body_global.php' ?>

    <?php include $appRoot . '/includes/nav.php' ?>

    <header class="<?= $class_header ?>">
        <section>
            <article class="art02">
                <div class="textos">
                    <h1><?= $hero_title ?></h1>
                    <p><?= $hero_description ?></p>
                </div>
            </article>
        </section>
    </header>

    <main>
        <section>
            <article class="art10">
                <?php foreach ($gallery_images as $image) { ?>
                <div>
                    <img src="<?= $_ENV['RUTA'] . $image->src ?>" alt="<?= $image->alt ?>">
                </div>
                <?php } ?>
            </article>
        </section>
    </main>

    <?php include $appRoot . '/includes/footer.php' ?>
</body>
</html>
