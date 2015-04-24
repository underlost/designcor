<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="sub-header">

	<h1>Visual Affects</h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec laoreet risus. Proin facilisis magna risus. In quis interdum nibh. Nam posuere porttitor quam, id iaculis dui porta id</p>

	<div class="clear"></div>
</div>

<div id="secondary-navigation">
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary' ) ); ?>
</div>

				<h1><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

<?php get_footer(); ?>