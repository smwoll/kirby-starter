<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => false,
    'panel' =>[
        'install' => true
    ],
    'thumbs' => [
        'srcsets' => [
            'default' => [
                '300w'  => ['width' => 300],
                '600w'  => ['width' => 600],
                '900w'  => ['width' => 900],
                '1200w' => ['width' => 1200],
                '1800w' => ['width' => 1800]
            ],
            'square' => [
                '300w'  => ['width' => 300, 'height' => 300, 'crop' => 'center'],
                '600w'  => ['width' => 600, 'height' => 600, 'crop' => 'center'],
                '900w'  => ['width' => 900, 'height' => 900, 'crop' => 'center'],
                '1200w' => ['width' => 1200, 'height' => 1200, 'crop' => 'center'],
                '1800w' => ['width' => 1800, 'height' => 1800, 'crop' => 'center']
            ],
            // more srcsets as needed
        ]
    ]
];
