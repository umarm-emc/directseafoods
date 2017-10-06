<?php get_header(); ?>

	<!-- INTERNAL BANNERWRAP -->
	<div id="banner" class="clearfix">
		<div class="internal-container">
			<div class="hero-banner internal">

				<?php if( get_field('banner') ): ?>
					<div class="banner-container">

						<?php the_field('banner'); ?>

						<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
						}
						?>

						<!-- post title -->
						<!--h1 class="post-title title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h1-->
						<!-- /post title -->
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
	<!-- /INTERNAL BANNERWRAP -->

	<!-- MAIN -->
	<main role="main" aria-label="Content">
		<div class="internal-container">
			<!-- section -->
			<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="featured-image">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</div>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->


					<!-- CUSTOM FISH PAGE LAYOUT - START -->

					<!-- FISH INTRO DESCRIPTION  -->
					<div class="description-container">
						<?php if( get_field('fish_description') ): ?>
							<div class="fish-desc">
								<?php the_field('fish_description'); ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- /FISH INTRO DESCRIPTION  -->

					<!-- FISH USP'S -->
					<div class="usp-container">
						<?php if( get_field('usp_1') ): ?>
							<div class="usp-item">
								<?php the_field('usp_1'); ?>
							</div>
						<?php endif; ?>

						<?php if( get_field('usp_2') ): ?>
							<div class="usp-item">
								<?php the_field('usp_2'); ?>
							</div>
						<?php endif; ?>

						<?php if( get_field('usp_3') ): ?>
							<div class="usp-item">
								<?php the_field('usp_3'); ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- /FISH USP'S -->

					<!-- FISH FACTS -->
					<div class="facts-container">
						<?php if( get_field('did_you_know') ): ?>
							<div class="facts-list">
								<?php the_field('did_you_know'); ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- /FISH FACTS -->

					<!-- POPULAR FISH QUESTIONS -->
					<div class="questions-container">
						<?php if( get_field('fish_questions') ): ?>
							<div class="faq-items">
								<?php the_field('fish_questions'); ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- /POPULAR FISH QUESTIONS -->

					<!-- RECIPES -->
					<div class="recipes-container">
						<?php if( get_field('recipes') ): ?>
							<div class="recipe-items">
								<?php the_field('recipes'); ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- /RECIPES -->

					<!-- SHARE USEFUL INFORMATION -->
					<div class="share-container">
						<?php if( get_field('useful_info') ): ?>
							<div class="share-info">
								<?php the_field('useful_info'); ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- /SHARE USEFUL INFORMATION -->

					<!-- CUSTOM FISH PAGE LAYOUT - END -->


					<!-- post details -->
					<!--span class="date">
						<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
							<?php the_date(); ?> <?php the_time(); ?>
						</time>
					</span-->
					<!--span class="author"><?php _e( 'Published by', 'emc' ); ?> <?php the_author_posts_link(); ?></span-->
					<!--span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'emc' ), __( '1 Comment', 'emc' ), __( '% Comments', 'emc' )); ?></span-->
					<!-- /post details -->

					<?php the_content(); // Dynamic Content ?>

					<?php the_tags( __( 'Tags: ', 'emc' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

					<!--p><?php _e( 'Categorised in: ', 'emc' ); the_category(', '); // Separated by commas ?></p-->

					<!--p><?php _e( 'This post was written by ', 'emc' ); the_author(); ?></p-->

					<!-- <?php edit_post_link(); // Always handy to have Edit Post Links available ?> -->

					<!--?php comments_template(); ?-->

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'emc' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
		</div>
	</main>
	<!-- /MAIN -->

	<!-- GRIDWRAP3 -->
	<div id="gridwrap3" class="clearfix">
		<div class="internal-container">
			<!-- <?php if( get_field('other_fishes') ): ?>
				<div class="other-fish-intro">
					<div>
						<?php the_field('other_fishes'); ?>
					</div>
				</div>
			<?php endif; ?> -->
			<!--?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('gridwrap3')) ?-->
		</div>
	</div>
	<!-- /GRIDWRAP3 -->

	<!-- GRIDWRAP4 -->
	<div id="gridwrap4" class="clearfix">
		<div class="internal-container">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('gridwrap4')) ?>
		</div>
	</div>
	<!-- /GRIDWRAP4 -->

<?php get_footer(); ?>
