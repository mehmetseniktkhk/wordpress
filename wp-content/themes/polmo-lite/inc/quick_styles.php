<?php
function jeweltheme_polmo_quick_style(){ 
	//$jeweltheme_polmo_banner_image = get_theme_mod('jeweltheme_polmo_banner_image', get_template_directory_uri() . '/images/background/blog.jpg');
	$jeweltheme_polmo_subscriber_image = get_theme_mod('jeweltheme_polmo_subscriber_image', get_template_directory_uri() . '/images/background/1.jpg');
?>
	<style type="text/css">

	<?php 
	if ( get_header_image() ) { ?>
		.page-head{
			background: url("<?php echo header_image(); ?>") no-repeat center top fixed;
			background-size: cover;
		}		
	<?php } ?>
		
	    .subscribe-section {
	    	background: url( "<?php echo esc_url_raw( $jeweltheme_polmo_subscriber_image ); ?>") no-repeat center center fixed;
	    }  

	</style>
<?php 

}
add_action( 'wp_head', 'jeweltheme_polmo_quick_style', 100);

