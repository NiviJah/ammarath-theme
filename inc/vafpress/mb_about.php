<?php

return array(
    'id'          => 'team_members',
    'types'       => array('page'),
    'title'       => __('Team Members', 'ammarath'),
    'include_template' => array('template-about.php'),
    'priority'    => 'high',
    'template'    => array(

        array(
            'type'        => 'textbox',
            'name'        => 'team_section_title',
            'label'       => __('Section Title', 'ammarath'),
            'description' => __('Add a Title For Our Team Section', 'ammarath'),
            'default'     => 'Our Team',
            ),

        array(
            'type'      => 'group',
            'repeating' => true,
            'name'      => 'member_details',
            'title'     => __('Team Member', 'ammarath'),
            'fields'    => array(
                array(
                    'type'        => 'upload',
                    'name'        => 'member_image',
                    'label'       => __('Member Image', 'ammarath'),
                    'description' => __('Insert a team member\'s image.', 'ammarath'),
                    'default'     => 'http://placehold.it/750x450',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'member_name',
                    'label'       => __('Member Name', 'ammarath'),
                    'description' => __('Insert a team member\'s name.', 'ammarath'),
                    'default'     => 'John Doe',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'member_title',
                    'label'       => __('Job Title', 'ammarath'),
                    'description' => __('Insert a team member\'s Job Title.', 'ammarath'),
                    'default'     => 'CEO',
                    ),
                array(
                    'type'        => 'textarea',
                    'name'        => 'member_description',
                    'label'       => __('Description', 'ammarath'),
                    'description' => __('Insert a team member\'s description.', 'ammarath'),
                    'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'facebook_link',
                    'label'       => __('Facebook', 'ammarath'),
                    'description' => __('Add Facebook Link', 'ammarath'),
                    'default'     => 'http://facebook.com',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'twitter_link',
                    'label'       => __('Twitter', 'ammarath'),
                    'description' => __('Add Twitter Link', 'ammarath'),
                    'default'     => 'http://twitter.com',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'google_plus_link',
                    'label'       => __('Google Plus', 'ammarath'),
                    'description' => __('Add Google Plus Link', 'ammarath'),
                    'default'     => 'http://google.com/plus',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'linkedin_link',
                    'label'       => __('Linkedin', 'ammarath'),
                    'description' => __('Add Linkedin Link', 'ammarath'),
                    'default'     => 'http://Linkedin.com',
                    ),


                /* more controls fields or even nested group ... */
                ),
),
        array(
            'type'      => 'group',
            'repeating' => true,
            'name'      => 'customers_gallery',
            'title'     => __('Our Customers Gallery', 'ammarath'),
            'fields'    => array(
                                                array(
                    'type'        => 'textbox',
                    'name'        => 'our_customers_title',
                    'label'       => __('Section Title', 'ammarath'),
                    'description' => __('Add a title for the logos section.', 'ammarath'),
                    'default'     => 'Our Customers',
                    ),
                            array(
                    'type'        => 'upload',
                    'name'        => 'image_1',
                    'label'       => __('image', 'ammarath'),
                    'description' => __('Add A Cutomer Logo', 'ammarath'),
                    'default'     => 'http://placehold.it/500x300',
                    ),
                            ),
            ),
),
);

