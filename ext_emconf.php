<?php

/**
 * Extension Manager/Repository config file for ext "crio_blog".
 */
$EM_CONF['crio_blog'] = [
    'title' => 'crio-blog',
    'description' => 'Blog template based on Clean Blog',
    'category' => 'templates',
    'author' => 'Lukas Maxheim',
    'author_email' => 'guten-tag@lukas-mx.de',
    'author_company' => 'crescent-io',
    'version' => '1.0.0-dev',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'CrescentIo\\CrioBlog\\' => 'Classes',
        ],
    ],
];
