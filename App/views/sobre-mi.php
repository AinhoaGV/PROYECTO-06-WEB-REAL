<!DOCTYPE html>
<html lang="<?= $lang ?>">
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
        <h1><?= $header_title ?></h1>
        <div>            
            <img src="<?= $_ENV['RUTA'] ?><?= $header_logo_src ?>" alt="<?= $header_logo_alt ?>" title="<?= $header_logo_title ?>">
        </div>            
    </header>

    <main>
        <section>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="<?= $_ENV['RUTA'] ?><?= $article1_image_src ?>" alt="<?= $article1_image_alt ?>">
                <div>
                    <h2><?= $article1_heading ?></h2>
                    <p><?= $article1_paragraph ?></p>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 reverse">
                <img src="<?= $_ENV['RUTA'] ?><?= $article2_image_src ?>" alt="<?= $article2_image_alt ?>">
                <div>
                    <h3><?= $article2_heading ?></h3>
                    <p><?= $article2_paragraph_1 ?></p>
                    <p><?= $article2_paragraph_2 ?></p>
                </div>
            </article>
        </section>

        <section>
            <!-- Artículo 08-->
            <article class="art08">
                <h3><?= $learning_title ?></h3>

                <p><?= $learning_paragraph_1 ?></p>
               <p><?= $learning_paragraph_2 ?></p>
                <div>
                    <div class="columna">
                        <div class="contenedor-lista">
                            <h4><?= $experience_title ?></h4>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $experience_icon_src ?>" alt="<?= $experience_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $exp1_company ?></h5>
                                    <p><?= $exp1_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $experience_icon_src ?>" alt="<?= $experience_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $exp2_company ?></h5>
                                    <p><?= $exp2_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $experience_icon_src ?>" alt="<?= $experience_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $exp3_company ?></h5>
                                    <p><?= $exp3_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $experience_icon_src ?>" alt="<?= $experience_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $exp4_company ?></h5>
                                    <p><?= $exp4_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $experience_icon_src ?>" alt="<?= $experience_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $exp5_company ?></h5>
                                    <p><?= $exp5_details ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="contenedor-lista">
                            <h4><?= $education_title ?></h4>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $education_icon_src ?>" alt="<?= $education_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $education1_year ?></h5>
                                    <p><?= $education1_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $education_icon_src ?>" alt="<?= $education_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $education2_year ?></h5>
                                    <p><?= $education2_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $education_icon_src ?>" alt="<?= $education_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $education3_year ?></h5>
                                    <p><?= $education3_details ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columna">
                        <div class="contenedor-lista">
                            <h4><?= $courses_title ?></h4>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $course_icon_src ?>" alt="<?= $course_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $course1_title ?></h5>
                                    <p><?= $course1_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $course_icon_src ?>" alt="<?= $course_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $course2_title ?></h5>
                                    <p><?= $course2_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $course_icon_src ?>" alt="<?= $course_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $course3_title ?></h5>
                                    <p><?= $course3_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $course_icon_src ?>" alt="<?= $course_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $course4_title ?></h5>
                                    <p><?= $course4_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $course_icon_src ?>" alt="<?= $course_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $course5_title ?></h5>
                                    <p><?= $course5_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $course_icon_src ?>" alt="<?= $course_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $course6_title ?></h5>
                                    <p><?= $course6_details ?></p>
                                </div>
                            </div>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $course_icon_src ?>" alt="<?= $course_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $course7_title ?></h5>
                                    <p><?= $course7_details ?></p>
                                </div>
                            </div>             
                        </div>
                        <div class="contenedor-lista">
                            <h4><?= $languages_title ?></h4>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $language_icon_src ?>" alt="<?= $language_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $language1_title ?></h5>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?= $language1_level ?>%"></div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                       <div class="contenedor-lista">
                            <h4><?= $others_title ?></h4>
                            <div class="ficha">
                                <img src="<?= $_ENV['RUTA'] ?><?= $other_icon_src ?>" alt="<?= $other_icon_alt ?>">
                                <div class="ficha-data">
                                    <h5 class="ficha-title"><?= $other1_title ?></h5>
                                    <p><?= $other1_details ?></p>
                                </div>
                            </div>        
                        </div>                        
                    </div>
                </div>
            </article>
            
            <!--art09-->
            <article class="art09">
                <h3><?= $front_end_title ?></h3>
                <p><?= $front_end_paragraph ?></p>
                <div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?><?= $skill1_icon_src ?>" alt="<?= $skill1_icon_alt ?>">
                        <h4><?= $skill1_title ?></h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?= $skill1_level ?>%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?><?= $skill2_icon_src ?>" alt="<?= $skill2_icon_alt ?>">
                        <h4><?= $skill2_title ?></h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?= $skill2_level ?>%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?><?= $skill3_icon_src ?>" alt="<?= $skill3_icon_alt ?>">
                        <h4><?= $skill3_title ?></h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?= $skill3_level ?>%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?><?= $skill4_icon_src ?>" alt="<?= $skill4_icon_alt ?>">
                        <h4><?= $skill4_title ?></h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?= $skill4_level ?>%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?><?= $skill5_icon_src ?>" alt="<?= $skill5_icon_alt ?>">
                        <h4><?= $skill5_title ?></h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?= $skill5_level ?>%"></div>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?><?= $skill6_icon_src ?>" alt="<?= $skill6_icon_alt ?>">
                        <h4><?= $skill6_title ?></h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?= $skill6_level ?>%"></div>
                        </div>
                    </div>              
                </div>
            </article>
        </section>
    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
