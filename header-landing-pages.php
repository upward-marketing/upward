<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<title><?php wp_title(); ?></title>
	
	<?php 	
	wp_head(); 	
	?>
    
  
  <!-- Material Design Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/css/mdb.min.css" rel="stylesheet">
  
   <!-- Material Design Bootstrap -->
  <link href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/css/defaults.css" rel="stylesheet">
  
  <!-- Template style -->
  <link href="<?php echo get_stylesheet_directory_uri() ; ?>/style.css" rel="stylesheet"> 
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.upward.website/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.upward.website/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'upward' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<nav class="navbar navbar-inverse" role="navigation">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</div>

					<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
					 <?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => false,
							'menu_class'        => 'nav navbar-nav navbar-left',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>

					</div> <!-- .navbar-collapse -->
				</div><!-- /.container -->
			</nav><!-- .navbar .navbar-default -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
