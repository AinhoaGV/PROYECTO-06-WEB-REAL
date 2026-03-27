<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
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
            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la primera sección</h2>
            </div>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Encabezado h3 artículo tipo art01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Conócenos</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>
        </section>
    </header>

    <main>
        <section>
            <!-- art10 -->
            <article class="art10">
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
                <div>
                    <img src="https://dummyimage.com/1500x1500" alt="Pan">
                </div>
            </article>
        </section>
    </main>


    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
