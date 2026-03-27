<?php

// Array de idiomas permitidos
$langs = ['es', 'eu'];

//Array asociativo (3 nieveles) para determinar las url permitidas y asociarles el recurso de la vista que corresponda
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/views/inicio.php',
            'content'   => 'inicio'
        ],
        '/es/sobre-mi' => [
            'view'      => '/views/sobre-mi.php',
            'content'   => 'sobreMi'
        ],
        '/es/portfolio' => [
            'view'      => '/views/portfolio.php',
            'content'   => 'portfolio'
        ],
        '/es/portfolio/branding' => [
            'view'      => '/views/portfolio-item.php',
            'content'   => 'branding'
        ],
        '/es/portfolio/ux-ui-design' => [
            'view'      => '/views/portfolio-item.php',
            'content'   => 'uxUiDesign'
        ],
        '/es/portfolio/desarrollo-web' => [
            'view'      => '/views/portfolio-item.php',
            'content'   => 'desarrolloWeb'
        ],
        '/es/contacto' => [
            'view'      => '/views/contacto.php',
            'content'   => 'contacto'
        ],
        '/es/showroom' => [
            'view'      => '/views/templates.php',
            'content'   => 'showroom'
        ],
        '/es/terminos-legales' => [
            'view'      => '/views/terminos.php',
            'content'   => 'terminos'
        ],
        // '/es/gracias' => [
        //     'view'      => '/views/gracias.php',
        //     'content'   => 'gracias'
        // ],
        // '/es/zona-admin' => [
        //     'view'      => '/views/zonaAdmin.php',
        //     'content'   => 'zonaAdmin'
        // ],
        // '/es/logout' => [
        //     'view'      => '/views/logout.php',
        //     'content'   => 'logout'
        // ],
        // '/es/registro' => [
        //     'view'      => '/views/logup.php',
        //     'content'   => 'logup'
        // ],
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/views/inicio.php',
            'content'   => 'inicio'
        ],
        '/eu/niri-buruz' => [
            'view'      => '/views/sobre-mi.php',
            'content'   => 'sobreMi'
        ],
        '/eu/portfolioa' => [
            'view'      => '/views/portfolio.php',
            'content'   => 'portfolio'
        ],
        '/eu/portfolioa/branding' => [
            'view'      => '/views/portfolio-item.php',
            'content'   => 'branding'
        ],
        '/eu/portfolioa/ux-ui-design' => [
            'view'      => '/views/portfolio-item.php',
            'content'   => 'uxUiDesign'
        ],
        '/eu/portfolioa/web-garapena' => [
            'view'      => '/views/portfolio-item.php',
            'content'   => 'desarrolloWeb'
        ],
        '/eu/harremanetan-jarri' => [
            'view'      => '/views/contacto.php',
            'content'   => 'contacto'
        ],
        '/eu/showroom' => [
            'view'      => '/views/templates.php',
            'content'   => 'showroom'
        ],
        '/eu/legezko-terminoak' => [
            'view'      => '/views/terminos.php',
            'content'   => 'terminos'
        ],
        // '/eu/eskerrikasko' => [
        //     'view'      => '/views/gracias.php',
        //     'content'   => 'gracias'
        // ],
        // '/eu/admin-gunea' => [
        //     'view'      => '/views/zonaAdmin.php',
        //     'content'   => 'zonaAdmin'
        // ],
        // '/eu/logout' => [
        //     'view'      => '/views/logout.php',
        //     'content'   => 'logout'
        // ],
        // '/eu/erregistroa' => [
        //     'view'      => '/views/logup.php',
        //     'content'   => 'logup'
        // ],
    ]
];

// Array de rutas permitidas para peticiones POST (formularios)
$arrayRutasPost = [
    '/app/artForm' => [
        'view' => '/app/artForm.php',
    ],
    '/app/artFormLogin' => [
        'view' => '/app/artFormLogin.php',
    ],
    '/app/artFormLogup' => [
        'view' => '/app/artFormLogup.php',
    ],
    '/app/artForm02' => [
        'view' => '/app/artForm02.php',
    ],
    '/app/artForm03' => [
        'view' => '/app/artForm03.php',
    ],
];

