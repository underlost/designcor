<?php
/**
 * Template Name: Homepage
 *
 * The Frontpage
 *
 * @package WordPress
 * @subpackage Designcor
 * @since Designcor 1.0
 */

get_header(); ?>

	<div id="headlines">
	
	<section id="feature" role="banner">
				
				<div class="slidearea"> 
						
					<?php $firstClass = 'initial'; ?>
					
					<?php if (have_posts()) :
					$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 4 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="post <?php echo $firstClass; ?>" style="background-image: url('<?php echo $image[0]; ?>')">
						<?php $firstClass = ""; ?>
						<h3><?php the_title(); ?></h3>
						<p>
						
						<?php
						ob_start();
						 the_content(''.__('Read more', 'sandbox').'');
						$old_content = ob_get_clean();
						$new_content = strip_tags($old_content);
						echo $new_content;
						?>
						
						<span class="view-project">
							<a href="/work/print/#project-<?php the_ID(); ?>" tittle="<?php the_title(); ?>">View Project</a>
							<!-- <a href="<?php the_permalink(); ?>" tittle="<?php the_title(); ?>">View Project</a> -->
						</span>

						</p>

						</div>
						<?php endif; ?>
									
					<?php endwhile; endif; ?>
					
				</div> 
				
				<ul class="pagination"> 
					<li class="active"><a href="#">1</a></li> 
					<li><a href="#">2</a></li> 
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
				</ul> 
			</section> 
	
				
	</div>
	<div class="row">
	<div class="span-two-thirds">
	
		<div class="post">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
		
		<div id="quotes">
		
			<?php if (have_posts()) :
			$args = array( 'post_type' => 'testimonials', 'orderby' => 'rand', 'posts_per_page' => '1' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<blockquote>
				<p><?php
				ob_start();
				 the_content(''.__('Read more <span class="meta-nav">&raquo;</span>', 'sandbox').'');
				$old_content = ob_get_clean();
				$new_content = strip_tags($old_content);
				echo $new_content;
				?></p>
				
				<small>
					<?php echo get_post_meta($post->ID, 'client', true) ?> <br />
					<?php echo get_post_meta($post->ID, 'location', true) ?>
				</small>
			
			</blockquote>
						
			<?php endwhile; endif; ?>
		</div>
		
		<div id="big-idea">
			<h2>What's the Big Idea?</h2>
			<p>Do you have a project in mind? Need to better position your brand? Just want to pick our brains? We've been creating big ideas for 30 years. <span class="menu-item menu-item-8"><a href="#contact">Let's talk!</a></span></p>
		</div>
		
		<div id="good-design">
			<p>We’ve been putting <span>good design</span> to work since 1982!</p>
		</div>
	</div>
	
	<div class="span-one-third sidebar">
		<div class="content">
		<h2>What do we do?</h2>
		<p>Basically, we make connections. Utilizing our years of experience along with our creative expertise, we connect businesses to their customers.</p>
		
		<ul class="unstyled">			
			<li>Marketing Design</li>
			<li>Advertising Design</li>
			<li>Logos and Identities</li>
			<li>Corporate Collateral</li>
			<li>Brochures and Catalogs</li>
			<li>Display Ads</li>
			<li>Point-of-Sale Advertising</li>
			<li>Direct Mail</li>
			<li>Publication Design</li>
			<li>Web Design</li>
			<li>Product Photography</li>
			<li>And a whole lot more!</li>
		</ul>
				
		<p>We've been putting good design to work for three decades. From large marketing campaigns to small design projects and everything in between, we've done it all; with a proven record of achieving...<span class="results"><a href="/">Results by design.</a></span></p>
	</div>	
	</div><!-- /Sidebar -->
	
	</div>

<script> 
  $('.slidearea div.post').designcorSlider();
</script> 

<?php get_footer(); ?>