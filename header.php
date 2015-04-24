<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    
    <title><?php wp_title(''); ?></title>
    
    <meta name="keywords" content="designcor, designcor design, graphic design, graphic, design, advertising, milwaukee, wisconsin, branding, logo, identity, letterhead, Kyle Vaculik">
    
    <!-- HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
    <!-- Le Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.js"></script> 
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.designcor.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.form.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/contact.min.js"></script>
    
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-30465274-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
    

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    
    <?php wp_head(); ?>
  
  </head>

  <body <?php body_class(); ?>>
  
	<header>
		<div class="container"><span id="gradient"></span>
		
			<div class="row">
		
			<div class="span-two-thirds">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
		
			<div id="primary-navigation" role="navigation">
				<div class="menu-header">
				<ul id="menu-primary" class="menu unstyled">
					<li <?php if (is_page_template('homepage.php')) echo('class="active" value="1"'); ?> id="menu-item-home" class="menu-item"><a href="/">Home</a></li>
					<li <?php if (is_page_template('about.php')) echo('class="active" value="1"'); ?> id="menu-item-about" class="menu-item"><a href="/about/">About Us</a></li>
					<li <?php if (is_tax('work') || is_singular('portfolio')) echo('class="active" value="1"'); ?> id="menu-item-work" class="menu-item"><a href="/work/print/">Work</a></li>
					<li <?php if (is_page('Case Studies') || is_singular('case-studies')) echo('class="active" value="1"'); ?> id="menu-item-case" class="menu-item"><a href="/case-studies/">Case Studies</a></li>
					<li id="menu-item-contact" class="menu-item menu-item-8"><a href="#contact">Contact</a></li>
				</ul>
				</div>
				<div id="slide"></div>
			</div><!-- #primary-navigation -->
			</div><!-- .row -->	
		
			</div><!-- #container -->
	</header>


<div id="contactArea">
	<div id="fake-header">
	
	<div class="container">
	<div class="row">
	
		<div class="span-two-thirds">
		<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
		
		<div class="span-one-third">
		<span id="contactclose"><a href="#contact"><span class="x">X</span>close</a></span>
		</div>
	
	</div>	
	</div>	
	</div>
	<div id="contact">		
		<div class="container">							
			<div class="contact-form">
				<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact Form"]' ); ?>
			</div>
							
		</div>
	</div>
	<div id="contact-shaddow"></div>
</div>


<div class="container">