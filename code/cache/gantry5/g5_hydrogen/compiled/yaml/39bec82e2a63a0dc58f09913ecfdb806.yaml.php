<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/g5_hydrogen/blueprints/page.yaml',
    'modified' => 1591526639,
    'data' => [
        'name' => 'Page Settings',
        'description' => 'Settings that can be applied to the page.',
        'form' => [
            'fields' => [
                'doctype' => [
                    'type' => 'input.text',
                    'label' => 'Doctype',
                    'default' => 'html'
                ],
                'body.class' => [
                    'type' => 'input.text',
                    'label' => 'Body Class',
                    'default' => 'gantry'
                ]
            ]
        ]
    ]
];
