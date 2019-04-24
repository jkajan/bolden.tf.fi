<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/http/bolden.tf.fi/user/config/site.yaml',
    'modified' => 1556139834,
    'data' => [
        'title' => 'Bölden',
        'default_lang' => 'sv',
        'author' => [
            'name' => 'Bödlarna',
            'email' => 'bodel@tf.fi'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Välkommen till Böldens webbportal! Här finns all information rörande bölden, dess bokning och funktion.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
