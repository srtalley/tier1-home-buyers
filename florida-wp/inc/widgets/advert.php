<?php

class WebnusAdvertisementWidget extends WP_Widget{

	function __construct(){

		$params = array(
		'description'=> __( "Webnus Advertisement Widget", 'WEBNUS_TEXT_DOMAIN'),
		'name'=> __( "Webnus-Ad", 'WEBNUS_TEXT_DOMAIN')
		);

		parent::__construct('WebnusAdvertisementWidget', '', $params);

	}

	public function form($instance){


		extract($instance);
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title') ?>"><?php esc_html_e('Title','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('title') ?>"
		name="<?php echo $this->get_field_name('title') ?>"
		value="<?php if( isset($title) )  echo esc_attr($title); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('link') ?>"><?php esc_html_e('Ad link URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('link') ?>"
		name="<?php echo $this->get_field_name('link') ?>"
		
		value="<?php if( isset($link) )  echo esc_attr($link); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('imageurl') ?>"><?php esc_html_e('Image URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"
		
		class="widefat"
		id="<?php echo $this->get_field_id('imageurl') ?>"
		name="<?php echo $this->get_field_name('imageurl') ?>"
		
		value="<?php if( isset($imageurl) )  echo esc_attr($imageurl); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('html_content') ?>"><small><?php esc_html_e('Leave blank image url if you want to use html content.','WEBNUS_TEXT_DOMAIN'); ?></small><br /><?php esc_html_e('Html content','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<textarea 
		class="widefat"
		id="<?php echo $this->get_field_id('html_content') ?>"
		name="<?php echo $this->get_field_name('html_content') ?>"
		
		><?php if( isset($html_content) )  echo esc_attr($html_content); ?></textarea>
		</p>

		<?php 
	}
	
	
	public function widget($args, $instance){
		
		extract($args);
		extract($instance);
		?>
		<?php echo $before_widget; ?>
		<?php 
		if(!empty($title))
		echo $before_title.$title.$after_title;
		
		?>
			<div class="webnus-ad">
			<?php 
			
				if(empty($link)) $link = '';
				if(empty($imageurl)) $imageurl = '';
				if(empty($html_content)) $html_content = '';
				if(!empty($imageurl))
				{
					if(!empty($link)) echo '<a href="'.$link.'">';
					echo '<img src="'.$imageurl.'" alt="Advertisement" />';
					if(!empty($link)) echo '</a>';
				}else
					echo $html_content;
			?>
			<div class="clear"></div>
			</div>	 
		  <?php echo $after_widget; ?><!-- Disclaimer -->
		<?php 
	} 
}

add_action('widgets_init','register_webnus_advertisement_widget'); 
function register_webnus_advertisement_widget(){
	
	register_widget('WebnusAdvertisementWidget');
	
}

