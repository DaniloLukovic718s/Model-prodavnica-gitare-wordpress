<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\drugiProjekatEP\\wordpress/wp-content/themes/g5_hydrogen/blueprints/content/blog/read-more.yaml',
    'modified' => 1589457538,
    'data' => [
        'name' => 'Read More Button',
        'description' => 'Options for displaying Read More button',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'label' => [
                    'type' => 'input.text',
                    'label' => 'Button Label',
                    'description' => 'Default Read More button label.',
                    'default' => 'Read More'
                ],
                'mode' => [
                    'type' => 'select.select',
                    'label' => 'Display Mode',
                    'description' => 'When set to Auto - theme detects <!--more--> tag inside of the post content.',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Auto',
                        'always' => 'Always',
                        'never' => 'Never'
                    ]
                ]
            ]
        ]
    ]
];
