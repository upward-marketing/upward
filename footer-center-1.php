<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package upward
 */
?>

		</div><!-- #content -->
	</div><!-- #page -->
	<footer class="center-on-small-only">
		<section id="footer-info-wrap" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<h6 class="h6-reposnsive">Corporate Information</h6>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-1', 'container_class' => 'footer-menu' ) ); ?> 
					</div><!--end col-->
					<div class="col-lg-2">
						<h6 class="h6-reposnsive">On Our Website</h6>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-2', 'container_class' => 'footer-menu' ) ); ?> 
					</div><!--end col-->
					<div class="col-lg-2">
						<h6 class="h6-reposnsive">Helpful Resources</h6>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-3', 'container_class' => 'footer-menu' ) ); ?> 
					</div><!--end col-->
					<div class="col-lg-6">
						<div class="footer-branding" itemprop itemtype="LocalBusiness">
							<div class="col-lg-5">
								<span itemprop="image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-white-512.png" alt="<?php the_title(); ?>" class="img-responsive" /></span>
							</div><!--end col-->
							<div class="col-lg-7">	
									<p class="white-text">
										<strong><span itemprop="name">Upward Internet Marketing, LLC</span></strong><br />								
										<span itemprop="address">1027 S. Kansas Ave Unit B.</span><br />
										<span itemprop="city">Springfield</span>, <span itemprop="region">MO</span><span itemprop="postalCode">65807</span>
									</p>
									<p class="white-text">
										<strong>Need Help?</strong> <em>Give us a call!</em><br />
										<strong class="yellow-text"><span class="phone-footer" itemprop="phone">(417) 413-3112</span></strong>
									</p>																
							</div><!--end col-->
							<div class="clearfix"></div>
							<div class="social-section text-center">
								<a href="#" title="Visit us on Facebook" class="btn-small  btn facebook-bg btn-floating waves-effect waves-light"><i class="fa fa-facebook"></i></a>
								<a href="#" title="Visit us on Twitter" class="btn-small  btn twitter-bg btn-floating waves-effect waves-light"><i class="fa fa-twitter"></i></a>
								<a href="#" title="Visit us on Google+" class="btn-small btn google-plus-bg btn-floating waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
								<a href="#" title="Visit us on Tumblr" class="btn-small  btn tumblr-bg btn-floating waves-effect waves-light"><i class="fa fa-tumblr"></i></a>
								<a href="#" title="Visit us on Pinterest" class="btn-small  btn pinterest-bg btn-floating waves-effect waves-light"><i class="fa fa-pinterest"></i></a>
								<a href="#" title="Visit us on Instagram" class="btn-small btn instagram-bg btn-floating waves-effect waves-light"><i class="fa fa-instagram"></i></a>
								<a data-toggle="modal" data-target="#contactModal" title="Send us a message :)" class="btn-small btn help-bg btn-floating waves-effect waves-light"><i class="fa fa-comments"></i></a>
							</div>	
						</div><!--end footer branding row-->
					</div><!--end col-->
				</div><!-- end row-->
			</div><!--end containre-->
		</section><!--end footer info-->
		<div class="clearfix"></div>
		<section id="footer-copy-wrap" role="copyright">	
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer-copy text-center">
							<div class="copy-link-bg"><small><?php wp_nav_menu( array( 'theme_location' => 'above-copyright', 'container_class' => 'copyright-menu floating list' ) ); ?> </div><!--end copy link bg-->
					
							Powered with <?php printf( __( '%1$s by %2$s.', 'upward' ), 'The Upward Theme', '<a href="http://upwardinternetmarketing.com" target="new" rel="designer">Upward Internet Marketing</a>' ); ?></small>
						</div><!-- .footer links -->	
						<div class="copyright text-center">
							<small>&copy; Copyright <?php echo date("Y") ?> Upward Internet Marketing, LLC. All rights reserved.</small>
						</div><!-- .copyright -->				
									
					</div> <!-- col-lg-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
	</footer><!-- #colophon -->
	<!-- Modals -->
	<div id="contactModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h6 class="modal-title">Modal Header</h6>
		  </div>
		  <div class="modal-body">
			<p>Some text in the modal.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
