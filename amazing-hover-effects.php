<?php
/*
Plugin Name: Amazing Hover Effects 
Plugin URI: http://www.bolobd.com/plugins/amazing-hover-effects/
Description: Amazing Hover Effects is an impressive hover effects collection, powered by pure CSS3 and iHover, no dependency. 55+ effects to choose and 3 styles.
Author: Noor-E-Alam
Author URI: http://bolobd.com
Version: 3.4
*/

//Loading CSS
function amazing_hover_effects_style() {

	wp_enqueue_style('hover_effects_stylesheet', plugins_url( '/css/ihover.css' , __FILE__ ) );

}

add_action( 'wp_enqueue_scripts', 'amazing_hover_effects_style' );

if(!class_exists('VP_AutoLoader')){
// Setup Contants
defined( 'VP_PLUGIN_VERSION' ) or define( 'VP_PLUGIN_VERSION', '2.0' );
defined( 'VP_PLUGIN_URL' )     or define( 'VP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_PLUGIN_DIR' )     or define( 'VP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_PLUGIN_FILE' )    or define( 'VP_PLUGIN_FILE', __FILE__ );


// Lood Bootstrap
require 'framework/bootstrap.php';

}

// Registering Custom Post
add_action( 'init', 'amazing_hover_effects_custom_post' );
function amazing_hover_effects_custom_post() {
	register_post_type( 'hover-effect',
		array(
			'labels' => array(
				'name' => __( 'Hover Effects' ),
				'singular_name' => __( 'Hover Effect' ),
				'add_new_item' => __( 'Add New Hover Effect' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'hover-effects'),
			'menu_icon' => '',
			//'menu_position' => 5,
		)
	);
	
}

// Registering Custom post's category
add_action( 'init', 'amazing_hover_effects_custom_post_taxonomy'); 
function amazing_hover_effects_custom_post_taxonomy() {
	register_taxonomy(
		'hover_cat',  
		'hover-effect',
		array(
			'hierarchical'          => true,
			'label'                         => 'Hover Effects Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'he-category',
				'with_front'    => true
				)
			)
	);
}
  
 

require 'admin/metabox/icon.php';

