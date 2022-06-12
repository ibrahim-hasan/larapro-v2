<?php
// Aside menu
return [

    'items' => [
        [
            'title'     => 'Dashboard',
            'root'      => true,
            'icon'      => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page'      => '/',
            'new-tab'   => false,
        ],
        [
            'section'   => 'Custom',
        ],
        [
            'title'     => 'Applications',
            'icon'      => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet'    => 'line',
            'root'      => true,
            'submenu'   => [
                [
                    'title'     => 'Users',
                    'bullet'    => 'dot',
                    'submenu'   => [
                        [
                            'title' => 'List - Default',
                            'page'  => 'test',
                        ]
                    ]
                ]
            ]
        ]
    ]

];
