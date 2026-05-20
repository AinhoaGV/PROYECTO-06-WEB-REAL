<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branding</title>
    <meta name="description" content="Diseño sistemas visuales que comunican la personalidad de tu negocio.">
    <?php echo vite_tags('src/js/portfolioItem.js'); ?>

    <link rel="canonical" href="<?= $_ENV['RUTA'] ?><?= $url ?>">
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php include $appRoot . '/includes/metadatos_globales.php' ?>
    
</head>
<body>

    <?php include $appRoot . '/includes/body_global.php' ?>

    <?php include $appRoot . '/includes/nav.php' ?>

    <header>
        <section>

            <article class="art02">
                <div class="textos">
                    <h1>Más allá del logotipo</h1>
                    <p>Diseño sistemas visuales que comunican la personalidad de tu negocio. Selecciono combinaciones que refuerzan el mensaje de la marca e impactan visualmente. Establezco reglas claras de uso para que la comunicación visual sea coherente, profesional y capaz de evocar las emociones adecuadas en el público objetivo.</p>
                </div>
            </article>
        </section>
        
    </header>

    <main>
        <section>
            <!-- art10 -->
            <article class="art10">
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/appdegestion.avif" alt="App de Gestión">
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/arrivet.avif" alt="Arrivet">
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/kts.avif" alt="KTS">
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/ori-zautz.avif" alt="Ori-Zautz">
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/teknomai.avif" alt="Teknomai">
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/utilfor.avif" alt="Utilfor">
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/thn.avif" alt="THN">
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/portfolio/branding/transformainteriores.avif" alt="Transforma Interiores">
                </div>

            </article>
        </section>
    </main>


    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
