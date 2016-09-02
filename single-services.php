<?php
/**
 * The template for displaying all single service.
 *
 * @package upward
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<!--begin secondary-->
		<div id="secondary" class="widget-area col-md-4 col-lg-4" role="complementary">	
		    <aside id="team-member-image" class="widget">
				<div class="panel panel-primary shadow">		 	
					<img src="<?php the_field('service_image'); ?>" alt="<?php the_title(); ?> / <?php the_field('alternate_name'); ?>" class="img-responsive" />				
				</div><!--end panel-->			
			</aside><!--end widget aside-->		
			<aside id="team-member-info" class="widget">
				<div class="panel panel-default">		 
					<div class="panel-heading"><h3 class="panel-title"><?php the_title(); ?></h3>
            <small class="text-muted">( <?php the_field('alternate_name'); ?> )</small></div>		
					<ul class="list-hover">
						
						<li><strong>Call Us:</strong>: (417) 413-3112</li>
            <li><strong>Get A Quote</strong>: <a class="btn btn-sdm btn-danger" href="<?php the_field('contact_link'); ?>">click here</a></li>
				</div><!--end panel-->			
			</aside><!--end widget aside-->		
		</div><!--end secondary-->
		<div id="primary" class="col-md-8 col-lg-8">
			<main id="main" class="site-main" role="main">

			<?php 
							 
				 get_template_part( 'content', 'services' ); 				 
			
			?>

				<?php upward_post_nav(); ?>

	

			</main><!-- #main -->
		</div><!-- #primary -->
		
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
