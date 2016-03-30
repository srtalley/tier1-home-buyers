<?php
vc_map( array(
        "name" =>"Icon Box",
        "base" => "iconbox",
        "description" => "Icon + text article",
		"icon" => "webnus_iconbox",
        "category" => esc_html__( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Type", 'WEBNUS_TEXT_DOMAIN' ),
                "param_name" => "type",
                "value" => array(
				"Type 0"=>'0',
				"Type 1"=>'1',
				"Type 2"=>'2',
				"Type 3"=>'3',
				"Type 4"=>'4',
				"Type 5"=>'5',
				"Type 6"=>'6',
				"Type 7"=>'7',
				"Type 8"=>'8',
				"Type 9"=>'9',
				"Type 10"=>'10',
				"Type 11"=>'11',
				"Type 12"=>'12',
				"Type 13"=>'13',
				"Type 14"=>'14',
				"Type 15"=>'15',
				"Type 16"=>'16',
				"Type 17"=>'17',
				"Type 18"=>'18',
				"Type 19"=>'19',
				"Type 20"=>'20',
				"Type 21"=>'21',
				"Type 22"=>'22',
				"Type 23"=>'23',
				"Type 24"=>'24',
				"Type 25"=>'25',
				),
                "description" => esc_html__( "You can choose among these pre-designed types.", 'WEBNUS_TEXT_DOMAIN')
            ),
             array(
				"type"=>'textfield',
				"heading"=>esc_html__('Title', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "icon_title",
				"value"=>"",
				"description" => esc_html__( "IconBox Title", 'WEBNUS_TEXT_DOMAIN')
			),
			array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Title color (leave bank for default color)', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "title_color",
				"value"=>"",
				"description" => esc_html__( "Select title color", 'WEBNUS_TEXT_DOMAIN')
			),
            array(
				"type"=>'textarea',
				"heading"=>esc_html__('Content', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "iconbox_content",
				"value"=>"",
				"description" => esc_html__( "IconBox Content Goes Here", 'WEBNUS_TEXT_DOMAIN')	
			),
			array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Content color (leave bank for default color)', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "content_color",
				"value"=>"",
				"description" => esc_html__( "Select content color", 'WEBNUS_TEXT_DOMAIN')
			),
			 array(
				"type"=>'textfield',
				"heading"=>esc_html__('Link Text', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "icon_link_text",
				"value"=>"",
				"description" => esc_html__( "IconBox Link Text", 'WEBNUS_TEXT_DOMAIN'),	
			),
			 array(
				"type"=>'textfield',
				"heading"=>esc_html__('Link URL', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "icon_link_url",
				"value"=>"",
				"description" => esc_html__( "IconBox Link URL (http://example.com)", 'WEBNUS_TEXT_DOMAIN'),	
			),
			array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Link color (leave bank for default color)', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "link_color",
				"value"=>"",
				"description" => esc_html__( "Select link color", 'WEBNUS_TEXT_DOMAIN')
			),
			 array(
				"type"=>'dropdown',
				"heading"=>esc_html__('Link Target', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "link_target",
				"value" => array(
					"Self"=>'self',
					"Blank"=>'blank',
				),
				"description" => esc_html__( "IconBox Link URL (http://example.com)", 'WEBNUS_TEXT_DOMAIN'),	
			),
            array(
				"type"=>'textfield',
				"heading"=>esc_html__('Icon Size (leave blank for default size)', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "icon_size",
				"value"=>"",
				"description" => esc_html__( "Icon size in px format, Example: 16px", 'WEBNUS_TEXT_DOMAIN')
				
			),
			array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Icon color (leave bank for default color)', 'WEBNUS_TEXT_DOMAIN'),
				"param_name"=> "icon_color",
				"value"=>"",
				"description" => esc_html__( "Select icon color", 'WEBNUS_TEXT_DOMAIN')
				
			),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Image", 'WEBNUS_TEXT_DOMAIN' ),
                "param_name" => "icon_image",
                'value'=>'',
                "description" => wp_kses( __( "Select Image instead of Icons.<br>Note: If you have another Icon that not is here. You can put PNG image of that instead of these Icons.", 'WEBNUS_TEXT_DOMAIN'), array( 'br' => array() ) )
            ),
            array(
                "type" => "iconfonts",
                "heading" => esc_html__( "Icon", 'WEBNUS_TEXT_DOMAIN' ),
                "param_name" => "icon_name",
                'value'=>'',
                "description" => esc_html__( "Select Icon", 'WEBNUS_TEXT_DOMAIN')
            ),
        ),
  ) );
?>