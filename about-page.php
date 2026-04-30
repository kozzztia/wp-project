<?php
get_template_part('views/overall/layout');
function render_content()
{
    echo "about";
    //content
    get_template_part('views/blocks/example', null,
        [
            'fields' => [
                'type' => 'block',
                'style' => 'color : green',
                'class' => 'example',
            ],
        ]
    );
}

