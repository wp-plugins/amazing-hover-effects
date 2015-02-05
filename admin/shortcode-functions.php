<?php

return array(
// menus
'Hover Shortcode Panel' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'acb1' => array(
			'title' => __('Hover Effects Settings', 'qualia_td'),
			'code' => '[hover]',
			'attributes' => array(
			
							array(
    'type' => 'notebox',
    'name' => 'nb_1',
    'label' => __('Author Comment', 'vp_textdomain'),
    'description' => __('If you want to enable this awesome features, you need to buy pro version from here <a href="http://demo.wpeffects.com/amazing-hover-effects/">Amazing Hover Effects Pro</a>', 'vp_textdomain'),
    'status' => 'error',
    ),
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),


					),

									array(
					'type' => 'select',
					'name' => 'style',
					'label' => __('Select Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(
						array(
							'value' => 'circle',
							'label' => 'Circle',
						),
						array(
							'value' => 'square',
							'label' => 'Square(Pro Only)',
						),	
						array(
							'value' => 'caption',
							'label' => 'Caption(Pro Only)',
						),		
	
				),	),
				
				array(
					'type' => 'select',
					'name' => 'effect',
					'label' => __('Effect', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(
						array(
							'value' => 'effect1',
							'label' => 'effect1',
						),
						array(
							'value' => 'effect2',
							'label' => 'effect2',
						),		
						array(
							'value' => 'effect3',
							'label' => 'effect3',
						),
						array(
							'value' => 'effect4',
							'label' => 'effect4',
						),	
						array(
							'value' => 'effect5',
							'label' => 'effect5',
						),
						array(
							'value' => 'effect6',
							'label' => 'effect6',
						),		
						array(
							'value' => 'effect7',
							'label' => 'effect7',
						),
						array(
							'value' => 'effect8',
							'label' => 'effect8',
						),		
						array(
							'value' => 'effect9',
							'label' => 'effect9',
						),
						array(
							'value' => 'effect10',
							'label' => 'effect10',
						),
						array(
							'value' => 'effect11',
							'label' => 'effect11',
						),
						array(
							'value' => 'effect12',
							'label' => 'effect12',
						),
						array(
							'value' => 'effect13',
							'label' => 'effect13',
						),
						array(
							'value' => 'effect14',
							'label' => 'effect14',
						),
						array(
							'value' => 'effect15',
							'label' => 'effect15',
						),
						array(
							'value' => 'effect16',
							'label' => 'effect16',
						),
						array(
							'value' => 'effect17',
							'label' => 'effect17',
						),
						array(
							'value' => 'effect18',
							'label' => 'effect18',
						),
						array(
							'value' => 'effect19',
							'label' => 'effect19',
						),	
						array(
							'value' => 'effect20',
							'label' => 'effect20',
						),

					),
				),
					
					
				array(
					'type' => 'select',
					'name' => 'animation',
					'label' => __('Animation Direction', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(
						array(
							'value' => 'left_to_right',
							'label' => 'Left To Right',
						),
						array(
							'value' => 'right_to_left',
							'label' => 'Right To Left',
						),	
						array(
							'value' => 'top_to_bottom',
							'label' => 'Top To Bottom',
						),	
						array(
							'value' => 'bottom_to_top',
							'label' => 'Bottom To Top',
						),

					),
				),	
				
				
				array(
					'type' => 'radiobutton',
					'name' => 'colored',
					'label' => __('Colored?', 'vp_textdomain'),
					'items' => array(
						array(
							'value' => 'colored',
							'label' => __('Yes', 'vp_textdomain'),
						),
						array(
								'value' => '',
								'label' => __('No', 'vp_textdomain'),
				),
					),
				),
			
							array(
					'type' => 'slider',
					'name' => 'width',
					'label' => __('Image Width (<strong>Pro Only</strong>)','vp_textdomain'),
					'description' => __('(Pro Only)', 'vp_textdomain'),
					'min' => '100',
					'max' => '300',
					'step' => '1',
					'default' => '220',
				),	
				
				array(
					'type' => 'slider',
					'name' => 'height',
					'label' => __('Image Height (<strong>Pro Only</strong>)', 'vp_textdomain'),
					'description' => __('(Pro Only)', 'vp_textdomain'),
					'min' => '100',
					'max' => '300',
					'step' => '1',
					'default' => '220',
				),	

				array(
					'type' => 'slider',
					'name' => 'letf_right',
					'label' => __('Move Image Left Right (<strong>Pro Only</strong>)', 'vp_textdomain'),
					'description' => __('(Pro Only)', 'vp_textdomain'),
					'min' => '-20',
					'max' => '100',
					'step' => '1',
					'default' => '12',
				),
					array(
						'type' => 'checkbox',
						'name' => 'border',
						'label' => __('Remove Border (<strong>Pro Only</strong>)', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => 'remove',
							),
						),
					),
					array(
						'type' => 'checkbox',
						'name' => 'link_open',
						'label' => __('Open In New Tab? (<strong>Pro Only</strong>)', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => '_blank',
							),
						),
					),
					


				
				),
			),
		// ... more elements
			
			
			
			
		
		),
	),
// ... more menus
);

?>