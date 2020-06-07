<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/g5_hydrogen/layouts/_offline.yaml',
    'modified' => 1591526639,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/offline.png'
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo 30',
                    1 => 'spacer 70'
                ]
            ],
            '/main/' => [
                0 => 'system-messages',
                1 => 'system-content'
            ],
            '/footer/' => [
                0 => 'position-footer',
                1 => [
                    0 => 'copyright 40',
                    1 => 'spacer 30',
                    2 => 'branding 30'
                ]
            ]
        ]
    ]
];
