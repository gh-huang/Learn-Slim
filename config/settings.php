<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        //Monolog settings
        'logger' => [
        	'name' => 'learn-slim',
        	'path' => __DIR__ . '/../logs/app.log',
        ],

        //Renderer settings
        'renderer' => [
        	'template_path' => __DIR__ . '/../templates/',
        ],
    ],
];