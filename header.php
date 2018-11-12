<?php 
  $page = get_queried_object();
?><!DOCTYPE html>
<!--[if lte IE 11]><html <?php language_attributes(); ?> class="no-js lte-ie11"> <![endif]-->
<!--[if gte IE 11]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<?php wp_head(); ?>

<?php
	// Connect to the Browsersync server
	$dev_hostname = "localhost:8000";
	if( (strpos($_SERVER['SERVER_NAME'], ".") === false) || ($_SERVER['SERVER_NAME'] === $dev_hostname) ) {
		echo "<script type=\"text/javascript\" id=\"__bs_script__\">document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js'><\/script>\".replace(\"HOST\", window.location.hostname));</script>";
	}
?>
</head>
<body <?php body_class(); ?>>
<div class="site-container">

	<header id="primary-nav">
		<div class="inner-wrap">
			<div class="logo-wrap">
				<h1>Bike</h1>
			</div>

			<div class="links-wrap">
				<nav class="desktop-nav" >
					<ul>
						<?php wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false,
							'items_wrap' => '%3$s', // removes the <ul> from the menu as we're using our own markup
							'fallback_cb' => mytheme_menu_fallback
						)); ?>
					</ul>
				</nav>
			</div>
		</div>						
	</header>

	<div class="site-content">

	HAHAHA