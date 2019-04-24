<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/http/bolden.tf.fi/user/plugins/image-collage/blueprints.yaml',
    'modified' => 1556141075,
    'data' => [
        'name' => 'Image Collage',
        'version' => '1.0.4',
        'description' => 'Create beautiful image collages for all your posts and pages',
        'icon' => 'picture-o',
        'author' => [
            'name' => 'Petr Grishin',
            'email' => 'petr.grishin@grishini.ru'
        ],
        'homepage' => 'https://github.com/petrgrishin/grav-plugin-image-collage',
        'keywords' => [
            0 => 'image',
            1 => 'collage',
            2 => 'combination',
            3 => 'photo',
            4 => 'plugin'
        ],
        'docs' => 'https://github.com/petrgrishin/grav-plugin-image-collage/blob/master/README.md',
        'bugs' => 'https://github.com/petrgrishin/grav-plugin-image-collage/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'column' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Number of columns',
                    'default' => 2,
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'border_size' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Border size',
                    'default' => 10,
                    'validate' => [
                        'type' => 'number',
                        'min' => 0
                    ]
                ],
                'image_width' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Result image width',
                    'default' => 900,
                    'validate' => [
                        'type' => 'number',
                        'min' => 30
                    ]
                ]
            ]
        ]
    ]
];
