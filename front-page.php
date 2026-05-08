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
                'subtitle' => 'portfolio',
                'slides' => [
                    [
                        'slug'  => 'commercial',
                        'title'  => 'Stolen Life',
                        'image' => get_template_directory_uri() . '/assets/img/stolen-life.webp',
                        'link' => ['url'=> 'https://stolenlife.org/', 'title' => 'view', 'class' => 'green', 'target' => '_blank' ],
                    ],
                    [
                        'slug'  => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/pet-portfolio.webp',
                        'link' => ['url'=> 'https://kozzztia.github.io/my-project/', 'title' => 'show', 'class' => 'green', 'target' => '_blank' ]
                    ],
                    [
                        'slug'  => 'animation project',
                        'image' => get_template_directory_uri() . '/assets/img/scooter.webp',
                        'link' => ['url'=> 'https://kozzztia.github.io/scooter/home', 'title' => 'show', 'class' => 'green', 'target' => '_blank' ]
                    ],

                    [
                        'slug'  => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/i-love-my-bike.webp',
                        'link' => ['url'=> 'https://i-love-my-bike.netlify.app/', 'title' => 'show', 'class' => 'green', 'target' => '_blank' ]
                    ],
                    [
                        'slug'  => 'empty project',
                    ],
                    [
                        'slug'  => 'commercial',
                        'title'  => 'Stolen Life',
                        'image' => get_template_directory_uri() . '/assets/img/stolen-life.webp',
                        'link' => ['url'=> 'https://stolenlife.org/', 'title' => 'view', 'class' => 'green', 'target' => '_blank' ]
                    ],
                    [
                        'slug'  => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/pet-portfolio.webp',
                        'link' => ['url'=> 'https://kozzztia.github.io/my-project/', 'title' => 'show', 'class' => 'green', 'target' => '_blank' ]
                    ],
                    [
                        'slug'  => 'animation project',
                        'image' => get_template_directory_uri() . '/assets/img/scooter.webp',
                        'link' => ['url'=> 'https://kozzztia.github.io/scooter/home', 'title' => 'show', 'class' => 'green', 'target' => '_blank' ]
                    ],

                    [
                        'slug'  => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/i-love-my-bike.webp',
                        'link' => ['url'=> 'https://i-love-my-bike.netlify.app/', 'title' => 'view', 'class' => 'green', 'target' => '_blank' ]
                    ],
                    [
                        'slug'  => 'pet project',
                    ],
                ],

            ],
        ]
    );


    get_template_part('views/blocks/banner', null,
        [
            'fields' => [
                'style' => '',
                'class' => '',
                'id' => 'experience',
                'image' => get_template_directory_uri() . '/assets/svg/map.svg',
                'subtitle' => 'experience',
                'title' => 'My  work  experience',
                'tabs' => [
                    [
                        'title'=> 'title-1',
                        'desc_title'=> 'desc-1',
                        'desc'=> 'description 1',
                    ],
                    [
                        'title'=> 'title-2',
                        'desc_title'=> 'desc-2',
                        'desc'=> 'description 2',
                    ],
                    [
                        'title'=> 'title-3',
                        'desc_title'=> 'desc-3',
                        'desc'=> 'description 3',
                    ],
                    [
                        'title'=> 'title-4',
                        'desc_title'=> 'desc-4',
                        'desc'=> 'description 4',
                    ],
                ]
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
                'id' => 'contacts',
                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
            ],
        ]
    );
}

