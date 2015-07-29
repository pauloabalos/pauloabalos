<?php
/**
 * Application routing configuration
 */
return [
    [
        '(/<controller>(/<action>(/<id>)))', [
            'controller' => 'page',
            'action' => 'main',
        ],
    ],
];
