<?php get_header(); ?>

<div id="sub-header" class="row">

	<div class="span8">
		<h1>Visual Affects.</h1>
	</div>
	
	<div class="span8">
		<p>Good design is more than just looking good -- it has a purpose. It affects people: how they think, how they feel, how they perceive your brand. Put the power of good design to work for you.</p>
	</div>

</div>

	<div id="secondary-navigation">
	
		<?php wp_nav_menu( array( 'container_class' => 'menu-header span-one-third offset-two-thirds', 'theme_location' => 'secondary' ) ); ?>
		
		<div id="site_controls"> 
			<a href="#" id="up"></a> 
			<a href="#" id="down"></a> 
		</div>
	
	</div>
<div id="projects">

		<div id="<?php the_ID(); ?>" class="project">
		<div class="jump-to" id="project-<?php the_ID(); ?>"></div> 
		
		<div class="row">
				<div class="span-two-thirds"> 
					<div class="images"> 
						<?php   
						 $thumb_ID = get_post_thumbnail_id( $post->ID );
						 $args = array(
						   'post_type' => 'attachment',
						   'numberposts' => -1,
						   'exclude' => $thumb_ID,
						   'post_status' => null,
						   'orderby'=> 'menu_order',
						   'order'=> 'ASC',
						   'post_mime_type' => 'image',
						   'post_parent' => $post->ID
						  );
						  $attachments = get_posts($args);
						     if ($attachments) {
						        foreach ($attachments as $attachment) {
						           echo '<div>';
						           echo wp_get_attachment_image($attachment->ID, 'full');
						           echo '</div>';
						          }
						     }
						 ?> 
					</div> 
					<?php if (is_singular(array( 'work', 'logos' )) { } else { ?>
					<div class="controls-bar">
						<div class="controls clearfix"> 
							<a href="#" class="prev">previous</a> 
							<div class="pager"></div> 
							<a href="#" class="next">next</a> 
						</div>
					</div>
					<?php } ?>
					
				</div> 
				<div class="span-one-third sidebar">
					<div class="content">
					<div class="project-meta">
					<div class="clearfix">
						<label>Project:</label>
						<div class="input">
						<?php the_title(); ?>
						</div>
					</div>
						
					<div class="clearfix">	
						<label>Services:</label>
						<div class="input">
						<?php $posttags = get_the_tags();
								if ($posttags) {foreach($posttags as $tag) { echo $tag->name . '<br />'; }} ?>
						</div>
					</div>
					
					<div class="clearfix">	
						<label>Client:</label>
						<div class="input">
						<?php echo get_post_meta($post->ID, 'client', true) ?><br />
							<?php echo get_post_meta($post->ID, 'location', true) ?>
						</div>
					</div>
					</div><!-- /project-metta -->
					</div><!-- /content -->
				</div><!-- /span-one-third -->
			</div>
			</div><!-- /project --> 

</div>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<div class="pagination">
			<span class="next"><?php previous_posts_link( __( 'Previous Page', 'twentyten' ) ); ?></span>
			<span class="previous"><?php next_posts_link( __( 'Next Page', 'twentyten' ) ); ?></span>
	</div>
<?php endif; ?>

<?php get_footer(); ?>