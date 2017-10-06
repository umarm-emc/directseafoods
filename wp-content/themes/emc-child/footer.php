
				<!-- footer -->
				<footer class="footer" role="contentinfo">
					<!-- bottomwrap -->
					<div id="bottomwrap" class="clearfix">
						<div class="internal-container">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('bottomwrap')) ?>
						</div>
					</div>
					<!-- /bottomwrap -->

					<!-- footerwrap -->
					<div id="footerwrap" class="clearfix">
						<div class="internal-container">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footerwrap')) ?>
						</div>
					</div>
					<!-- /footerwrap -->
				</footer>
				<!-- /footer -->
			</div>
			<!-- /innerwrap  -->
		</div>
		<!-- /outerwrap -->

		<?php wp_footer(); ?>

		<script src="https://use.fontawesome.com/4d00cb0560.js"></script>
		<script src="<?php echo home_url(); ?>/wp-content/themes/emc-child/js/scripts.min.js"></script>
		<script src="<?php echo home_url(); ?>/wp-content/themes/emc-child/js/vendor/owl.carousel.min.js"></script>

		<!-- analytics -->
		<!-- <script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script> -->

	</body>
</html>
