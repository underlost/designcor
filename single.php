<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="sub-header">

	<h1>Visual Affects</h1>

	<p>Good design is more than just looking good, it affects people. How they think. How they feel. How they perceive your business. Put the power of good design to work for you.</p>

	<div class="clear"></div>
</div>

<div id="secondary-navigation">
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary' ) ); ?>
	<div class="clear"></div>	
</div> 

<div id="projects">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="<?php the_ID(); ?>" class="project clearfix"> 
		<div class="entry-main"> 
			<div class="images"> 
				<?php   
				
				 $args = array(
				   'post_type' => 'attachment',
				   'numberposts' => -1,
				   'post_status' => null,
				   'post_parent' => $post->ID
				  );
				  $attachments = get_posts($args);
				     if ($attachments) {
				        foreach ($attachments as $attachment) {
				           echo wp_get_attachment_image($attachment->ID, 'full');
				          }
				     }
				 ?> 
			</div> 
		</div> 
		<div class="entry_wrapper">
			<!-- test -->
			<?php if (is_tax( 'work', 'logos' )) { ?>
			
			<?php } else { ?>
			<div class="controls clearfix"> 
				<a href="#" class="prev"></a> 
				<div class="pager"></div> 
				<a href="#" class="next"></a> 
			</div>
			<?php } ?>
			 
			<div class="project-meta">
				<p>
				<label>Project:</label>
				<h4><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
				</p>
				
				<p>
					<label>Services:</label>
					<span><?php $posttags = get_the_tags();
						if ($posttags) {foreach($posttags as $tag) { echo $tag->name . '<br />'; }} ?>
				</p>
				
				<p>
					<label>Client:</label>
					<span><?php echo get_post_meta($post->ID, 'client', true) ?><br />
					<?php echo get_post_meta($post->ID, 'location', true) ?></span>
				</p>
				
			</div>
		</div> 
		<div class="clear"></div>
	</div> 


<?php endwhile; ?>

</div>

<?php get_footer(); ?>