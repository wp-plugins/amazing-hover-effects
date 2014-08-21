<?php



return array(
	array(
		'type'      => 'group',
		'repeating' => true,
		'sortable'  => true,
		'name'      => 'hover_info',
		'priority'  => 'high',
		'title'     => __('Hover Info', 'vp_textdomain'),
		'fields'    => array(
		
		
			array(
					'type' => 'upload',
					'name' => 'image',
					'label' => __('Hover Image', 'vp_textdomain'),
				),
				
				
			array(
				'type'  => 'textbox',
				'name'  => 'title',
				'label' => __('Heading', 'vp_textdomain'),
				'default' => 'Heading Here',
				
			),			
			
			
			array(
				'type'  => 'textarea',
				'name'  => 'description',
				'label' => __('Description', 'vp_textdomain'),
				'default' => 'Description goes here',
			),
			
			
			

		),
	),
);

/**
 * EOF
 */