// Load Metaboxes 
new VP_Metabox(array
(
			'id'          => 'infosmeta',
			'types'       => array('hover-effect'),
			'title'       => __('Hover Image, Title, Description ', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_PLUGIN_DIR . '/admin/metabox/main.php'
));
new VP_Metabox(array
(
			'id'          => 'effectsmeta',
			'types'       => array('hover-effect'),
			'title'       => __('Hover Effects Setting', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_PLUGIN_DIR . '/admin/metabox/effects.php'
));


// Register Shortcode
function amazing_hover_effects_shortcode($atts){
	extract( shortcode_atts( array(
	
		'category' => '',	
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'hover-effect', 'hover_cat' => $category)
        );
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	

// Calling metabox data
	$infos = vp_metabox('infosmeta.hover_info', false);	
	$style = vp_metabox('effectsmeta.effects.0.style', false);	
	$effect = vp_metabox('effectsmeta.effects.0.effect', false);	
	$animation = vp_metabox('effectsmeta.effects.0.animation', false);	
	$colored = vp_metabox('effectsmeta.effects.0.colored', false);	
	
	$i = 0;

		$output = '<ul class="ihover-container">';

		foreach ($infos as $info) {	
		
		
		$output .='<li class="hover_effects_li">';
		
		if($style=="circle" && $effect=="effect1"){
            $output .= '<div class="ih-item circle '.$colored.' effect1"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<div class="info-back">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></div></a></div>';
        }

		if($style=="circle" && $effect=="effect2"){
            $output .= '<div class="ih-item circle '.$colored.' effect2 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }

		if($style=="circle" && $effect=="effect3"){
            $output .= '<div class="ih-item circle '.$colored.' effect3 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }
			

		if($style=="circle" && $effect=="effect4"){
            $output .= '<div class="ih-item circle '.$colored.' effect4 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }

		if($style=="circle" && $effect=="effect5"){
            $output .= '<div class="ih-item circle '.$colored.' effect5 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
									<div class="info-back">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></div></a></div>';
        }

		if($style=="circle" && $effect=="effect6"){
            $output .= '<div class="ih-item circle '.$colored.' effect6 scale_down_up"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }
		
		if($style=="circle" && $effect=="effect7"){
            $output .= '<div class="ih-item circle '.$colored.' effect7 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }

		if($style=="circle" && $effect=="effect8"){
            $output .= '<div class="ih-item circle '.$colored.' effect8 '.$animation.'"><a href="#">
								<div class="img-container">
								  <div class="img"><img src="'.$info['image'].'"></div>
								</div>
								<div class="info-container">
								  <div class="info">
									<h3>'.$info['title'].'</h3>
									<p>'.$info['description'].'</p>
								  </div>
				</div></a></div>';
        }
		
		
		if($style=="circle" && $effect=="effect9"){
            $output .= '<div class="ih-item circle '.$colored.' effect9 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }

		if($style=="circle" && $effect=="effect10"){
            $output .= '<div class="ih-item circle '.$colored.' effect10 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }

		if($style=="circle" && $effect=="effect11"){
            $output .= '<div class="ih-item circle '.$colored.' effect11 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }

		if($style=="circle" && $effect=="effect12"){
            $output .= '<div class="ih-item circle '.$colored.' effect12 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }
		
		if($style=="circle" && $effect=="effect13"){
            $output .= '<div class="ih-item circle '.$colored.' effect13 from_left_and_right"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
									<div class="info-back">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></div></a></div>';
        }
		
		if($style=="circle" && $effect=="effect14"){
            $output .= '<div class="ih-item circle '.$colored.' effect14 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }

		if($style=="circle" && $effect=="effect15"){
            $output .= '<div class="ih-item circle '.$colored.' effect15 left_to_right"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }
		if($style=="circle" && $effect=="effect16"){
            $output .= '<div class="ih-item circle '.$colored.' effect16 left_to_right"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }		
		
		if($style=="circle" && $effect=="effect17"){
            $output .= '<div class="ih-item circle '.$colored.' effect17 "><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }
		if($style=="circle" && $effect=="effect18"){
            $output .= '<div class="ih-item circle '.$colored.' effect18 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
									<div class="info-back">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></div></a></div>';
        }
		
		if($style=="circle" && $effect=="effect19"){
            $output .= '<div class="ih-item circle '.$colored.' effect19 "><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></a></div>';
        }
		
		if($style=="circle" && $effect=="effect20"){
            $output .= '<div class="ih-item circle '.$colored.' effect20 '.$animation.'"><a href="#">
							<div class="spinner"></div>
								<div class="img"><img src="'.$info['image'].'"></div>
									<div class="info">
									<div class="info-back">
								<h3>'.$info['title'].'</h3>
								<p>'.$info['description'].'</p>
					
					</div></div></a></div>';
        }
		

		$output .='</li>';


		$i++;
	}

	endwhile;
	$output .='</ul>';
	$output .= '<style>
					.ihover-container {
							clear: both;
							display: inline-block;
							list-style-type: none;
							margin: 0;
							padding: 0;
							position: relative;
							width: 100%;
						}
						.ihover-container li {
							background: none repeat scroll 0 0 transparent;
							float: left;
							list-style: none outside none;
							margin: 0 12px 50px 0;
							padding: 0;
							width: 300px;
						}
						.ihover-container li img {
							border-radius: 0;
							box-shadow: none;
							display: block;
							margin: 0;
							padding: 0;
						}
				</style>';
	wp_reset_query();
	return $output;
}

add_shortcode('hover', 'amazing_hover_effects_shortcode');

//Tinymce Button Add

add_action('admin_head', 'amazing_hover_effects_tc_button');

function amazing_hover_effects_tc_button() {
    global $typenow;
    // check user permissions
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
   	return;
    }
    // verify the post type
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return;
	// check if WYSIWYG is enabled
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "amazing_hover_effects_tc_button_add_tinymce_plugin");
		add_filter('mce_buttons', 'amazing_hover_effects_tc_button_add_tinymce_plugin_register_my_tc_button');
	}
}

function amazing_hover_effects_tc_button_add_tinymce_plugin($plugin_array) {
   	$plugin_array ['ihover_tc_button'] = plugins_url( '/admin/tinymce/button.js', __FILE__ );
   	return $plugin_array;
}


function amazing_hover_effects_tc_button_add_tinymce_plugin_register_my_tc_button($buttons) {
   array_push($buttons, "ihover_tc_button");
   return $buttons;
}

?>