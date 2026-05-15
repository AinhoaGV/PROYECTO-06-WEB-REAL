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

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h2>Qué aporto a mis proyectos</h2>
                    <p>Aporto una visión 360º del producto digital. Gracias a mi perfil híbrido, he llevado acabo proyectos desde la fase de boceto hasta el despliegue final. Mi experiencia me permite anticipar problemas y ofrecer soluciones creativas.</p>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 reverse">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Compromiso y trabajo en equipo</h3>
                    <p>Mi experiencia y el domino de ciertas herramientas me permite integrarme rápidamente en cualquier flujo de trabajo profesional y empezar a producir resultados en poco tiempo.</p>
                    <p>He trabajado en diversos entornos, y creo firmemente en la colaboración como motor del éxito. Disfruto compartiendo conocimientos y trabajando codo con codo con otros diseñadores y desarrolladores.</p>
                </div>
            </article>
        </section>

        <section>
            <!-- Artículo 08-->
            <article class="art08">
                <h3>Aprender de la experiencia</h3>

                <p>Entiendo mi trabajo como un proceso de formación continua donde cada proyecto es una oportunidad para investigar nuevas librerías, metodologías de trabajo o estándares de diseño que puedan aportar un valor añadido.<br>
                Cuando me es posible realizo cursos para que así mis habilidades nunca queden obsoletas.</p>
               <p>Cada error solucionado y cada reto superado en estos 20 años se ha convertido en conocimiento valioso. Mi mayor aprendizaje proviene del día a día: de enfrentar proyectos diferentes y de escuchar las necesidades reales de los usuarios.</p>
                <div>
                    <div class="columna">
                        <div class="contenedor-lista">
                            <h4>Experiencia</h4>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-work.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Osoigo SL</h5>
                                    <p><span>2024 - Presente (2 años y medio)</span><br>
                                    <span>Frontend - Maquetación SCSS en plantillas Django.</span><br>
                                    <span>www.osoigonext.com</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-work.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Akting</h5>
                                    <p><span>2023 (4 meses y medio) - por sustitución</span><br>
                                    <span>Diseños en figma y maquetación con SCSS.</span><br>
                                    <span>www.akting.eu</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-work.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Aner Sistemas Informáticos SL</h5>
                                    <p><span>2007 - 2023 (16 años)</span><br>
                                    <span>Diseño, Maquetación y Programación web. Wordpress y Prestashop.</span><br>
                                    <span>www.aner.com</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-work.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Kitto</h5>
                                    <p><span>2006 (6 meses)</span><br>
                                    <span>Diseño, Maquetación y Programación web. Imagen Corporativa y Papelería.</span><br>
                                    <span>www.kitto.info</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-work.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Comeralia</h5>
                                    <p><span>2005 (1 mes y medio)</span><br>
                                    <span>Prácticas de diseño gráfico y Web</span><br>
                                    <span>www.comeralia.com</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="contenedor-lista">
                            <h4>Formación</h4>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-education.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">2005-2006</h5>
                                    <p><span><strong>Webmaster</strong>, master en diseño de Páginas Web, en la escuela práctica Área, diseño y nuevas tecnologias de Donostia.</span><br>
                                    <span>www.areafor.com</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-education.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">2003-2005</h5>
                                    <p><span>Técnico Superior en <strong>Diseño y Producción Editorial</strong> en el centro Ceinpro de Donostia.</span><br>
                                    <span>www.ceinpro.es</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-education.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">2001-2003</h5>
                                    <p><span><strong>Bachillerato Científico</strong> - Técnico en Oteiza Lizeo Politeknikoa en Zarautz.</span><br>
                                    <span>www.oteitzalp.org</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columna">
                        <div class="contenedor-lista">
                            <h4>Cursos</h4>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-course.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Full-Stack Developer con React+Vite y PHP</h5>
                                    <p><span>Área, 225h, 2025-26</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-course.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">React</h5>
                                    <p><span>Udemy, 16h, 2025-26 (por finalizar)</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-course.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Visual Thinking + Storytelling y elevator pitch</h5>
                                    <p><span>Cebanc, 20h, 2024</span><br>
                                    <span>Cebanc, 16h, 2023</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-course.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Javascript</h5>
                                    <p><span>Nazaret, 62h, 2023</span><br>
                                    <span>Udemy, 15h, 2023</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-course.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Flexbox, CSS Grid, BEM, SASS</h5>
                                    <p><span>Udemy, 36h, 2023</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-course.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">UX/UI + Figma</h5>
                                    <p><span>Udemy, 20h, 2023</span></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-course.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Otros cursos pasados</h5>
                                    <p><span>432h entre 2008 y 2022:</span><br>
                                    <span>PHP, Symfony, OJS, Sass y Twig, Fotografia, Illustrator, App Multiplataforma, 3D Studio Max, Premiere, HTML5 y CSS3, Jquery, Magento, Joomla, Ajax y Usabilidad.</span></p>
                                </div>
                            </div>             
                            
                        </div>
                        <div class="contenedor-lista">
                            <h4>Idiomas</h4>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-language.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Euskera</h5>
                                    <p><span>7/10</span></p>
                                </div>
                            </div>        
                        </div>
                       <div class="contenedor-lista">
                            <h4>Otros</h4>
                            <div class="ficha">
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-other.svg" alt="">
                                <div class="ficha-data">
                                    <h5 class="ficha-title">Carnet de conducir B</h5>
                                    <p><span>Vehículo propio</span></p>
                                </div>
                            </div>        
                        </div>                        
                    </div>
                    
                </div>
            </article>
            
            <!--art09-->
            <article class="art09">
                <h3>Desarrollo Front-End: HTML5, CSS3 y React</h3>
                <p>Nunca dejo de aprender. Mi curiosidad me lleva a estar en constante actualización con las últimas tendencias y herramientas del mercado. Actualmente, foco mis esfuerzos en profundizar en el ecosistema de React.</p>
                <div>
                    <div class="ficha">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-ui.svg" alt="">
                        <h4>UX/UI + Figma</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-code.svg" alt="">
                        <h4>HTML + SCSS</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-react.svg" alt="">
                        <h4>JS + React</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-git.svg" alt="">
                        <h4>Git</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-php.svg" alt="">
                        <h4>PHP y Mysql</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/icons/icon-wordpress.svg" alt="">
                        <h4>CMS: Wordpress + Prestashop</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                    </div>              
                </div>
            </article>
        </section>
        


    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
