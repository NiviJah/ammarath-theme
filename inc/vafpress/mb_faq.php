<?php

return array(
    'id'          => 'faq',
    'types'       => array('page'),
    'title'       => __('FAQ', 'ammarath'),
    'include_template' => array('faq.php'),
    'priority'    => 'high',
    'template'    => array(

        array(
            'type'      => 'group',
            'repeating' => true,
            'name'      => 'faq',
            'title'     => __('FAQ', 'ammarath'),
            'fields'    => array(

                array(
                    'type'        => 'textbox',
                    'name'        => 'faq_title',
                    'label'       => __('FAQ Title', 'ammarath'),
                    'description' => __('Add a Title', 'ammarath'),
                    'default'     => 'What is the meaning of life ?',
                    ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'faq_content',
                    'label'       => __('FAQ Content', 'ammarath'),
                    'description' => __('Add Some Content', 'ammarath'),
                    'default'     => '42',
                    ),

                /* more controls fields or even nested group ... */
                ),
),
),
);

