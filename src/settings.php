<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        
        'db' => [
            'driver' => 'mysql',
            'host' => 'mysql669.umbler.com',
            'database' => 'afrikedin',
            'username' => 'afrikedin',
            'password' => "1gu4ld4d3",
            'charset' => 'utf8',
            'collation' => 'utf8mb4_unicode_ci',
	        'prefix' => '',
        ],
    ],
];
