<?php
get_template_part('views/overall/layout');
function render_content()
{

    //content

    get_template_part('views/blocks/hero', null,
        [
            'fields' => [
                'style' => '',
                'class' => 'animate up',
                'id' => 'about',
                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
                'title' => 'Front-End Developer',
                'name' => 'Zadorozhniy Kostiantyn',
                'techtitle' => 'technology',
                'tech' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
                'slides' => ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight'],
            ],
        ]
    );

    get_template_part('views/blocks/hero', null,
        [
            'fields' => [
                'style' => '',
                'class' => 'animate up',
                'id' => 'portfolio',
                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
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

