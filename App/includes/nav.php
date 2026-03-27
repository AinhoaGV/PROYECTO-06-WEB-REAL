<input type="checkbox" name="toggle" id="chec" >
<label for="chec" class="contenedor_spam">
    <span ></span>
    <span></span>
    <span></span>
</label>

<nav>
    <img src="<?=$_ENV['RUTA']?>/assets/img/logos/ainhoa-gomez-vallejo.svg" alt="<?= $nav_logo_alt ?>" title="<?= $nav_logo_title ?>" width="120" height="40">

    <?php
    include $appRoot . '/includes/enlaces_menu.php'
    ?>

    <ul class="idiomas">
        <li><a href="<?=$_ENV['RUTA']?><?=$urlMultilangs['eu']?>"><?= $label_lang_eu ?></a></li>
        <li><a href="<?=$_ENV['RUTA']?><?=$urlMultilangs['es']?>"><?= $label_lang_es ?></a></li>
    </ul>
</nav>
