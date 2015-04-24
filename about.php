<?php
/**
 * Template Name: About us
 *
 * About Page
 *
 * @package WordPress
 * @subpackage Designcor
 * @since Designcor 1.0
 */

get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="sub-header" class="row">
		<div class="span6">
			<h1><?php the_title(); ?></h1>
		</div>
		
		<div class="span10">
			<p>Designcor was established in 1982, when an apple was still just a fruit and design was done on a drafting table with a t-square and a pencil. While the time have changed dramatically, the foundation of good design remains the same.</p>
		</div>
	</div>

<div class="row" id="studies-body">
	<div class="span-two-thirds">
		
		<div class="study">
		
			<div class="row">
			
			<div class="span4">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<img class="size-full alignleft" title="<?php the_title(); ?>" src="<?php echo $image[0]; ?>" alt="" />
			<?php endif; ?>
			</div>
			
			<div class="span6">
			
			<blockquote>
				<p>We're proud to be celebrating our 30th year in business. That's three decades of putting good design to work!</p>
				<small>Kyle Vaculik</small>
			</blockquote>
			
			</div>
			</div>
						
			<?php the_content(); ?>
						
		</div>

	</div>

	<div class="span-one-third sidebar">
	<div class="content">
	
	<iframe width="280" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Designcor+7000+North+Green+Bay+Avenue+&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=51.621706,106.962891&amp;t=m&amp;ie=UTF8&amp;hq=Designcor+7000+North+Green+Bay+Avenue&amp;hnear=&amp;ll=43.147998,-87.936888&amp;spn=0.009393,0.012875&amp;z=15&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Designcor+7000+North+Green+Bay+Avenue+&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=51.621706,106.962891&amp;t=m&amp;ie=UTF8&amp;hq=Designcor+7000+North+Green+Bay+Avenue&amp;hnear=&amp;ll=43.147998,-87.936888&amp;spn=0.009393,0.012875&amp;z=15" style="color:#ff9900;text-align:left">View Larger Map</a></small><br><br>
	
	<p>We're conveniently located in the North Shore area of Milwaukee &#8212; Glendale to be exact. Stop by to say "hello!"</p>
	
	<address>
		<strong>Designcor</strong><br>
		7000 North Green Bay Avenue<br>
		Glendale, WI 53209<br>
		<abbr title="Phone">P:</abbr> (414) 540-2300<br>
		info@designcor.com
	</address> 
			
	</div>
	</div>
		
		<?php endwhile; ?>

</div>
	
	<?php get_footer(); ?>