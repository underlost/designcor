<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="sub-header">

	<h1>Visual Affects.</h1>
	
		<p>Good design is more than just looking good -- it has a purpose. It affects people: how they think, how they feel, how they perceive your brand. Put the power of good design to work for you.</p>

	<div class="clear"></div>
</div>

<div id="secondary-navigation">
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary' ) ); ?>
</div>


				<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>