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
                'image' => get_project_field('about_image',get_template_directory_uri() . '/assets/img/hero.webp'),
                'title' => get_project_field('about_title', 'Front-End Developer'),
                'name' => get_project_field('about_name', 'Zadorozhniy Kostiantyn'),
                'techtitle' => get_project_field('about_techtitle', 'technology'),
                'tech' => get_project_field('about_tech',
                    ['HTML', 'CSS', 'SCSS', 'JavaScript', 'TypeScript', 'PHP', 'React', 'Next', 'WordPress', 'Twig']
                ),
                'slides' => get_project_field('about_slides',
                    [
                        [
                            'slug' => 'animation',
                            'text' => 'Passionate about creating interactive animations with SVG and JavaScript',
                            'svg' => 'animation',
                        ],
                        [
                            'slug' => 'experience',
                            'text' => 'Over three years of practical experience in front‑end development',
                            'svg' => 'experience',
                        ],
                        [
                            'slug' => 'start',
                            'text' => 'Began learning and working with web technologies in 2022',
                            'svg' => 'start',
                        ],

                        [
                            'slug' => 'education',
                            'text' => 'Technical background in computer systems, continuously improving programming skills',
                            'svg' => 'education',
                        ],
                    ],

                ),

            ],
        ]
    );

    get_template_part('views/blocks/multi-slider', null,
        [
            'fields' => [
                'style' => '',
                'class' => '',
                'id' => 'portfolio',
                'timer' => get_project_field( 'multi_slider_timer','3000'),
                'title' => get_project_field( 'multi_slider_title','portfolio'),
                'slides' => get_project_field( 'multi_slider_slides', [
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
                ],),

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
                                    <p>Focused on developing modern web projects with a full cycle approach — from architecture to deployment. Experienced in building applications with React.jsand Next.js, creating component systems in PHP + Twig for WordPress, and applying SCSS with BEM methodology for clean and scalable styling.</p>
                                    <p>Skilled in JavaScript and TypeScript, integrating interactive features and SVG animations to deliver engaging user experiences. I apply structured approaches and development methodologies — modular architecture, component‑driven design, and pragmatic coding practices — balancing minimalism with maintainability. I also explore and integrate AI‑powered tools such as Copilot to accelerate development, automate repetitive tasks, and enhance productivity.</p>
                                    <p>My workflow emphasizes clarity and structure: from Git‑based version control and code review practices to applying methodologies that keep projects scalable and maintainable. I combine technical precision with creativity, ensuring that each project is both robust and engaging for end users.</p>
                                ',
                    ],
                    [
                        'title' => 'Drone engineering | 2025 – 2026',
                        'picture' => get_template_directory_uri() . '/assets/img/drone.jpg',
                        'desc' => '
                                    <p>Engineer‑operator of UAVs with practical experience in assembly, maintenance, and flight testing.</p>
                                    <p>Skilled in soldering power elements of drones and fine soldering of delicate components, ensuring reliability of electronic systems.</p>
                                    <p>Optimized assembly processes by applying sequential and conveyor methods to accelerate production and improve efficiency.</p>
                                    <p>Conducted UAV flight tests under load conditions to evaluate endurance, stability, and performance.</p>
                                ',
                    ],

                    [
                        'title' => 'Senior Engineer in National Police of Ukraine | 2014 – 2020',
                        'picture' => get_template_directory_uri() . '/assets/img/drone.jpg',

                        'desc' => '
                                <p>Managed the development and maintenance of networks — Internet, video surveillance, radio communications, signaling. Ensured uninterrupted operation of critical infrastructure.</p>
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
                        'title' => 'Front-End Developer | 2022 – Present',
                        'desc' => '
                                <p>Started my learning journey in 2022 with the basics of HTML, gradually expanding into CSS and JavaScript. Step by step, I moved from simple layouts to object‑oriented programming and real‑world tasks, building a solid foundation in front‑end development.</p>
                                <p>Independently designed and deployed a custom Back‑end for <a href="https://funny-fudge-ddda7b.netlify.app/api/items">bikes‑placeholder</a>, connecting a MySQL database via Neon. My diploma project <a href="https://i-love-my-bike.netlify.app/">i‑love‑my‑bike</a> became a full‑fledged application with its own infrastructure built on Next.js + TypeScript, combining modern frameworks with structured methodologies like SCSS with BEM.</p>
                                <p>Alongside technical growth, I improved English through group lessons, discussions, and presentations, and strengthened teamwork skills — from brainstorming to collaborative problem‑solving. This period marked the transition from learning fundamentals to applying structured approaches, integrating AI‑powered tools, and developing scalable, creative projects.</p>
                                ',
                    ],
                    [
                        'title' => 'Bachelor of Law | 2020',
                        'desc' => '
                                <p>Studied at the National Academy of Internal Affairs, where I gained a foundation in law and logical analysis — developing systematic thinking and the ability to evaluate complex situations.</p>
                                <p>Explored intellectual property and copyright, including licensing, NDA agreements, and digital product protection. Acquired knowledge in information security and confidentiali focusing on handling sensitive data and managing secure access.</p>
                                <p>Practiced document management and legal documentation — drafting, reviewing, and supporting official records. This education provided an interdisciplinary perspective, combining IT awareness with legal and security principles useful for modern digital projects.</p>
                            ',
                    ],
                    [
                        'title' => 'Information Management Systems',
                        'desc' => '
                                <p>Studied at the National University of Food Technologies, focusing on programming fundamentals and algorithmic thinking — building the foundation for writing clean and efficient code.</p>
                                <p>Explored mathematical formulas and optimization to simplify logic and improve performance. Learned principles of encryption and data protection, gaining an understanding of cryptographic approaches and secure information transfer. Applied mathematical knowledge to animations and visualization, creating movement, transformations, and graphical effects.</p>
                                <p>Acquired insights into hardware and circuit design, understanding how systems operate beneath the software layer. This education provided a multidisciplinary perspective, combining programming, mathematics, security, and hardware knowledge — a strong technical base that supports my current development work.</p>
                            ',

                    ],
                    [
                        'title' => 'Electronics Engineer, Hardware Design',
                        'desc' => '
                                <p>Studied circuit design and radio electronics — designing and calculating electronic circuits.</p>
                                <p>Learned soldering and assembly techniques, both manual and automated, for electronic components. Explored materials science, understanding the properties of conductors, semiconductors, and dielectrics.</p>
                                <p>Gained knowledge in mechanics and construction, including the development of casings and mechanical parts for hardware. Practiced measurement techniques with oscilloscopes, multimeters, and signal analysis tools.</p>
                                <p>Worked with technical documentation — reading and creating circuit diagrams, specifications, and drawings. Acquired skills in diagnostics and repair, identifying faults and restoring electronic equipment.</p>
                            ',
                    ],
                ],
            ],
        ]
    );

    get_template_part('views/blocks/animation', null,
        [
            'fields' => [
                'style' => '',
                'class' => '',
                'id' => 'animations',
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

