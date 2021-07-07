<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60db8903e26c2',
	'title' => 'cookie banner',
	'fields' => array(
		array(
			'key' => 'field_60dc5d16c4ddf',
			'label' => 'Title',
			'name' => 'title',
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
			'key' => 'field_60db8929233e9',
			'label' => 'Content',
			'name' => 'content',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_60dc24df7f4b7',
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
			'uploader' => '',
			'acfe_thumbnail' => 0,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'library' => 'all',
		),
		array(
			'key' => 'field_60dc5ff519130',
			'label' => 'Consent',
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
			'key' => 'field_60dc619019132',
			'label' => 'Consent mode',
			'name' => 'consent_mode',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_60dc5e3f1a254',
			'label' => 'button agree',
			'name' => 'button_agree',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'default_value' => '<button class="relative rounded-lg transition-all duration-300 inline-flex items-center justify-center text-sm font-bold text-white px-4 py-3 leading-none bg-blue-500 border border-solid border-blue-500 mr-2 mb-2">Agree</button>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_60dc5e731a255',
			'label' => 'button disagree',
			'name' => 'button_disagree',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'default_value' => '<button class="relative rounded-lg transition-all duration-300 inline-flex items-center justify-center text-sm font-bold text-white px-4 py-3 leading-none bg-red-500 border border-solid border-red-500 mr-2 mb-2">Disagree</button>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_60dc209787d0b',
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
			'key' => 'field_60dc20b287d0c',
			'label' => 'banner position',
			'name' => 'banner_position',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'choices' => array(
				'static' => 'static',
				'fixed' => 'fixed',
				'absolute' => 'absolute',
				'sticky' => 'sticky',
			),
			'default_value' => 'fixed',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'allow_custom' => 0,
			'search_placeholder' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_60dc211a87d0d',
			'label' => 'banner location',
			'name' => 'banner_location',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'choices' => array(
				'top-0' => 'top-0',
				'bottom-0' => 'bottom-0',
			),
			'default_value' => 'bottom-0',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'allow_custom' => 0,
			'search_placeholder' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_60dc22be7f4b6',
			'label' => 'display mode',
			'name' => 'display_mode',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'banner mode' => 'banner mode',
				'card mode' => 'card mode',
			),
			'default_value' => false,
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
	'_pip_layout_slug' => 'cookie-banner-seabass',
	'_pip_render_layout' => 'cookie-banner-seabass.php',
	'_pip_render_style' => 'cookie-banner-seabass.css',
	'_pip_render_script' => 'cookie-banner-seabass.js',
	'field_add_config_file' => 1,
	'_pip_config_file' => 'configuration-cookie-banner-seabass.php',
	'field_add_configuration' => 0,
	'pip_layout_var' => '',
	'pip_layout_vars_lock' => 0,
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'layout_collections' => array(
		'seabass' => 'seabass',
	),
	'modified' => 1625056810,
));

endif;