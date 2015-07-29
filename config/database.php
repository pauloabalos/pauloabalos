<?php
/**
 * Database connect configuration.
 */

// For single database connect.
/*
return [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'questwork',
];
*/

// For multiple database connect.
return [
    'master' => [
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'ghstest',
    ],
    'slave' => [
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'test',
    ],
];
