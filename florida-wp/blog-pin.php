<?php
/*
Template Name: Blog Masonry
*/
get_header();
GLOBAL $webnus_options;

?>
<section id="main-content-pin">
<hr class="vertical-space1">
<div class="container">

<div id="pin-content">
<?php
$paged = ( is_front_page() ) ? 'page' : 'paged' ;
$args = array(
	   'orderby'=>'date',
	   'order'=>'desc',
	   'post_type'=>'post',
	   'paged' => get_query_var($paged),
	   // 'posts_per_page'=>18
); 
query_posts($args);
 
if (have_posts()) : while (have_posts()) : the_post();
$post_format = get_post_format(get_the_ID());
$content = get_the_content();
?>
<article  class="pin-box entry -item">
<div class="img-item">
 <?php
		if(  $webnus_options->webnus_blog_featuredimage_enable() ){
	
		global $featured_video;
		
		$meta_video = $featured_video->the_meta();
		
		if( 'video'  == $post_format || 'audio'  == $post_format)
		{
			
		$pattern =
		  '\\['                              // Opening bracket
		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]
		. "(video|audio)"                     // 2: Shortcode name
		. '(?![\\w-])'                       // Not followed by word character or hyphen
		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag
		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash
		.     '(?:'
		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket
		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash
		.     ')*?'
		. ')'
		. '(?:'
		.     '(\\/)'                        // 4: Self closing tag ...
		.     '\\]'                          // ... and closing bracket
		. '|'
		.     '\\]'                          // Closing bracket
		.     '(?:'
		.         '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags
		.             '[^\\[]*+'             // Not an opening bracket
		.             '(?:'
		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
		.                 '[^\\[]*+'         // Not an opening bracket
		.             ')*+'
		.         ')'
		.         '\\[\\/\\2\\]'             // Closing shortcode tag
		.     ')?'
		. ')'
		. '(\\]?)';  			
		
			
			preg_match('/'.$pattern.'/s', $post->post_content, $matches);
			
			
			if( (is_array($matches)) && (isset($matches[3])) && ( ($matches[2] == 'video') || ('audio'  == $post_format)) && (isset($matches[2])))
			{
				$video = $matches[0];
				
				echo do_shortcode($video);
				
				$content = preg_replace('/'.$pattern.'/s', '', $content);
				
			}else				
			if( (!empty( $meta_video )) && (!empty($meta_video['the_post_video'])) )
			{
				echo do_shortcode($meta_video['the_post_video']);
			}
				
	
			
			
		}else
		if( 'gallery'  == $post_format)
		{
			
						
			$pattern =
		  '\\['                              // Opening bracket
		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]
		. "(gallery)"                     // 2: Shortcode name
		. '(?![\\w-])'                       // Not followed by word character or hyphen
		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag
		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash
		.     '(?:'
		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket
		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash
		.     ')*?'
		. ')'
		. '(?:'
		.     '(\\/)'                        // 4: Self closing tag ...
		.     '\\]'                          // ... and closing bracket
		. '|'
		.     '\\]'                          // Closing bracket
		.     '(?:'
		.         '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags
		.             '[^\\[]*+'             // Not an opening bracket
		.             '(?:'
		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
		.                 '[^\\[]*+'         // Not an opening bracket
		.             ')*+'
		.         ')'
		.         '\\[\\/\\2\\]'             // Closing shortcode tag
		.     ')?'
		. ')'
		. '(\\]?)';  			

			preg_match('/'.$pattern.'/s', $post->post_content, $matches);
			
			
			if( (is_array($matches)) && (isset($matches[3])) && ($matches[2] == 'gallery') && (isset($matches[2])))
			{
				
				$ids = (shortcode_parse_atts($matches[3]));
				
				if(is_array($ids) && isset($ids['ids']))
					$ids = $ids['ids'];
				echo do_shortcode('[vc_gallery onclick="link_no" img_size= "full" type="flexslider_fade" interval="3" images="'.$ids.'"  custom_links_target="_self"]');
				$content = preg_replace('/'.$pattern.'/s', '', $content);
			}
				
	
			
			
		}else
	
		
			get_the_image( array( 'meta_key' => array( 'Full', 'Full' ), 'size' => 'Full' ) ); 
	}
		
		?>
</div>
<div class="pin-ecxt">
<h6 class="blog-cat"><strong><?php _e('in','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_category(', ') ?> </h6>
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<p><?php echo get_the_excerpt(); ?></p>

</div>
<div class="pin-ecxt2">
<div class="col1-3">
<i class="fa-comment-o"></i>
<span><?php echo get_comments_number() ?></span>
</div>
<div class="col1-3">
<?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?>
<p>
<?php the_author(); ?>
</p>
</div>
<div class="col1-3">
<h6 class="blog-date"><?php echo get_the_date('d M Y');?></h6>
</div>
</div>

</article>
<?php 
endwhile;
endif;

?>

</div><!-- end-pin-content -->

<div class="vertical-space2"></div>

</div>

	<section class="container aligncenter">
        <?php 
			if(function_exists('wp_pagenavi')) {
				wp_pagenavi();	
			}
	    ?>
        <hr class="vertical-space2">
    </section>

</section><!-- end-main-content-pin -->
<?php  wp_reset_query(); // Reset the Query Loop 
get_footer();
?>