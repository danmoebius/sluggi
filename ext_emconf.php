<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'sluggi',
    'description' => 'The little TYPO3 9 slug helper',
    'category' => 'backend',
    'author' => 'Wolfgang Klinger',
    'author_email' => 'wolfgang@wazum.com',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author_company' => 'wazum.com',
    'version' => '1.8.3',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.5-9.5.99',
        ],
        'suggests' => [
            'redirects' => ''
        ]
    ]
];
