<?php

vc_map( array(
        'name' =>'Webnus Subtitle',
        'base' => 'subtitle',
		"description" => "Subtitle 1",
        "icon" => "webnus_subtitle1",
        'params'=>array(
					
					array(
							'type' => 'textarea',
							'heading' => __( 'Subtitle Content', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'subtitle_content',
							'value' => 'Subtitle text',
							'description' => __( 'Enter the Subtitle content', 'WEBNUS_TEXT_DOMAIN')
					),
		),
		'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        
    ) );


?>