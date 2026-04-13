<footer>
    <div>
        <div class="cajaInfo">
            <?php include $appRoot . '/includes/enlaces_menu.php' ?>
        </div>

        <div class="cajaInfo">
            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logo-agv.svg" alt="<?= $footer_logo_alt ?>" title="<?= $footer_logo_title ?>" width="200" height="80">
            
        </div>

        <div class="cajaInfo">
            <ul>

                <li>
                    <a href="<?= $contact_url_email ?>" title="<?= $contact_title_email ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="<?= $contact_title_email ?>" title="<?= $contact_title_email ?>" width="20" height="20">
                        <span><?= $contact_text_email ?></span>
                    </a>
                </li>

                <li>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="<?= $contact_title_direccion ?>" title="<?= $contact_title_direccion ?>" width="20" height="20">
                    <span><?= $contact_text_direccion_linea2 ?></span>
                </li>
                <li class="rrss">

                    <a href="<?= $rrss_url_linkedin ?>" title="<?= $rrss_title_linkedin ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-linkedin.svg" alt="<?= $rrss_alt_linkedin ?>" title="<?= $rrss_title_linkedin ?>" width="30" height="30">
                    </a>

                </li>
            </ul>
            
        </div>
    </div>

    <div>
        
        <div>
            <p><?= $footer_desc ?></p>
            <div id="zonaTerminos">
                <a href="<?=$_ENV['RUTA']?><?= $ruta_terminos_legal ?>"><?= $footer_legal ?></a>
                <a href="<?=$_ENV['RUTA']?><?= $ruta_terminos_cookies ?>"><?= $footer_cookies ?></a>
                <a href="<?=$_ENV['RUTA']?><?= $ruta_terminos_privacidad ?>"><?= $footer_privacidad ?></a>
            </div>
            <p>&copy; <?php echo $anio?> <?= $footer_copyright ?></p>
        </div>
    </div>
</footer>
