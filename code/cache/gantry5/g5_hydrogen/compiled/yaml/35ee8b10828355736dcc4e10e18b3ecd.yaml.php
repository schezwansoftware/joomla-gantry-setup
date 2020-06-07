<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/g5_hydrogen/custom/config/default/layout.yaml',
    'modified' => 1591526639,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1591526639
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo-4743 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-6380'
                ]
            ],
            '/main/' => [
                0 => [
                    0 => 'position-breadcrumbs'
                ],
                1 => [
                    0 => 'system-messages-2598'
                ],
                2 => [
                    0 => 'system-content-4570'
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'position-footer'
                ],
                1 => [
                    0 => 'copyright-1692 40',
                    1 => 'spacer-9178 30',
                    2 => 'branding-9530 30'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-8535'
                ]
            ]
        ],
        'structure' => [
            'header' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'position-header' => [
                'attributes' => [
                    'key' => 'header'
                ]
            ],
            'position-breadcrumbs' => [
                'attributes' => [
                    'key' => 'breadcrumbs'
                ]
            ],
            'position-footer' => [
                'attributes' => [
                    'key' => 'footer'
                ]
            ]
        ]
    ]
];
