<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/drugiProjekatEP/wordpress/wp-content/themes/g5_helium/blueprints/content/blog/query.yaml',
    'modified' => 1589457678,
    'data' => [
        'name' => 'Query Settings',
        'description' => 'Settings for the Blog query',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'categories.include' => [
                    'type' => 'wordpress.categories',
                    'label' => 'Include Categories',
                    'description' => 'Displays blog posts only from selected categories.'
                ],
                'categories.exclude' => [
                    'type' => 'wordpress.categories',
                    'label' => 'Exclude Categories',
                    'description' => 'Exclude selected categories from the main blog query.'
                ]
            ]
        ]
    ]
];
