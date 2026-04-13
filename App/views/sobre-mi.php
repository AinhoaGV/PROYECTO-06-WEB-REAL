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
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logo-agv.svg" alt="Ainhoa Gomez" title="Ainhoa Gomez">
        </div>            
    </header>

    <main>
        <section>
            <!-- Artículo 03 -->
            <article class="art03">

                <!-- H2 especial -->
                <div class="h2Especial">
                    <span></span>
                    <h2>Qué aporto a mis proyectos</h2>
                </div>

                <p>Aporto una visión 360º del producto digital. Gracias a mi perfil híbrido, puedo liderar un proyecto desde la fase de boceto hasta el despliegue final en el servidor. Mi veteranía me permite anticipar problemas técnicos antes de que ocurran y ofrecer soluciones creativas que equilibran los deseos estéticos con las posibilidades técnicas.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

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
                        <h4>Experiencia</h4>
                        <ul>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Osoigo SL<br>
                                2024 - Presente (2 años y medio)<br>
                                Maquetación SCSS en plantillas Django.<br>
                                www.osoigonext.com</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Akting<br>
                                2023 (4 meses y medio) - por sustitución<br>
                                Diseños en figma y maquetación con SCSS.<br>
                                www.akting.eu</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Aner Sistemas Informáticos<br>
                                2007 - 2023 (16 años)<br>
                                Diseño, Maquetación y Programación web. Wordpress, Joomla y Prestashop. Imagen Corporativa y Papelería.<br>
                                www.aner.com</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Kitto<br>
                                2006 (6 meses)<br>
                                Diseño, Maquetación y Programación web. Imagen Corporativa y Papelería.<br>
                                www.kitto.info</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Comeralia<br>
                                2005 (3 meses)<br>
                                Periodo de Prácticas de Diseño gráfico y Web, con oferta de empleo.<br>
                                www.comeralia.com</span>
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
