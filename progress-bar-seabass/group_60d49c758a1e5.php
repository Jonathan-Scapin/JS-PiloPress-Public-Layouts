<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60d49c758a1e5',
	'title' => 'Progress bar',
	'fields' => array(
		array(
			'key' => 'field_60d57645f648d',
			'label' => 'Content',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_60d49cccb0fb6',
			'label' => 'Icons',
			'name' => 'icons',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_flexible_advanced' => 1,
			'acfe_flexible_stylised_button' => 1,
			'acfe_flexible_layouts_templates' => 0,
			'acfe_flexible_layouts_placeholder' => 0,
			'acfe_flexible_layouts_thumbnails' => 0,
			'acfe_flexible_layouts_settings' => 0,
			'acfe_flexible_async' => array(
			),
			'acfe_flexible_add_actions' => array(
				0 => 'title',
			),
			'acfe_flexible_remove_button' => array(
			),
			'acfe_flexible_layouts_state' => 'user',
			'acfe_flexible_modal_edit' => array(
				'acfe_flexible_modal_edit_enabled' => '0',
				'acfe_flexible_modal_edit_size' => 'large',
			),
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => '0',
				'acfe_flexible_modal_title' => false,
				'acfe_flexible_modal_size' => 'full',
				'acfe_flexible_modal_col' => '4',
				'acfe_flexible_modal_categories' => false,
			),
			'layouts' => array(
				'layout_60d576ec9de75' => array(
					'key' => 'layout_60d576ec9de75',
					'name' => 'icon',
					'label' => 'Icon',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_60d57717f648e',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'uploader' => 'wp',
							'acfe_thumbnail' => 0,
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_60d5773ef648f',
							'label' => 'Description',
							'name' => 'description',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_save_meta' => 0,
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_60d49db6b0fbc',
							'label' => 'empty bar color',
							'name' => 'empty_bar_color',
							'type' => 'pip_font_color',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_save_meta' => 0,
							'field_type' => 'select',
							'placeholder' => '',
							'multiple' => 0,
							'ui' => 0,
							'layout' => 'vertical',
							'toggle' => 0,
							'pip_default_value' => '',
							'class_output' => 'background',
							'show_add_to_editor' => 1,
							'choices' => array(
							),
							'return_format' => 'value',
							'allow_null' => true,
							'other_choice' => 0,
							'allow_custom' => 0,
							'ajax' => false,
						),
						array(
							'key' => 'field_60d49dddb0fbd',
							'label' => 'progress bar color',
							'name' => 'progress_bar_color',
							'type' => 'pip_font_color',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_save_meta' => 0,
							'field_type' => 'select',
							'multiple' => 0,
							'ui' => 0,
							'pip_default_value' => '',
							'class_output' => 'background',
							'show_add_to_editor' => 1,
							'choices' => array(
							),
							'placeholder' => '',
							'return_format' => 'value',
							'allow_null' => true,
							'other_choice' => 0,
							'allow_custom' => 0,
							'ajax' => false,
						),
						array(
							'key' => 'field_60d5d3427ce1b',
							'label' => 'progress bar width',
							'name' => 'progress_bar_width',
							'type' => 'number',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 0,
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'min' => 0,
							'max' => 100,
							'step' => '',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_thumbnail' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
			),
			'button_label' => 'Ajouter un élément',
			'min' => '',
			'max' => '',
			'acfe_flexible_hide_empty_message' => false,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_layouts_previews' => false,
		),
		array(
			'key' => 'field_60d49d5cb0fba',
			'label' => 'Configuration',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_60d49d7ab0fbb',
			'label' => 'Bar height',
			'name' => 'bar_height',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'4px' => '4px',
				'8px' => '8px',
				'12px' => '12px',
				'16px' => '16px',
				'20px' => '20px',
				'24px' => '24px',
				'28px' => '28px',
				'32px' => '32px',
			),
			'default_value' => '8px',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'all',
			),
		),
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'_pip_thumbnail' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'_pip_is_layout' => 1,
	'_pip_layout_slug' => 'progress-bar-seabass',
	'_pip_render_layout' => 'progress-bar-seabass.php',
	'_pip_render_style' => 'progress-bar-seabass.css',
	'_pip_render_script' => 'progress-bar-seabass.js',
	'field_add_config_file' => 1,
	'_pip_config_file' => 'configuration.php',
	'field_add_configuration' => 0,
	'pip_layout_var' => '',
	'pip_layout_vars_lock' => 0,
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'layout_categories' => array(
		'bar' => 'Bar',
	),
	'layout_collections' => array(
		'seabass' => 'seabass',
	),
	'modified' => 1624626071,
));

endif;