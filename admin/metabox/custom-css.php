<?php



return array(
	array(
		'type'      => 'group',
		'name'      => 'css_info',
		'priority'  => 'high',
		//'title'     => __('Hover Info', 'vp_textdomain'),
		'fields'    => array(
		
	
				array(
					'type' => 'codeeditor',
					'name' => 'custom_css',
					'label' => __('Custom CSS <br /><span style="color: #d63434">Pro Only</span>', 'vp_textdomain'),
					'description' => __('Write your custom css here.', 'vp_textdomain'),
					'theme' => 'github',
					'mode' => 'css',
				),
			
			
			

		),
	),
);

/**
 * EOF
 */