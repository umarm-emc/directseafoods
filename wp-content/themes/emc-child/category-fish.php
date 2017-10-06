<?php get_header(); ?>

	<!-- INTERNAL BANNERWRAP -->
	<div id="banner" class="clearfix">
		<div class="internal-container">
			<div class="hero-banner internal">

					<?php if( get_field('banner') ): ?>
						<div class="banner-container">
							<?php the_field('banner'); ?>

							<!-- BREADCRUMBS -->
							<?php if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							} ?>
							<!-- /BREADCRUMBS -->
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
	<!-- /INTERNAL BANNERWRAP -->

	<!-- MAIN -->
	<main role="main" aria-label="Content">
		<div class="internal-container">

			<!-- SECTION -->
			<section class="clearfix">

				<!-- article -->
				<article>

					<!--?php the_content(); ?-->

					<div class="category-desc">
						<?php echo category_description(); ?>
					</div>

					<!-- CUSTOM CATEGORY LAYOUT BUILD - START -->
					<div class="category-list">
						<?php
							$args = array('parent' => 17);
							$categories =  get_categories($args);

							foreach ($categories as $category) :

								if (function_exists('category_image_src')) {
									$category_image = category_image_src( array( 'size' => 'full' ) , false );
								} else {
									$category_image = '';
								}
						?>

			        		<div class="category-item">

								<div class="item-image">
									<!--?php print apply_filters( 'taxonomy-images-list-the-terms', '' ); ?-->

									<!-- CATEGORY IMAGE (TILE IMAGE) -->

									

									
									<!--?php print apply_filters( 'taxonomy-images-list-the-terms', '', array(
	    								'before'       => '',
	    								'after'        => '',
	    								'before_image' => '',
	    								'after_image'  => '',
	    								'image_size'   => 'full',
										// 'taxonomy'     => '',
									) ); ?-->


									<!-- /CATEGORY IMAGE (TILE IMAGE) -->

									<h4 class="category-title">
										<a href="<?= get_category_link( $category->term_id ); ?>" title="<?= $category->name; ?>">
				                			<?= $category->name; ?>
				            			</a>
									</h4>

								</div>

			            		<p class="item-description">
			                    	<?php echo $category->description; ?>

									<a class="btn grad" href="<?= get_category_link( $category->term_id ); ?>" title="<?= $category->name; ?>">
										<?php echo ('Learn about us') ?>
									</a>
			            		</p>
			        		</div>

						<?php
							endforeach;
						?>
					</div>
					<!-- CUSTOM CATEGORY LAYOUT BUILD - END -->
				</article>
				<!-- /article -->

			</section>
			<!-- /SECTION -->
		</div>
	</main>
	<!-- /MAIN -->

	<!-- GRIDWRAP4 -->
	<div id="gridwrap4" class="clearfix">
		<div class="internal-container">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('gridwrap4')) ?>
		</div>
	</div>
	<!-- /GRIDWRAP4 -->

<?php get_footer(); ?>
