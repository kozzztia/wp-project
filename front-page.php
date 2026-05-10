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
                        'slug' => 'animation',
                        'text' => 'Passionate about creating interactive animations with SVG and JavaScript',
                        'image' => 'animation',
                    ],
                    [
                        'slug' => 'experience',
                        'text' => 'Over three years of practical experience in front‑end development',
                        'image' => 'experience',
                    ],
                    [
                        'slug' => 'start',
                        'text' => 'Began learning and working with web technologies in 2022',
                        'image' => 'start',
                    ],

                    [
                        'slug' => 'education',
                        'text' => 'Technical background in computer systems, continuously improving programming skills',
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
                        'slug' => 'commercial',
                        'title' => 'Stolen Life',
                        'image' => get_template_directory_uri() . '/assets/img/stolen-life.webp',
                        'link' => ['url' => 'https://stolenlife.org/', 'title' => 'view', 'class' => 'green', 'target' => '_blank'],
                    ],
                    [
                        'slug' => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/pet-portfolio.webp',
                        'link' => ['url' => 'https://kozzztia.github.io/my-project/', 'title' => 'show', 'class' => 'green', 'target' => '_blank']
                    ],
                    [
                        'slug' => 'animation project',
                        'image' => get_template_directory_uri() . '/assets/img/scooter.webp',
                        'link' => ['url' => 'https://kozzztia.github.io/scooter/home', 'title' => 'show', 'class' => 'green', 'target' => '_blank']
                    ],

                    [
                        'slug' => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/i-love-my-bike.webp',
                        'link' => ['url' => 'https://i-love-my-bike.netlify.app/', 'title' => 'show', 'class' => 'green', 'target' => '_blank']
                    ],
                    [
                        'slug' => 'empty project',
                    ],
                    [
                        'slug' => 'commercial',
                        'title' => 'Stolen Life',
                        'image' => get_template_directory_uri() . '/assets/img/stolen-life.webp',
                        'link' => ['url' => 'https://stolenlife.org/', 'title' => 'view', 'class' => 'green', 'target' => '_blank']
                    ],
                    [
                        'slug' => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/pet-portfolio.webp',
                        'link' => ['url' => 'https://kozzztia.github.io/my-project/', 'title' => 'show', 'class' => 'green', 'target' => '_blank']
                    ],
                    [
                        'slug' => 'animation project',
                        'image' => get_template_directory_uri() . '/assets/img/scooter.webp',
                        'link' => ['url' => 'https://kozzztia.github.io/scooter/home', 'title' => 'show', 'class' => 'green', 'target' => '_blank']
                    ],

                    [
                        'slug' => 'pet project',
                        'image' => get_template_directory_uri() . '/assets/img/i-love-my-bike.webp',
                        'link' => ['url' => 'https://i-love-my-bike.netlify.app/', 'title' => 'view', 'class' => 'green', 'target' => '_blank']
                    ],
                    [
                        'slug' => 'pet project',
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
                'title_1' => 'experience',
                'tabs_1' => [
                    [
                        'title' => 'Freelance Front-End Developer | 2024 – Present',
                        'picture' => get_template_directory_uri() . '/assets/img/drone.jpg',

                        'desc' => '
                                <p>Started my career as part of the team developing <strong>Caroinspection</strong> — a tool for car diagnostics. This was my first experience of teamwork: from setting tasks to deployment. Used React.js, TypeScript, SCSS, Canvas, SVG, Redux, Node.js. Independently explored Next.js and integrated AI tools during the development process.</p>
                                <p>Since moving to <strong>freelancing</strong>, I have been engaged in the full cycle of creating web projects — from architecture to deployment. I develop component systems in PHP + Twig for WordPress, apply SCSS with BEM structure. I choose projects that allow creativity: SVG animations, pure CSS solutions without JS, interactive interfaces that respond to user interaction.</p>
                                ',
                    ],
                    [
                        'title' => 'Drone engineering | 2025 – 2026',
                        'picture' => get_template_directory_uri() . '/assets/img/drone.jpg',
                        'desc' => '
                                <p>Managed the development and maintenance of networks — Internet, video surveillance, radio communications, signaling. Ensured uninterrupted operation of critical infrastructure.</p>
                                <p>Administered the Armor database, optimized access and security, and maintained specialized equipment.</p>
                                <p>Engineer‑operator of UAVs. Participant in the ATO and defense forces, with official veteran status of combat operations.</p>
                                ',
                    ],
                    [
                        'title' => 'Senior Engineer in National Police of Ukraine | 2014 – 2020',
                        'picture' => get_template_directory_uri() . '/assets/img/drone.jpg',

                        'desc' => '
                                <p>Managed the development and maintenance of networks — <strong>Internet</strong>, video surveillance, radio communications, signaling. Ensured uninterrupted operation of critical infrastructure.</p>
                                <p>Administered the Armor database, optimized access and security, and maintained specialized equipment.</p>
                                <p>Engineer‑operator of UAVs. Participant in the ATO and defense forces, with official veteran status of combat operations.</p>
                                ',
                    ],
                    [
                        'title' => 'Internet Service Provider Engineer | 2008 – 2014',
                        'picture' => get_template_directory_uri() . '/assets/img/optic.jpg',
                        'desc' => '
                                <p>Designed and implemented Internet networks for a regional provider, leading infrastructure projects to improve reliability and efficiency.</p>
                                <p>Oversaw network construction and maintenance, ensuring stable connectivity and service quality for clients.</p>
                                <p>Delivered responsive customer support and resolved technical issues promptly, maintaining high satisfaction levels.</p>
                              ',
                    ],
                ],
                'title_2' => 'study',
                'tabs_2' => [
                    [
                        'title' => 'Freelance Front-End Developer | 2024 – Present',
                        'desc' => '
                                <p>Started my career as part of the team developing <strong>Caroinspection</strong> — a tool for car diagnostics. This was my first experience of teamwork: from setting tasks to deployment. Used React.js, TypeScript, SCSS, Canvas, SVG, Redux, Node.js. Independently explored Next.js and integrated AI tools during the development process.</p>
                                <p>Since moving to <strong>freelancing</strong>, I have been engaged in the full cycle of creating web projects — from architecture to deployment. I develop component systems in PHP + Twig for WordPress, apply SCSS with BEM structure. I choose projects that allow creativity: SVG animations, pure CSS solutions without JS, interactive interfaces that respond to user interaction.</p>
                                ',
                    ],
                    [
                        'title' => 'Drone engineering | 2025 – 2026',
                        'picture' => get_template_directory_uri() . '/assets/img/drone.jpg',
                        'desc' => '
                                <p>Managed the development and maintenance of networks — Internet, video surveillance, radio communications, signaling. Ensured uninterrupted operation of critical infrastructure.</p>
                                <p>Administered the Armor database, optimized access and security, and maintained specialized equipment.</p>
                                <p>Engineer‑operator of UAVs. Participant in the ATO and defense forces, with official veteran status of combat operations.</p>
                                ',
                    ],
                    [
                        'title' => 'Senior Engineer in National Police of Ukraine | 2014 – 2020',
                        'desc' => '
                                <p>Managed the development and maintenance of networks — <strong>Internet</strong>, video surveillance, radio communications, signaling. Ensured uninterrupted operation of critical infrastructure.</p>
                                <p>Administered the Armor database, optimized access and security, and maintained specialized equipment.</p>
                                <p>Engineer‑operator of UAVs. Participant in the ATO and defense forces, with official veteran status of combat operations.</p>
                                ',
                    ],
                    [
                        'title' => 'Internet Service Provider Engineer | 2008 – 2014',
                        'picture' => get_template_directory_uri() . '/assets/img/optic.jpg',
                        'desc' => '
                                <p>Designed and implemented Internet networks for a regional provider, leading infrastructure projects to improve reliability and efficiency.</p>
                                <p>Oversaw network construction and maintenance, ensuring stable connectivity and service quality for clients.</p>
                                <p>Delivered responsive customer support and resolved technical issues promptly, maintaining high satisfaction levels.</p>
                              ',
                    ],
                ],
            ],
        ]
    );
//
//    get_template_part('views/blocks/hero', null,
//        [
//            'fields' => [
//                'style' => '',
//                'class' => 'animate up',
//                'id' => 'study',
//                'image' => get_template_directory_uri() . '/assets/img/hero.webp',
//            ],
//        ]
//    );


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

