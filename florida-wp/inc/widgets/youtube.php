<?php
include_once str_replace("\\","/",get_template_directory()).'/inc/init.php';
class webnus_youtube_widget extends WP_Widget{

	function __construct(){

		$params = array(
		'description'=> __( 'Youtube Box', 'WEBNUS_TEXT_DOMAIN' ),
		'name'=> __( 'Webnus - Youtube', 'WEBNUS_TEXT_DOMAIN' )
		);

		parent::__construct('webnus_youtube_widget', '', $params);

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
		<label for="<?php echo $this->get_field_id('id') ?>"><?php esc_html_e('Channel Name or ID','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('id') ?>"
		name="<?php echo $this->get_field_name('id') ?>"
		value="<?php if( isset($id) )  echo esc_attr($id); ?>"
		/>
		</p>			

		<?php 
	}
	
	
	public function widget($args, $instance){
		
		extract($args);
		extract($instance);
		?>
	
			<?php echo $before_widget; ?>
			<?php if(!empty($title)) echo $before_title.$title.$after_title; ?>
			
			<script src="https://apis.google.com/js/platform.js" async defer></script>
			<div class="g-ytsubscribe" data-channel="<?php echo esc_attr($id); ?>" data-layout="full" data-count="default"></div>

			
			
			<?php 
				$o = new webnus_options();
			?>
				
			<?php echo $after_widget; ?>

		<?php 
	} 
}

add_action('widgets_init', 'register_webnus_youtube'); 
function register_webnus_youtube(){
	
	register_widget('webnus_youtube_widget');
	
}