<?php
/**
 * The template for displaying all single team member.
 *
 * @package upward
 */

get_header(); ?>

<div class="container">
	<div class="row">
	
		<div id="primary" class="col-md-8 col-lg-8">
			<main id="main" class="site-main" role="main">

			<?php 
				while ( have_posts() ) : the_post();							 
				 get_template_part( 'content', 'faqs' ); 				 
				
			?>

				<?php upward_post_nav(); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
			<!--begin secondary-->
		<div id="secondary" class="widget-area col-md-4 col-lg-4" role="complementary">	
		   
			<aside id="faq-info" class="widget">
				<div class="panel panel-default">		 
					<div class="panel-heading"><h3 class="panel-title"><strong>Info About FAQ:</strong> <?php the_title(); ?></h3></div>	
                    <div class="panel-body">	
						<p>This FAQ is associated with the following...</p>					
				        <p><strong>Service(s):</strong><br /> <?php the_field('service'); ?></p>
						<p><strong>Location(s):</strong><br /> <?php the_field('service'); ?></p>
						<p><strong>Team Member(s):</strong><br /> <?php the_field('category'); ?></p>
						<p><strong>Service(s):</strong><br /> <?php the_field('service'); ?></p>
						<p><strong>Property Listing(s):</strong><br /> <?php the_field('category'); ?></p>
						<p><strong>Tag(s):</strong><br /> <?php the_field('category'); ?></p>
					</div>						
                    					
				</div><!--end panel-->			
			</aside><!--end widget aside-->	
            <aside id="faq-cta" class="widget">
				<div class="panel panel-default">		 
					<div class="panel-heading"><h3 class="panel-title"><strong>Need Help?</strong> We love to help.</h3></div>
						<div class="panel-body">					
							<p>Get help or a free quote by clicking below. </p>
							<p><a href="#" class="btn btn-block btn-danger">Get Help!</a></p>		
						</div>					
				</div><!--end panel-->			
			</aside><!--end widget aside-->				
		</div><!--end secondary-->
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
