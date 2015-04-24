<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="sub-header">

	<h1>Design that works.</h1>

	<p>Good design is more than just looking good, it affects people. How they think. How they feel. How they perceive your business. Put the power of good design to work for you.</p>

	<div class="clear"></div>
</div>

<div id="secondary-navigation">
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary' ) ); ?>
</div>

<div id="content-main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>


<?php endwhile; ?>

</div>

<div id="sidebar">

	testing

</div>

<div class="clear"></div>

<?php get_footer(); ?>