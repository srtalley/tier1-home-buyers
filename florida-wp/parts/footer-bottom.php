<?php GLOBAL $webnus_options; ?>
<section class="footbot"><div class="container">
<div class="col-md-6">
<!-- footer-navigation left -->
<?php if( 1 == $webnus_options->webnus_footer_bottom_left() && $webnus_options->webnus_footer_logo() ){ ?>
	<div class="footer-navi">			
	<img src="<?php echo $webnus_options->webnus_footer_logo(); ?>" width="65" alt=""> 
	</div>
<?php }elseif(2 == $webnus_options->webnus_footer_bottom_left()){
	if(has_nav_menu('footer-menu')){
		$menuParameters = array(
		'theme_location'=>'footer-menu',
		'container' 	=> false,
		'echo'      	=> false,
		'items_wrap'	=> '%3$s',
		'after'    		=> ' | ',
		'depth'     	=> 0,
		);
		echo '<div class="footer-navi">';
		echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
		echo '</div>';
	}
} elseif(3 == $webnus_options->webnus_footer_bottom_left() && $webnus_options->webnus_footer_copyright()){
	echo '<div class="footer-navi">';
	echo do_shortcode($webnus_options->webnus_footer_copyright());
	echo '</div>';
} ?>
</div>
<div class="col-md-6">
<!-- footer-navigation right -->
<?php if( 1 == $webnus_options->webnus_footer_bottom_right() && $webnus_options->webnus_footer_logo() ){ ?>
	<img src="<?php echo $webnus_options->webnus_footer_logo(); ?>" width="65" alt=""> 
	<?php
}elseif(2 == $webnus_options->webnus_footer_bottom_right()){
	if(has_nav_menu('footer-menu')){
		$menuParameters = array(
		'theme_location'=>'footer-menu',
		'container'       => false,
		'echo'            => false,
		'items_wrap'      => '%3$s',
		'after'      	  => ' | ',
		'depth'           => 0,
		);
	echo'<div class="footer-navi floatright">';
	echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
	echo '</div>';
	}
}elseif(3 == $webnus_options->webnus_footer_bottom_right() && $webnus_options->webnus_footer_copyright()){
	echo '<div class="footer-navi floatright">';
	echo do_shortcode($webnus_options->webnus_footer_copyright());
	echo '</div>';
} ?>
</div>
</div></section>