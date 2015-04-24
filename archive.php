<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<?php if (is_tax( 'work', 'logos' )) { ?><?php } else { ?>

	<script> 
	  $('div#entries div.entries div.entry-main p').designcorSliderMini();
	</script> 

<?php } ?>

<div id="sub-header">

	<h1>Visual Affects</h1>

	<p>Good design is more than just looking good, it affects people. How they think. How they feel. How they perceive your business. Put the power of good design to work for you.</p>

	<div class="clear"></div>
</div>

<div id="secondary-navigation">
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary' ) ); ?>
	
	<div id="site_controls"> 
		<a href="#" id="up"></a> 
		<a href="#" id="down"></a> 
	</div>
	
</div> 

<div id="entries">

<?php if (have_posts()) the_post();
	rewind_posts(); get_template_part( 'loop', 'archive' );?>

</div>

<?php get_footer(); ?>