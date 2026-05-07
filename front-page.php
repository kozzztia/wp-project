<?php
get_template_part('views/overall/layout');
function render_content()
{

    //content

    get_template_part('views/blocks/hero', null,
        [
            'fields' => [
                'style' => '',
                'class' => '',
                'id' => 'about',
                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                'title' => 'Front-End Developer',
                'name' => 'Zadorozhniy Kostiantyn',
                'techtitle' => 'technology',
                'tech' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'React', 'Next'],
                'slides' => [
                    [
                        'slug'  => 'animation',
                        'text'  => 'Passionate about creating interactive animations with SVG and JavaScript',
                        'image' => 'animation',
                    ],
                    [
                        'slug'  => 'experience',
                        'text'  => 'Over three years of practical experience in front‑end development',
                        'image' => 'experience',
                    ],
                    [
                        'slug'  => 'start',
                        'text'  => 'Began learning and working with web technologies in 2022',
                        'image' => 'start',
                    ],

                    [
                        'slug'  => 'education',
                        'text'  => 'Technical background in computer systems, continuously improving programming skills',
                        'image' => 'education',
                    ],
                ],

            ],
        ]
    );

    get_template_part('views/blocks/multi-slider', null,
        [
            'fields' => [
                'style' => '',
                'class' => '',
                'id' => 'portfolio',
                'timer' => '3000',
                'slides' => [
                    [
                        'slug'  => 'commercial',
                        'text'  => 'Passionate about creating interactive animations with SVG and JavaScript',
//                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'view' ]
                    ],
                    [
                        'slug'  => 'pet project',
                        'text'  => 'Over three years of practical experience in front‑end development',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'link to' ]
                    ],
                    [
                        'slug'  => 'art  project',
                        'text'  => 'Began learning and working with web technologies in 2022',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'show' ]
                    ],

                    [
                        'slug'  => 'pet project',
                        'text'  => 'Technical background in computer systems, continuously improving programming skills',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'view' ]
                    ],
                    [
                        'slug'  => 'pet project',
                        'text'  => 'Technical background in computer systems, continuously improving programming skills',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'view' ]
                    ],
                    [
                        'slug'  => 'pet project',
                        'text'  => 'Technical background in computer systems, continuously improving programming skills',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'view' ]
                    ],
                    [
                        'slug'  => 'pet project',
                        'text'  => 'Technical background in computer systems, continuously improving programming skills',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'view' ]
                    ],
                    [
                        'slug'  => 'pet project',
                        'text'  => 'Technical background in computer systems, continuously improving programming skills',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'view' ]
                    ],
                    [
                        'slug'  => 'pet project',
                        'text'  => 'Technical background in computer systems, continuously improving programming skills',
                        'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                        'link' => ['url'=> '#', 'title' => 'view' ]
                    ],
                ],

            ],
        ]
    );


    get_template_part('views/blocks/hero', null,
        [
            'fields' => [
                'style' => '',
                'class' => 'animate up',
                'id' => 'study',
                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
            ],
        ]
    );

    get_template_part('views/blocks/hero', null,
        [
            'fields' => [
                'style' => '',
                'class' => 'animate up',
                'id' => 'experience',
                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
            ],
        ]
    );


    get_template_part('views/blocks/hero', null,
        [
            'fields' => [
                'style' => '',
                'class' => 'animate up',
                'id' => 'contacts',
                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
            ],
        ]
    );
}

