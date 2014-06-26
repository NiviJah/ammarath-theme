<?php

return array(

		'Layout System' => array(
		'elements' => array(

			'grid'  => array(
				'title' => 'Bootstrap Grid',
				'code'  => '[grid][/grid]',
				'attributes' => array(
					array(
						'name'  => 'col_lg',
						'type'  => 'slider',
						'label' => __('Column Medium-large', 'vp_textdomain'),
						'min'   => 1,
						'max'   => 12,
					),
					array(
						'name'  => 'col_xs',
						'type'  => 'slider',
						'label' => __('Column Small-XS', 'vp_textdomain'),
						'min'   => 1,
						'max'   => 12,
					),
					array(
						'name'  => 'offset_lg',
						'type'  => 'slider',
						'label' => __('Large Offset', 'vp_textdomain'),
						'min'   => 0,
						'max'   => 11,
					),
										array(
						'name'  => 'offset_xs',
						'type'  => 'slider',
						'label' => __('Small Offset', 'vp_textdomain'),
						'min'   => 0,
						'max'   => 11,
					),
				),
			),

		)
	),


	'Showcase' => array(
		'elements'=> array(

			'section'  => array(
				'title' => 'Section',
				'code'  => '[section]',
				'attributes' => array(
					array(
						'name'  => 'title',
						'type'  => 'textarea',
						'label' => __('Title For Section', 'vp_textdomain'),
					),
					array(
						'name'  => 'section_content',
						'type'  => 'textarea',
						'label' => __('Content of Section', 'vp_textdomain'),
					),
					),
				),
						'call_to_action'  => array(
				'title' => 'Call To Action',
				'code'  => '[call_to_action]',
				'attributes' => array(
					array(
						'name'  => 'title',
						'type'  => 'textbox',
						'label' => __('Title For Call To Action', 'vp_textdomain'),
					),
					array(
						'name'  => 'section_content',
						'type'  => 'textarea',
						'label' => __('Content for Call To Action', 'vp_textdomain'),
					),
										array(
						'name'  => 'btn_text',
						'type'  => 'textbox',
						'label' => __('Text on button', 'vp_textdomain'),
					),
															array(
						'name'  => 'btn_link',
						'type'  => 'textbox',
						'label' => __('Link on button', 'vp_textdomain'),
					),
					),
				),

			'all_controls' => array(
				'title'   => 'All Controls',
				'code'    => '[controls][/controls]',
				'attributes' => array(
					array(
						'name'                       => 'wpeditor',
						'type'                       => 'wpeditor',
						'label'                      => __('WP Visual Editor', 'vp_textdomain'),
						'use_external_plugins'       => 1,
						'disabled_externals_plugins' => 'vp_sc_button',
						'disabled_internals_plugins' => '',
					),
					array(
						'name'  => 'radiobutton',
						'type'  => 'radiobutton',
						'label' => __('Radio Button', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'value_1',
								'label' => 'Value 1'
							),
							array(
								'value' => 'value_2',
								'label' => 'Value 2'
							),
							array(
								'value' => 'value_3',
								'label' => 'Value 3'
							),
						),
					),
					array(
						'name'  => 'checkbox',
						'type'  => 'checkbox',
						'label' => __('Checkbox', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'value_1',
								'label' => 'Value 1'
							),
							array(
								'value' => 'value_2',
								'label' => 'Value 2'
							),
							array(
								'value' => 'value_3',
								'label' => 'Value 3'
							),
						),
						'default' => array('{{first}}')
					),
					array(
						'name'  => 'select',
						'type'  => 'select',
						'label' => __('Select', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'value_1',
								'label' => 'Value 1'
							),
							array(
								'value' => 'value_2',
								'label' => 'Value 2'
							),
							array(
								'value' => 'value_3',
								'label' => 'Value 3'
							),
						),
					),
					array(
						'name'  => 'fontawesome',
						'type'  => 'fontawesome',
						'label' => __('Fontawesome Icon', 'vp_textdomain'),
					),
					array(
						'name'  => 'multiselect',
						'type'  => 'multiselect',
						'label' => __('Multiselect', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'value_1',
								'label' => 'Value 1'
							),
							array(
								'value' => 'value_2',
								'label' => 'Value 2'
							),
							array(
								'value' => 'value_3',
								'label' => 'Value 3'
							),
						),
						'default' => array('{{first}}')
					),
					array(
						'name'  => 'color',
						'type'  => 'color',
						'label' => __('Color', 'vp_textdomain'),
						'default' => '#00FF00',
					),
					array(
						'name'  => 'sorter',
						'type'  => 'sorter',
						'label' => __('Sorter', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'value_1',
								'label' => 'Value 1'
							),
							array(
								'value' => 'value_2',
								'label' => 'Value 2'
							),
							array(
								'value' => 'value_3',
								'label' => 'Value 3'
							),
						),
						'default' => array('{{first}}')
					),
					array(
						'name'  => 'slider',
						'type'  => 'slider',
						'label' => __('Slider', 'vp_textdomain'),
						'default' => '20',
						'min' => 5,
						'max' => 50,
					),
					array(
						'name'  => 'upload',
						'type'  => 'upload',
						'label' => __('Upload', 'vp_textdomain'),
					),
					array(
						'name'  => 'date',
						'type'  => 'date',
						'label' => __('Date', 'vp_textdomain'),
					),
					array(
						'name'  => 'textarea',
						'type'  => 'textarea',
						'label' => __('Textarea', 'vp_textdomain'),
						'default' => 'test',
					),
					array(
						'name'  => 'checkimage',
						'type'  => 'checkimage',
						'label' => __('Check Image', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'value_1',
								'label' => __('Label 1', 'vp_textdomain'),
								'img' => 'http://placehold.it/100x100',
							),
							array(
								'value' => 'value_2',
								'label' => __('Label 2', 'vp_textdomain'),
								'img' => 'http://placehold.it/120x80',
							),
							array(
								'value' => 'value_3',
								'label' => __('Label 3', 'vp_textdomain'),
								'img' => 'http://placehold.it/80x120',
							),
							array(
								'value' => 'value_4',
								'label' => __('Label 4', 'vp_textdomain'),
								'img' => 'http://placehold.it/50x50',
							),
						),
						'default' => array('{{first}}', '{{last}}'),
					),
					array(
						'name'  => 'radioimage',
						'type'  => 'radioimage',
						'label' => __('Radio Image', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'value_1',
								'label' => __('Label 1', 'vp_textdomain'),
								'img'   => 'http://placehold.it/100x100',
							),
							array(
								'value' => 'value_2',
								'label' => __('Label 2', 'vp_textdomain'),
								'img'   => 'http://placehold.it/120x80',
							),
							array(
								'value' => 'value_3',
								'label' => __('Label 3', 'vp_textdomain'),
								'img'   => 'http://placehold.it/80x120',
							),
							array(
								'value' => 'value_4',
								'label' => __('Label 4', 'vp_textdomain'),
								'img'   => 'http://placehold.it/50x50',
							),
						),
						'default' => array('{{first}}'),
					),
					array(
						'name'  => 'codeeditor',
						'type'  => 'codeeditor',
						'label' => __('Code Editor', 'vp_textdomain'),
						'default' => 'test',
					),
					array(
						'name'  => 'toggle',
						'type'  => 'toggle',
						'label' => __('Toggle', 'vp_textdomain'),
					),
				)
			),

		),
	),



	'Elements' => array(
		'elements'=> array(

			'button' => array(
				'title'   => 'Button',
				'code'    => '[button][/button]',
				'attributes' => array(
					array(
						'name'  => 'accent',
						'type'  => 'select',
						'label' => __('Color Accent', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'standard',
								'label' => 'Standard Color Accent'
							),
							array(
								'value' => 'alternative_1',
								'label' => 'Alternative 1 Color Accent'
							),
							array(
								'value' => 'alternative_2',
								'label' => 'Alternative 2 Color Accent'
							),
							array(
								'value' => 'alternative_3',
								'label' => 'Alternative 3 Color Accent'
							),
							array(
								'value' => 'alternative_4',
								'label' => 'Alternative 4 Color Accent'
							),
						),
						'default' => array('{{first}}')
					),
					array(
						'name'  => 'text_color',
						'type'  => 'color',
						'label' => __('Text Color', 'vp_textdomain'),
					),
					array(
						'name'  => 'background_color',
						'type'  => 'color',
						'label' => __('Background Color', 'vp_textdomain'),
					),
					array(
						'name'  => 'url',
						'type'  => 'textbox',
						'label' => __('Button URL', 'vp_textdomain'),
					),
				)
			),

			'list' => array(
				'title' => 'List',
				'code'  => '[list][li icon="" color=""]Item 1[/li][li icon="icon-ok" color=""]Item 2[/li][li icon="icon-remove" color=""]Item 3[/li][/list]',
			),

			'icon' => array(
				'title'   => 'Icon',
				'code'    => '[icon][/icon]',
				'attributes' => array(
					array(
						'name'  => 'size',
						'type'  => 'select',
						'label' => __('Size', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'small',
								'label' => 'small'
							),
							array(
								'value' => 'medium',
								'label' => 'medium'
							),
							array(
								'value' => 'large',
								'label' => 'large'
							),
						),
					),
					array(
						'name'  => 'name',
						'type'  => 'fontawesome',
						'label' => __('Icon name', 'vp_textdomain'),
					),
				)
			),

			'pricing_table' => array(
				'title' => 'Pricing Table',
				'code'  => '[pricing_table][/pricing_table]',
			),

			'pricing_column' => array(
				'title'   => 'Pricing Column',
				'code'    => '[pricing_column][/pricing_column]',
				'attributes' => array(
					array(
						'name'  => 'color_accent',
						'type'  => 'select',
						'label' => __('Color Accent', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'small',
								'label' => 'small'
							),
							array(
								'value' => 'medium',
								'label' => 'medium'
							),
							array(
								'value' => 'large',
								'label' => 'large'
							),
						),
					),
					array(
						'name'  => 'name',
						'type'  => 'fontawesome',
						'label' => __('Icon name', 'vp_textdomain'),
					),
				)
			),

		),
	),

	'Media Embeds' => array(
		'elements' => array(

			'youtube' => array(
				'title'   => 'Youtube',
				'code'    => '[youtube][/youtube]',
				'attributes' => array(
					array(
						'name'  => 'id',
						'label' => __('ID', 'vp_textdomain'),
						'type'  => 'textbox'
					),
					array(
						'name'  => 'width',
						'label' => __('Width', 'vp_textdomain'),
						'type'  => 'textbox'
					),
					array(
						'name'  => 'height',
						'label' => __('Height', 'vp_textdomain'),
						'type'  => 'textbox'
					),
				)
			),
			'vimeo' => array(
				'title'   => 'Vimeo',
				'code'    => '[vimeo][/vimeo]',
				'attributes' => array(
					array(
						'name'  => 'id',
						'label' => __('ID', 'vp_textdomain'),
						'type'  => 'textbox'
					),
					array(
						'name'  => 'width',
						'label' => __('Width', 'vp_textdomain'),
						'type'  => 'textbox'
					),
					array(
						'name'  => 'height',
						'label' => __('Height', 'vp_textdomain'),
						'type'  => 'textbox'
					),
				)
			),
			'soundcloud' => array(
				'title'   => 'Soundcloud',
				'code'    => '[soundcloud][/soundcloud]',
				'attributes' => array(
					array(
						'name'  => 'url',
						'label' => __('URL', 'vp_textdomain'),
						'type'  => 'textbox'
					),
					array(
						'name'  => 'width',
						'label' => __('Width', 'vp_textdomain'),
						'type'  => 'textbox'
					),
					array(
						'name'  => 'height',
						'label' => __('Height', 'vp_textdomain'),
						'type'  => 'textbox'
					),
					array(
						'name'  => 'color',
						'label' => __('Height', 'vp_textdomain'),
						'type'  => 'color'
					),
					array(
						'name'  => 'auto_play',
						'label' => __('Autoplay', 'vp_textdomain'),
						'type'  => 'toggle'
					),
					array(
						'name'  => 'show_comments',
						'label' => __('Show Comments', 'vp_textdomain'),
						'type'  => 'toggle'
					),
				)
			),

		)
	)

);

/**
 * EOF
 */