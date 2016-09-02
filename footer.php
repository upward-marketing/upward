<?php
/**
 * The template for displaying the main footer.
 *
 * @package upward
 */
?>

	
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
										<strong><span itemprop="name">Upward Internet Marketing</span> <small>(www.upward.website)</small></strong><br />								
										<!--<span itemprop="address">1027 S. Kansas Ave Unit B.</span><br />-->
										<span itemprop="city">Springfield</span>, <span itemprop="region">MO</span> <span itemprop="postalCode">65807</span>
									</p>
									<p class="white-text">
										<strong>Need Help?</strong> <em>Give us a call!</em><br />
										<strong class="yellow-text"><span class="phone-footer" itemprop="phone">(417) 413-3112</span></strong>
									</p>																
							</div><!--end col-->
							<div class="clearfix"></div>
							
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
              <div class="social-section text-center">
                <small><em>Follow Us...</em></small><br />
               
                
								<a href="https://www.facebook.com/upwardinternetmarketing" target="new" title="Visit us on Facebook" class="btn-small  btn facebook-bg btn-floating waves-effect waves-light"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/upwardIM" title="Visit us on Twitter" class="btn-small  btn twitter-bg btn-floating waves-effect waves-light"><i class="fa fa-twitter"></i></a>
								<a href="https://plus.google.com/+Upwardinternetmarketing" target="new" title="Visit us on Google+" class="btn-small btn google-plus-bg btn-floating waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
							<!--	<a href="#" title="Visit us on Tumblr" class="btn-small  btn tumblr-bg btn-floating waves-effect waves-light"><i class="fa fa-tumblr"></i></a>
								<a href="#" title="Visit us on Pinterest" class="btn-small  btn pinterest-bg btn-floating waves-effect waves-light"><i class="fa fa-pinterest"></i></a>-->
								<!--<a href="#" title="Visit us on Instagram" class="btn-small btn instagram-bg btn-floating waves-effect waves-light"><i class="fa fa-instagram"></i></a>-->
								<a data-toggle="modal" data-target="#contactModal" title="Send us a message :)" class="btn-small btn help-bg btn-floating waves-effect waves-light"><i class="fa fa-comments"></i></a>
							</div>	
							<div class="copy-link-bg"><small><?php wp_nav_menu( array( 'theme_location' => 'above-copyright', 'container_class' => 'copyright-menu floating list' ) ); ?> </small></div><!--end copy link bg-->
					
							<small>Powered with <?php printf( __( '%1$s by %2$s.', 'upward' ), 'The Upward Theme', 'Upward <a href="https://upward.website/" rel="designer">Internet Marketing</a>' ); ?></small>
						</div><!-- .footer links -->	
						<div class="copyright text-center">
							<small>&copy; Copyright <?php echo date("Y") ?> Upward Internet Marketing: a brand of The Gorilla Ad Agency, LLC. All rights reserved.</small>
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
			<h6 class="modal-title">Get A Quote</h6>
		  </div>
		  <div class="modal-body">
			<p>Get a quote by filling out this form.</p>
        <?php echo do_shortcode('[contact-form-7 id="227" title="Get A Quote"]'); ?>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- begin scripts in footer  --->
  <!-- JQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Material Design Bootstrap -->
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/mdb.js"></script>
  <!-- plugins jquery-->
  <script src="https://jscrollpane.kelvinluck.com/script/jquery.jscrollpane.min.js"></script>
  <!-- the mousewheel plugin - optional to provide mousewheel support -->
  <script type="text/javascript" src="https://jscrollpane.kelvinluck.com/script/jquery.mousewheel.js"></script>


 <script>
 // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible 
  $('.collapsible').collapsible();
   
      $(document).ready(function () {
            $('select').material_select();
        });
</script>



<!-- wp_footer begin --->
<?php wp_footer(); ?>
<!-- wp_footer end  --->
  


<!-- Modal: Contact form -->
        <div class="modal fade" id="contact-form" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Need Help?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                          <p>Send us a message as to how we can help...we will get back to you in a day or less.</p>
                          <br />
                            <?php echo do_shortcode('[contact-form-7 id="75" title="Contact form 1"]'); ?>
                          <br />
                            <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="call">
                                    <p>Or would you prefer to call? <span class="cf-phone"><i class="fa fa-phone"> (800) 207-4025</i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                    </div>
                </div>

            </div>
        </div>
        <!--/.Modal: Contact form-->

 <!-- Modal -->
    <div class="modal fade" id="Modalnewsletter" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title h4-responsive">Join our newsletter!</h4>
                </div>
                <div class="modal-body">
                    <div class="row"> 
                      <p>Become the smartest person in the room...  join our newsletter and get essential resources and information that will expand your mind and increase the size of your marketing arsenal.</p>
                        <!--mailchimp here-->
                     
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                </div>
            </div>

        </div>
    </div>
    <!--/.Modal: subscription form-->

 <!-- Modal -->
    <div class="modal fade" id="myModal-3" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header text-center">
                    <h4><i class="fa fa-user"></i> Login or Register</h4>
                   
                </div>
                <!--/.Header-->

                <!--Body-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn-floating btn-large fb-bg waves-effect waves-light"><i class="fa fa-facebook"> </i></a
                    <a class="btn-floating btn-large gplus-bg waves-effect waves-light"><i class="fa fa-google-plus"> </i></a>
                    <a class="btn-floating btn-large li-bg waves-effect waves-light"><i class="fa fa-linkedin"> </i></a>
               
                        </div>
                    </div>
                </div>
                <!--/.Body-->

                <!--Footer-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal">X</button>
                   
                </div>
                <!--/.Footer-->
            </div>
        </div>
    </div>
    <!--/.Modal Register-->    
 <!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-HpY08EAuyPaht"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-HpY08EAuyPaht.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- upward spy tag -->   
<script id="domain" data-name="2137131" type="text/javascript" src="https://spy.upward.website/js/analytics_js/client.js"></script>

 </body>
</html>