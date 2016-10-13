<?php

?>
	<!-- Footer Widgets-->
		<footer	id="site-footer" class="col-md-12">
			<div class="col-xs-12 col-sm-6 col-md-6 footer-logo">
				<span><img src="/assets/global/logo.png"></span>
			</div>


			<div class="row">
				<div class="col-sm-4 col-md-4">
					<?php get_sidebar('left-footer');?>
				</div>
				<div class="col-sm-4 col-md-4">
					<?php get_sidebar('mid-footer');?>
				</div>
				<div class="col-sm-4 col-md-4">
					<?php get_sidebar('right-footer'); ?>
				</div>
			</div>
			</footer>
			<!-- Footer Widgets -->

	</div><!-- #mk-page-wrapper -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
