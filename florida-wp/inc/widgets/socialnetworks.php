<?php
include_once str_replace("\\","/",get_template_directory()).'/inc/init.php';
class WebnusSocialWidget extends WP_Widget{

	function __construct(){

		$params = array(
		'description'=> __( "Webnus Social Icons Widget", 'WEBNUS_TEXT_DOMAIN'),
		'name'=> __( "Webnus-Social Icons", 'WEBNUS_TEXT_DOMAIN')
		);

		parent::__construct('WebnusSocialWidget', '', $params);

	}

	public function form($instance){

		$webnus_options = new webnus_options();
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
		<label for="<?php echo $this->get_field_id('twitter_link') ?>"><?php esc_html_e('Twitter URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('twitter_link') ?>"
		name="<?php echo $this->get_field_name('twitter_link') ?>"
		
		value="<?php 
		$twitter = $webnus_options->webnus_twitter_ID();
		if( empty($twitter_link) ) echo $twitter; else echo esc_attr($twitter_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('facebook_link') ?>"><?php esc_html_e('Facebook URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('facebook_link') ?>"
		name="<?php echo $this->get_field_name('facebook_link') ?>"
		
		value="<?php 
		$facebook = $webnus_options->webnus_facebook_ID();
		if( empty($facebook_link) ) echo $facebook; else echo esc_attr($facebook_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('youtube_link') ?>"><?php esc_html_e('Youtube URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('youtube_link') ?>"
		name="<?php echo $this->get_field_name('youtube_link') ?>"
		
		value="<?php 
		$youtube = $webnus_options->webnus_youtube_ID();
		if( empty($youtube_link) ) echo $youtube; else echo esc_attr($youtube_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('linkedin_link') ?>"><?php esc_html_e('Linkedin URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('linkedin_link') ?>"
		name="<?php echo $this->get_field_name('linkedin_link') ?>"
		
		value="<?php 
		$linkedin = $webnus_options->webnus_linkedin_ID();
		if( empty($linkedin_link) ) echo $linkedin; else echo esc_attr($linkedin_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('dribbble_link') ?>"><?php esc_html_e('Dribbble URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('dribbble_link') ?>"
		name="<?php echo $this->get_field_name('dribbble_link') ?>"
		
		value="<?php 
		$dribbble = $webnus_options->webnus_dribbble_ID();
		if( empty($dribbble_link) ) echo $dribbble; else echo esc_attr($dribbble_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('pinterest_link') ?>"><?php esc_html_e('Pinterest URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('pinterest_link') ?>"
		name="<?php echo $this->get_field_name('pinterest_link') ?>"
		
		value="<?php 
		$pinterest = $webnus_options->webnus_pinterest_ID();
		if( empty($pinterest_link) ) echo $pinterest; else echo esc_attr($pinterest_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('vimeo_link') ?>"><?php esc_html_e('Vimeo URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('vimeo_link') ?>"
		name="<?php echo $this->get_field_name('vimeo_link') ?>"
		
		value="<?php 
		$vimeo = $webnus_options->webnus_vimeo_ID();
		if( empty($vimeo_link) ) echo $vimeo; else echo esc_attr($vimeo_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('gplus_link') ?>"><?php esc_html_e('Google Pluse URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('gplus_link') ?>"
		name="<?php echo $this->get_field_name('gplus_link') ?>"
		
		value="<?php 
		$gplus = $webnus_options->webnus_google_ID();
		if( empty($gplus_link) ) echo $gplus; else echo esc_attr($gplus_link); 
		?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('rss_link') ?>"><?php esc_html_e('Rss URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('rss_link') ?>"
		name="<?php echo $this->get_field_name('rss_link') ?>"
		
		value="<?php 
		$rss = $webnus_options->webnus_rss_ID();
		if( empty($rss_link ) ) echo $rss ; else echo esc_attr($rss_link); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('instagram_link') ?>"><?php esc_html_e('Instagram URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('instagram_link') ?>"
		name="<?php echo $this->get_field_name('instagram_link') ?>"
		
		value="<?php 
		$instagram = $webnus_options->webnus_instagram_ID();
		if(empty($instagram)) $instagram = '';
		if( empty($instagram_link ) ) echo $instagram ; else echo esc_attr(!empty($instagram_link)?$instagram_link:''); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('flickr_link') ?>"><?php esc_html_e('Flickr URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('flickr_link') ?>"
		name="<?php echo $this->get_field_name('flickr_link') ?>"
		
		value="<?php 
		$flickr = $webnus_options->webnus_flickr_ID();
		if(empty($flickr)) $flickr = '';
		if( empty($flickr_link ) ) echo $flickr ; else echo esc_attr(!empty($flickr_link)?$flickr_link:''); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('reddit_link') ?>"><?php esc_html_e('Reddit URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('reddit_link') ?>"
		name="<?php echo $this->get_field_name('reddit_link') ?>"
		
		value="<?php 
		$reddit = $webnus_options->webnus_reddit_ID();
		if(empty($reddit)) $reddit = '';
		if( empty($reddit_link ) ) echo $reddit ; else echo esc_attr(!empty($reddit_link)?$reddit_link:''); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('lastfm_link') ?>"><?php esc_html_e('Lastfm URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('lastfm_link') ?>"
		name="<?php echo $this->get_field_name('lastfm_link') ?>"
		
		value="<?php 
		$lastfm = $webnus_options->webnus_lastfm_ID();
		if( empty($lastfm_link ) ) echo $lastfm ; else echo esc_attr(!empty($lastfm_link)?$lastfm_link:'' ); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('delicious_link') ?>"><?php esc_html_e('Delicious URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('delicious_link') ?>"
		name="<?php echo $this->get_field_name('delicious_link') ?>"
		
		value="<?php 
		$delicious = $webnus_options->webnus_delicious_ID();
		if(empty($delicious)) $delicious = '';
		if( empty($delicious_link ) ) echo $delicious ; else echo esc_attr(!empty($delicious_link)?$delicious_link:''); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('tumblr_link') ?>"><?php esc_html_e('Tumblr URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('tumblr_link') ?>"
		name="<?php echo $this->get_field_name('tumblr_link') ?>"
		
		value="<?php 
		$tumblr = $webnus_options->webnus_tumblr_ID();
		if( empty($tumblr_link ) ) echo $tumblr ; else echo esc_attr(!empty($tumblr_link)?$tumblr_link:''); 
		?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('skype_link') ?>"><?php esc_html_e('Skype URL','WEBNUS_TEXT_DOMAIN'); ?>:</label>
		<input type="text"		
		class="widefat"
		id="<?php echo $this->get_field_id('skype_link') ?>"
		name="<?php echo $this->get_field_name('skype_link') ?>"
		
		value="<?php 
		$skype = $webnus_options->webnus_skype_ID();
		if(empty($skype)) $skype = '';
		if( empty($skype_link ) ) echo $skype ; else echo esc_attr(!empty($skype_link)?$skype_link:''); 
		?>" />
		</p>

		<?php 
	}
	
	
	public function widget($args, $instance){
		//36587311
		extract($args);
		extract($instance);
		?>
		<?php echo $before_widget; ?>
		<?php 
		if(!empty($title))
		echo $before_title.$title.$after_title; 
		
		?>
			<div class="socialfollow">
			<?php
			
				if(!empty($twitter_link)) echo '<a href="'. $twitter_link .'" class="twitter" target="_blank"><i class="fa-twitter"></i></a>';
				if(!empty($facebook_link)) echo '<a href="'. $facebook_link .'" class="facebook" target="_blank"><i class="fa-facebook"></i></a>';
				if(!empty($youtube_link)) echo '<a href="'. $youtube_link .'" class="youtube" target="_blank"><i class="fa-youtube"></i></a>';
				if(!empty($linkedin_link)) echo '<a href="'. $linkedin_link .'" class="linkedin" target="_blank"><i class="fa-linkedin"></i></a>';
				if(!empty($dribbble_link)) echo '<a href="'. $dribbble_link .'" class="dribble" target="_blank"><i class="fa-dribbble"></i></a>';
				if(!empty($pinterest_link)) echo '<a href="'. $pinterest_link .'" class="pinterest" target="_blank"><i class="fa-pinterest"></i></a>';
				if(!empty($vimeo_link)) echo '<a href="'. $vimeo_link .'" class="vimeo" target="_blank"><i class="fa-vimeo-square"></i></a>';
				if(!empty($gplus_link)) echo '<a href="'. $gplus_link .'" class="google" target="_blank"><i class="fa-google"></i></a>';
				if(!empty($rss_link)) echo '<a href="'. $rss_link .'" class="rss" target="_blank"><i class="fa-rss-square"></i></a>';
				if(!empty($instagram_link)) echo '<a href="'. $instagram_link .'" class="instagram" target="_blank"><i class="fa-instagram"></i></a>';
				if(!empty($flickr_link)) echo '<a href="'. $flickr_link .'" class="other-social" target="_blank"><i class="fa-flickr"></i></a>';
				if(!empty($reddit_link)) echo '<a href="'. $reddit_link .'" class="other-social" target="_blank"><i class="fa-reddit"></i></a>';
				if(!empty($lastfm_link)) echo '<a href="'. $lastfm_link .'" class="other-social" target="_blank"><i class="fa-lastfm-square"></i></a>';
				if(!empty($delicious_link)) echo '<a href="'. $delicious_link .'" class="other-social" target="_blank"><i class="fa-delicious"></i></a>';
				if(!empty($tumblr_link)) echo '<a href="'. $tumblr_link .'" class="other-social" target="_blank"><i class="fa-tumblr-square"></i></a>';
				if(!empty($skype_link)) echo '<a href="'. $skype_link .'" class="other-social" target="_blank"><i class="fa-skype"></i></a>';				
			 
			?>
			
			<div class="clear"></div>
			</div>	 
		  <?php echo $after_widget; ?><!-- Disclaimer -->
		<?php 
	} 
}

add_action('widgets_init','register_webnus_social_widget'); 
function register_webnus_social_widget(){
	
	register_widget('WebnusSocialWidget');
	
}

