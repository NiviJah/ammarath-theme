<?php

return array(
    'id'          => 'homepage_layout',
    'types'       => array('page'),
    'title'       => __('Homepage Layout', 'ammarath'),
    'include_template' => array('home-page.php'),
    'priority'    => 'high',
    'template'    => array(
        array(
            'type'      => 'group',
            'repeating' => false,
            'name'      => 'boxes',
            'title'     => __('Homepage Boxes', 'ammarath'),
            'fields'    => array(
                array(
                    'type'        => 'textbox',
                    'name'        => 'box_1_title',
                    'label'       => __('Title', 'ammarath'),
                    'description' => __('Title for box 1.', 'ammarath'),
                    'default'     => 'Bootstrap 3 Built',
                    ),
                array(
                    'type' => 'fontawesome',
                    'name' => 'fa_box_1',
                    'label' => __('Fontawesome Icon', 'vp_textdomain'),
                    'description' => __('Fontawesome icon chooser for the tab content.', 'vp_textdomain'),
                    ),
                array(
                    'type'        => 'textarea',
                    'name'        => 'box_1_content',
                    'label'       => __('Content', 'ammarath'),
                    'description' => __('Content for box 1.', 'ammarath'),
                    'default'     => 'The \'Modern Business\' website template by Start Bootstrap is built with Bootstrap 3. Make sure you\'re up to date with latest Bootstrap documentation!',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'box_2_title',
                    'label'       => __('Title', 'ammarath'),
                    'description' => __('Title for box 2.', 'ammarath'),
                    'default'     => 'Ready to Style & Edit',
                    ),
                array(
                    'type' => 'fontawesome',
                    'name' => 'fa_box_2',
                    'label' => __('Fontawesome Icon', 'vp_textdomain'),
                    'description' => __('Fontawesome icon chooser for the tab content.', 'vp_textdomain'),
                    ),
                array(
                    'type'        => 'textarea',
                    'name'        => 'box_2_content',
                    'label'       => __('Content', 'ammarath'),
                    'description' => __('Content for box 2.', 'ammarath'),
                    'default'     => 'You\'re ready to go with this pre-built page structure, now all you need to do is add your own custom stylings! You can see some free themes over at Bootswatch, or come up with your own using the Bootstrap customizer!',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'box_3_title',
                    'label'       => __('Title', 'ammarath'),
                    'description' => __('Title for box 3.', 'ammarath'),
                    'default'     => 'Many Page Options',
                    ),
                array(
                    'type' => 'fontawesome',
                    'name' => 'fa_box_3',
                    'label' => __('Fontawesome Icon', 'vp_textdomain'),
                    'description' => __('Fontawesome icon chooser for the tab content.', 'vp_textdomain'),
                    ),
                array(
                    'type'        => 'textarea',
                    'name'        => 'box_3_content',
                    'label'       => __('Content', 'ammarath'),
                    'description' => __('Content for box 3.', 'ammarath'),
                    'default'     => 'This template features many common pages that you might see on a business website. Pages include: about, contact, portfolio variations, blog, pricing, FAQ, 404, services, and general multi-purpose pages.',
                    ),
                


                /* more controls fields or even nested group ... */
                ),
),
array(
    'type'      => 'group',
    'repeating' => false,
    'name'      => 'homepage_quote_section',
    'title'     => __('Quote Section', 'ammarath'),
    'fields'    => array(
        array(
            'type'        => 'textbox',
            'name'        => 'homepage_quote_section_title',
            'label'       => __('Section Title', 'ammarath'),
            'description' => __('Add a title for the section.', 'ammarath'),
            'default'     => 'Modern Business: A Clean & Simple Full Website Template by Start Bootstrap',
            ),
        array(
            'type'        => 'textarea',
            'name'        => 'homepage_quote_section_content',
            'label'       => __('Section Content', 'ammarath'),
            'description' => __('Add A Section Content', 'ammarath'),
            'default'     => 'A complete website design featuring various single page templates from Start Bootstraps library of free HTML starter templates.',
            ),
        ),
    ),
array(
    'type' => 'toggle',
    'name' => 'portfolio_true',
    'label' => __('Display Portfolio', 'vp_textdomain'),
    'description' => __('Do you want to display the portfolio in the homepage ?', 'vp_textdomain'),
    'default' => '1',
    ),
array(
    'type'      => 'group',
    'repeating' => false,
    'name'      => 'homepage_portfolio',
    'title'     => __('Homepage Portfolio', 'ammarath'),
    'dependency' => array(
        'field'    => 'portfolio_true',
        'function' => 'vp_dep_boolean',
        ),
    'fields'    => array(
        array(
            'type'        => 'textbox',
            'name'        => 'portfolio_title',
            'label'       => __('Portfolio Title', 'ammarath'),
            'description' => __('Add a title for the portfolio section.', 'ammarath'),
            'default'     => 'Display Some Work on the Home Page Portfolio',
            ),

        ),
    ),

array(
    'type'      => 'group',
    'repeating' => false,
    'name'      => 'homepage_featured_left',
    'title'     => __('Homepage Featured Right Image', 'ammarath'),
    'fields'    => array(
        array(
            'type'        => 'wpeditor',
            'name'        => 'homepage_featured_left_content',
            'label'       => __('Content', 'ammarath'),
            'description' => __('Add some HTML Content.', 'ammarath'),
            'default'     => '',
            ),
        array(
            'type'        => 'upload',
            'name'        => 'homepage_featured_left_image',
            'label'       => __('Image', 'ammarath'),
            'description' => __('Add an image.', 'ammarath'),
            'default'     => 'http://placehold.it/750x450',
            ),

        ),
    ),
array(
    'type'      => 'group',
    'repeating' => false,
    'name'      => 'homepage_featured_right',
    'title'     => __('Homepage Featured Left Image', 'ammarath'),
    'fields'    => array(
        array(
            'type'        => 'wpeditor',
            'name'        => 'homepage_featured_right_content',
            'label'       => __('Content', 'ammarath'),
            'description' => __('Add some HTML Content.', 'ammarath'),
            'default'     => '',
            ),
        array(
            'type'        => 'upload',
            'name'        => 'homepage_featured_right_image',
            'label'       => __('Image', 'ammarath'),
            'description' => __('Add an image.', 'ammarath'),
            'default'     => 'http://placehold.it/750x450',
            ),

        ),
    ),
array(
    'type'      => 'group',
    'repeating' => false,
    'name'      => 'call_to_action',
    'title'     => __('Call To Action', 'ammarath'),
    'fields'    => array(
        array(
            'type'        => 'textbox',
            'name'        => 'call_to_action_title',
            'label'       => __('Title', 'ammarath'),
            'description' => __('Add A Title.', 'ammarath'),
            'default'     => '',
            ),
        array(
            'type'        => 'textarea',
            'name'        => 'call_to_action_title_content',
            'label'       => __('Image', 'ammarath'),
            'description' => __('Add an image.', 'ammarath'),
            'default'     => 'http://placehold.it/750x450',
            ),
        array(
            'type'        => 'textbox',
            'name'        => 'call_to_action_btn_text',
            'label'       => __('Text On Button', 'ammarath'),
            'description' => __('Add Text.', 'ammarath'),
            'default'     => '',
            ),
        array(
            'type'        => 'textbox',
            'name'        => 'call_to_action_btn_link',
            'label'       => __('Link On Button', 'ammarath'),
            'description' => __('Add Link.', 'ammarath'),
            'default'     => '',
            ),

        ),
),
),

);

