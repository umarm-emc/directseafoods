<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="https://fonts.googleapis.com/css?family=Rasa:300,400,500,600,700" rel="stylesheet">
		<link href="<?php echo home_url(); ?>/wp-content/themes/emc-child/images/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo home_url(); ?>/wp-content/themes/emc-child/images/icons/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!-- JQuery and Modernizr Include Files -->
		<script src="<?php echo home_url(); ?>/wp-content/themes/emc-child/js/vendor/jquery-3.2.1.min.js"></script>
		<script src="<?php echo home_url(); ?>/wp-content/themes/emc-child/js/vendor/modernizr-2.8.3.min.js"></script>

		<?php wp_head(); ?>

		<!-- <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script> -->
		<!-- Template CSS Include -->
		<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/emc-child/css/template.css" />

	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div id="outerwrap">
			<!-- innerwrap -->
			<div id="innerwrap">
				<!-- menu button -->
				<div id="topwrap" class="clearfix">
					<div class="internal-container">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('topwrap')) ?>
						<a href="#menu" class="nav-btn">Menu</a>
					</div>
				</div>
				<!-- /menu button -->

				<!-- navwrap -->
				<div id="navwrap" class="clearfix">
					<div class="internal-container">
						<!-- nav -->
						<nav id="menu" role="navigation">
							<div class="menu-inner">
								<?php emc_nav(); ?>
							</div>

							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('navwrapper')) ?>
							
							<a href="#topwrap" class="close-btn" id="nav-close-btn">Close menu</a>
						</nav>

						<!-- /nav -->
					</div>
				</div>
				<!-- /navwrap -->

				<!-- header -->
				<!--header class="header clear" role="banner">
					<!--div class="internal-container">
						<!-- logo -->
						<!--div class="logo">
							<!--a href="<?php echo home_url(); ?>">
								< svg logo -->
								<!-- <img src="<!?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img"> -->

								<!-- <img src="<!?php echo home_url(); ?>/wp-content/themes/emc-child/images/logo.svg" alt="Logo" class="logo-img"> -->
								<!--img src="<?php echo home_url(); ?>/wp-content/themes/emc-child/images/logo.png" alt="Logo" class="logo-img"-->
							</a-->
						</div-->
						<!-- /logo -->
					</div-->
				</header-->
				<!-- /header -->
