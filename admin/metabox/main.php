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
    'type' => 'notebox',
    'name' => 'nb_1',
    'label' => __('An Announcement', 'vp_textdomain'),
    'description' => __('Thanks for installing my plugin. If you need any customization or extra features within this plugin and any other wordpress work, I am available for HIRE at <a href="https://www.odesk.com/users/%7E016f8320a8ec7f966f">Odesk.com</a>', 'vp_textdomain'),
    'status' => 'info',
    ),
	
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