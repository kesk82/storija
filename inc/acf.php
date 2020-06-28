<?php

if ( ! function_exists('get_field') ) {
  function get_field() {
    return "";
  }
}

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5ef70eb6e5dd0',
		'title' => 'Kategorija',
		'fields' => array(
			array(
				'key' => 'field_5ef70eed8f7fc',
				'label' => 'Podnaslov',
				'name' => 'podnaslov',
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
		),
		'location' => array(
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'category',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5ef84e599b061',
		'title' => 'YouTube Video',
		'fields' => array(
			array(
				'key' => 'field_5ef84e67a17da',
				'label' => 'YouTube Video',
				'name' => 'yt_video',
				'type' => 'text',
				'instructions' => 'YouTube video code.. from the URL https://www.youtube.com/watch?v=f39rUzrMcAQ it would be only the \'f39rUzrMcAQ\' part.',
				'required' => 1,
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
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
				array(
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'video',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;