<ul>
    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_inicio ?>" title="<?= $menu_title_inicio ?>"><?= $menu_inicio ?></a></li>

    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_sobre_mi ?>" title="<?= $menu_title_sobre_mi ?>"><?= $menu_sobre_mi ?></a></li>

    <li>
        <a href="<?=$_ENV['RUTA']?><?= $ruta_portfolio ?>" title="<?= $menu_title_portfolio ?>"><?= $menu_portfolio ?></a>
        <ul class="sublista">
            <li><a href="<?=$_ENV['RUTA']?><?= $ruta_branding ?>" title="<?= $menu_title_branding ?>"><?= $menu_branding ?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?= $ruta_design ?>" title="<?= $menu_title_design ?>"><?= $menu_design ?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?= $ruta_desarrollo ?>" title="<?= $menu_title_desarrollo ?>"><?= $menu_desarrollo ?></a></li>
        </ul>
    </li>

    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_contacto ?>" title="<?= $menu_title_contacto ?>"><?= $menu_contacto ?></a></li>

</ul>
