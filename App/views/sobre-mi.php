<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/sobreMi.js'); ?>

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
        <h1>Perfil híbrido: Creatividad técnica al servicio del producto</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logo-agv.svg" alt="Panaderia Aginaga" title="Panaderia Aginaga">
        </div>            
    </header>

    <main>
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

            <!-- Artículo 01 -->
            <article class="art01 reverse">
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

        <section>
            <!-- Artículo 08-->
            <article class="art08">
                <h3>H3 ART 08</h3>

                <div>
                    <div class="contenedor-lista">
                        <h4>h4</h4>
                        <ul>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="contenedor-lista">
                        <h4>h4</h4>
                        <ul>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
            
            <!--art09-->
            <article class="art09">
                <h3>H3 ART 09</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nesciunt quo ipsa expedita optio dolor voluptate ad tenetur in! Eligendi rerum deserunt voluptate officiis voluptas, earum perferendis? Temporibus non adipisci dignissimos. Aliquam exercitationem vitae saepe beatae veniam, ad distinctio ea, omnis debitis ullam quam laboriosam dignissimos praesentium. Saepe, nulla eum.</p>
                <div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/32x32" alt="">
                        <h4>h4</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/32x32" alt="">
                        <h4>H4</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/32x32" alt="">
                        <h4>H4</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/32x32" alt="">
                        <h4>H4</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/32x32" alt="">
                        <h4>H4</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/32x32" alt="">
                        <h4>H4</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                    </div>
                </div>
            </article>
        </section>
        


    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
