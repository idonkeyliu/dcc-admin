<?php

return [
    'authors' => [
        [
            'name'  => 'idonkeyliu',
            'email' => 'idonkeyliu@gmail.com',
        ],
    ],
    'homepage'    => '',
    'description' => 'Description...',
    'website'     => [
        'title'       => '大橙橙',
        'keywords'    => '',
        'description' => '',
    ],
    'doc' => [
        // 默认打开的文档
        'default' => 'installation',
        // 导航索引文档
        'index' => 'documentation',
        // 默认打开的版本
        'version'=> 'master',
        // 忽略的文档
        'ignore' => [],
    ],
    'comment' => [
        'enable'         => true,
        'clientID'       => 'xxx',
        'clientSecret'   => 'xxx',
        'repo'           => 'xxx',
        'owner'          => 'xxx',
        'admin'          => ['xxx'],
        'language'       => 'zh-CN', // 支持 [en, zh-CN, zh-TW]。
        'perPage'        => 15,
        'pagerDirection' => 'first', // last first
    ],
];
