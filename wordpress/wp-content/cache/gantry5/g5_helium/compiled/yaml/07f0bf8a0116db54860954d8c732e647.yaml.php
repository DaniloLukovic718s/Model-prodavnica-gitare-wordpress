<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/drugiProjekatEP/wordpress/wp-content/plugins/gantry5/engines/nucleus/particles/widget.yaml',
    'modified' => 1589457453,
    'data' => [
        'name' => 'Widget',
        'description' => 'Display a single widget.',
        'icon' => 'fa-object-ungroup',
        'type' => 'position',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable widget particle.',
                    'default' => true
                ],
                'info' => [
                    'type' => 'separator.note',
                    'class' => 'alert',
                    'content' => 'Widgets that utilise JavaScript in their forms are not supported.<br />Such widgets can be used with Widget Position particle instead.'
                ],
                'widget' => [
                    'type' => 'gantry.widget',
                    'label' => 'Widget',
                    'class' => 'g-urltemplate input-small',
                    'picker_label' => 'Pick a Widget',
                    'pattern' => '[a-z0-9_-]+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Widget chrome.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
