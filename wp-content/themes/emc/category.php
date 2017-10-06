<?php get_header(); ?>

	<!-- HOME BANNERWRAP -->
	<div id="banner" class="clearfix">
		<div class="internal-container">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('homebanner')) ?>
		</div>
	</div>
	<!-- /HOME BANNERWRAP -->

	<main role="main" aria-label="Content">
		<div class="internal-container">
			<!-- section -->
			<section>

				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
				?>

				<h1><?php _e( 'Category: ', 'emc' ); single_cat_title(); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</div>
	</main>

<?php get_footer(); ?>
