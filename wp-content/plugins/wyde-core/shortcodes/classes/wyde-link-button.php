<?php
/* Link Button
---------------------------------------------------------- */
class WPBakeryShortCode_Wyde_Link_Button extends WPBakeryShortCode {
}

$icon_picker_options = array();
$icon_picker_options = apply_filters('wyde_iconpicker_options', $icon_picker_options);

vc_map( array(
    'name' => __('Link Button', 'wyde-core'),
    'description' => __('Add link button with icon.', 'wyde-core'),
    'base' => 'wyde_link_button',
    'controls' => 'full',
    'icon' =>  'wyde-icon link-button-icon', 
    'weight'    => 990,
    'category' => __('Wyde', 'wyde-core'),
    'params' => array(
            array(
                'param_name' => 'title',
                'type' => 'textfield',
                'heading' => __('Title', 'wyde-core'),                
                'admin_label' => true,
                'description' => __('Text on the button.', 'wyde-core')
            ),
            array(
                'param_name' => 'link',
			    'type' => 'vc_link',
			    'heading' => __( 'URL (Link)', 'wyde-core' ),			    
			    'description' => __( 'Set a button link.', 'wyde-core' )
		    ),
            $icon_picker_options[0],
            $icon_picker_options[1],
            $icon_picker_options[2],
            $icon_picker_options[3],
            $icon_picker_options[4],
            $icon_picker_options[5],
            array(
                'param_name' => 'style',
                'type' => 'dropdown',               
                'heading' => __('Style', 'wyde-core'),               
                'value' => array(
                    __('Square', 'wyde-core') => '', 
                    __('Round', 'wyde-core') => 'round', 
                    __('Rounded', 'wyde-core') => 'rounded', 
                    __('Square Outline', 'wyde-core') => 'outline', 
                    __('Round Outline', 'wyde-core') => 'outline round', 
                    __('Rounded Outline', 'wyde-core') => 'outline rounded', 
                    __('None', 'wyde-core') => 'none', 
                ),
                'description' => __('Select button style.', 'wyde-core')
            ),
            array(
                'param_name' => 'size',
                'type' => 'dropdown',
                'heading' => __('Size', 'wyde-core'),                
                'value' => array(
                    __('Small', 'wyde-core') => '', 
                    __('Large', 'wyde-core') =>'large', 
                ),
                'description' => __('Select button size.', 'wyde-core')
            ),
            array(
                'param_name' => 'color',
			    'type' => 'colorpicker',
			    'heading' => __( 'Text Color', 'wyde-core' ),			    
			    'description' => __( 'Select button text color.', 'wyde-core' ),
            ),
            array(
                'param_name' => 'hover_color',
                'type' => 'colorpicker',
                'heading' => __( 'Hover Color', 'wyde-core' ),                
                'description' => __( 'Select button hover text color.', 'wyde-core' ),
                'dependency' => array(
                    'element' => 'style',
                    'value' => array( 'outline', 'outline round', 'outline rounded' )
                )
            ),
            array(
                'param_name' => 'bg_color',
                'type' => 'colorpicker',
                'heading' => __( 'Background Color', 'wyde-core' ),                
                'description' => __( 'Select button background color.', 'wyde-core' ),
                'dependency' => array(
                    'element' => 'style',
                    'value' => array( '', 'round', 'rounded' )
                )
            ),
            array(
                'param_name' => 'animation',
                'type' => 'wyde_animation',          
                'heading' => __('Animation', 'wyde-core'),                
                'description' => __('Select a CSS3 Animation that applies to this element.', 'wyde-core')
            ),
            array(
                'param_name' => 'animation_delay',
                'type' => 'textfield',
                'heading' => __('Animation Delay', 'wyde-core'),
                'description' => __('Defines when the animation will start (in seconds). Example: 0.5, 1, 2, ...', 'wyde-core'),
                'dependency' => array(
				    'element' => 'animation',
				    'not_empty' => true
			    )
            ),
		    array(
                'param_name' => 'el_class',
			    'type' => 'textfield',
			    'heading' => __( 'Extra CSS Class', 'wyde-core' ),			    
			    'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'wyde-core' )
		    ),
		    array(
                'param_name' => 'css',
			    'type' => 'css_editor',
			    'heading' => __( 'CSS', 'wyde-core' ),			    
			    'group' => __( 'Design Options', 'wyde-core' )
		    ),
    )
));