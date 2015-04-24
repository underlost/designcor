<?php
/**
 * Template Name: Case Studies
 */

get_header(); ?>

<div id="sub-header" class="row">
	<div class="span8">
		<h1>Results By Design.</h1>
	</div>
	
	<div class="span8">
		<p>There are many integral components to a successful communications strategy but none as vital as good design. We have almost three decades of experience getting results by design.</p>
	</div>
</div>

<div id="secondary-navigation">
	<div class="row">	
		<div class="menu-header case-nav span-one-third offset-two-thirds">
		<span>Case Studies</span>
			<ul id="menu-case-studies" class="unstyled case-study-list">
				<li class="previous"></li>
			<?php 
			$firstClass = 'active';
			if (have_posts()) :
				$args = array( 'post_type' => 'case-studies', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>	
				<li class="pager <?php echo $firstClass; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php $firstClass = ""; ?>				
			<?php endwhile; endif; ?>
	
			<?php if (have_posts()) :
				$args = array( 'post_type' => 'case-studies', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<li class="next"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'twentyten' ) . ' Next Case Study' ); ?></li>
			
						
			</ul>
		</div>
	</div>
</div>



<div class="row" id="studies-body">
	<div class="span-two-thirds">
		
		<div class="study">
		
			<div class="row">
			
			<div class="span4">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<img class="size-full alignleft" title="img_home_01" src="<?php echo $image[0]; ?>" alt="" />
			<?php endif; ?>
			</div>
			
			<div class="span6">
			<h2>Case Study:</h2>			
			<h1><?php the_title(); ?></h1>
			
			<blockquote>
				<p><?php echo get_post_meta($post->ID, 'quote', true) ?></p>
				
				<small>
					<?php echo get_post_meta($post->ID, 'client', true) ?><br />
						<?php echo get_post_meta($post->ID, 'location', true) ?>
				</small>
			
			</blockquote>
			
			</div>
			</div>
						
			<?php the_content(); ?>
			
			<div class="pagination">
				<span class="next"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'twentyten' ) . ' Next Case Study' ); ?></span>
				<span class="previous"><?php next_post_link( '%link', 'Previous Case Study' . _x( '', 'Next post link', 'twentyten' ) . '' ); ?></span>
				<div class="clear"></div>
			</div>
			
		</div>

	</div>

	<div class="span-one-third sidebar">
	<div class="content">
	
	<?php
		$thumb_ID = get_post_thumbnail_id( $post->ID );
		if ( $images = get_children(array(
				'post_parent' => get_the_ID(),
				'post_type' => 'attachment',
				'post_mime_type' => 'image',
				'exclude' => $thumb_ID,
				'order' => 'ASC',
				'orderby' => 'menu_order',
			))) : ?>
			<?php foreach( $images as $image ) :  ?>
				<?php echo wp_get_attachment_link($image->ID, 'thumbnail-latest'); ?>
			<?php endforeach; ?>
		<!-- This post has no attached images -->
	<?php endif; ?> 
			
	</div>
	</div>
		
		<?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>