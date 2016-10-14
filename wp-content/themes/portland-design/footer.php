<?php

?>
	<!-- Footer Widgets-->
		<footer	id="site-footer" class="col-md-12">
			<div class="col-xs-12 col-sm-6 col-md-6 footer-logo">
				<span><img src=""></span>
			</div>

			<div class="col-xs-12 col-sm-5 col-md-5 footer-social-icons">
				<a href="https://www.instagram.com/portlanddesign/" target="_blank"><img class="footer-icon-size" ng-src="/assets/global/black-instagram.svg"/></a>
				<a href="https://twitter.com/PortlandDesign" target="_blank"><img class="footer-icon-size" ng-src="/assets/global/black-twitter.svg"/></a>
				<a href="https://www.facebook.com/PortlandDesign/" target="_blank"><img class="footer-icon-size" ng-src="/assets/global/black-facebook.svg"/></a>
				<a href="https://www.linkedin.com/company/portland" target="_blank"><img class="footer-icon-size" ng-src="/assets/global/black-linkedin.svg"/></a>
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
