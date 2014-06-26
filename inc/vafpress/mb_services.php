<?php

return array(
    'id'          => 'services',
    'types'       => array('page'),
    'title'       => __('Services Content', 'ammarath'),
    'include_template' => array('services.php'),
    'priority'    => 'high',
    'template'    => array(
        array(
            'type' => 'toggle',
            'name' => 'use_services_layout',
            'label' => __('Use Custom Layout Builder', 'vp_textdomain'),
            'description' => __('Lazy ? Ammarath has an awesome pre-made template you can use', 'vp_textdomain'),
            'default' => '0',
            ),
        array(
            'type'      => 'group',
            'repeating' => false,
            'name'      => 'service_blocks',
            'title'     => __('Services Blocks', 'ammarath'),
            'dependency' => array(
                'field'    => 'use_services_layout',
                'function' => 'vp_dep_boolean',
                ),
            'fields'    => array(
                array(
                    'type'        => 'textbox',
                    'name'        => 'block_1_title',
                    'label'       => __('Block 1 Title', 'ammarath'),
                    'description' => __('Insert a Title For Block 1.', 'ammarath'),
                    'default'     => 'Our Premium Services',
                    ),
                array(
                    'type'        => 'textarea',
                    'name'        => 'block_1_content',
                    'label'       => __('Block 1 Content', 'ammarath'),
                    'description' => __('Insert Content For Block 1.', 'ammarath'),
                    'default'     => 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'block_2_title',
                    'label'       => __('Block 2 Title', 'ammarath'),
                    'description' => __('Insert a Title For Block 2.', 'ammarath'),
                    'default'     => 'Our Premium Services',
                    ),
                array(
                    'type'        => 'textarea',
                    'name'        => 'block_2_content',
                    'label'       => __('Block 2 Content', 'ammarath'),
                    'description' => __('Insert Content For Block 2.', 'ammarath'),
                    'default'     => 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                    ),



                /* more controls fields or even nested group ... */
                ),
),
array(
    'type'      => 'group',
    'repeating' => true,
    'name'      => 'services_tabs',
    'title'     => __('Services Tabs', 'ammarath'),
    'dependency' => array(
        'field'    => 'use_services_layout',
        'function' => 'vp_dep_boolean',
        ),
    'fields'    => array(
       array(
        'type' => 'fontawesome',
        'name' => 'fa_tab',
        'label' => __('Fontawesome Icon', 'vp_textdomain'),
        'description' => __('Fontawesome icon chooser for the tab content.', 'vp_textdomain'),
        ),
       array(
        'type'        => 'textbox',
        'name'        => 'tab_title',
        'label'       => __('Tab Title', 'ammarath'),
        'description' => __('Insert a Title For a Tab.', 'ammarath'),
        'default'     => 'Service One',
        ),
       array(
        'type'        => 'textarea',
        'name'        => 'tab_content',
        'label'       => __('Tab Content', 'ammarath'),
        'description' => __('Insert Content For The Tab.', 'ammarath'),
        'default'     => 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
        ),




       /* more controls fields or even nested group ... */
       ),
),
array(
    'type'      => 'group',
    'repeating' => true,
    'name'      => 'services_images',
    'title'     => __('Services Images', 'ammarath'),
    'dependency' => array(
        'field'    => 'use_services_layout',
        'function' => 'vp_dep_boolean',
        ),
    'fields'    => array(

        array(
            'type'        => 'upload',
            'name'        => 'services_images_image',
            'label'       => __('Image', 'ammarath'),
            'description' => __('Upload a service image.', 'ammarath'),
            'default'     => 'http://placehold.it/750x450',
            ),
        array(
            'type'        => 'textbox',
            'name'        => 'services_images_title',
            'label'       => __('Service Title', 'ammarath'),
            'description' => __('Add a service title', 'ammarath'),
            'default'     => 'Service One',
            ),
        array(
            'type'        => 'textarea',
            'name'        => 'services_images_content',
            'label'       => __('Service Content', 'ammarath'),
            'description' => __('Add a service content', 'ammarath'),
            'default'     => 'Service one description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.',
            ),
        array(
            'type'        => 'textbox',
            'name'        => 'services_images_link',
            'label'       => __('Read More Link', 'ammarath'),
            'description' => __('Add a link', 'ammarath'),
            'default'     => '/blog',
            ),




        /* more controls fields or even nested group ... */
        ),
),
),

);


