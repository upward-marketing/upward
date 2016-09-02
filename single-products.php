<?php
/**
 * The template for displaying all single team member.
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
					<img src="<?php the_field('upload_image'); ?>" alt="<?php the_title(); ?> / <?php the_field('position'); ?>" class="img-responsive" />				
				</div><!--end panel-->			
			</aside><!--end widget aside-->		
			<aside id="team-member-info" class="widget">
				<div class="panel panel-default">		 
					<div class="panel-heading"><h3 class="panel-title"><?php the_title(); ?></h3></div>		
					<ul>
						<li><strong>Position</strong>: <?php the_field('position'); ?></li>
						<li><strong>Phone Number</strong>: <?php the_field('phone_number'); ?></li>
						<li><strong>Email</strong>: <?php the_field('email'); ?></li>
						<li><strong>Twitter</strong>: <?php the_field('twitter'); ?></li>
						<li><strong>Google+</strong>: <?php the_field('google_plus'); ?></li>
					</ul>				
				</div><!--end panel-->			
			</aside><!--end widget aside-->		
		</div><!--end secondary-->
		<div id="primary" class="col-md-8 col-lg-8">
			<main id="main" class="site-main" role="main">

			<?php 
				while ( have_posts() ) : the_post();				
				include_once( ABSPATH . 'wp-admin/includes/plugin.php' );				
				if ( is_plugin_active( 'upward-team/upward-team.php' ) ) {				 
				 get_template_part( 'content', 'team' ); 				 
				} 				
				else{					
					echo "<div class='alert alert-danger'><strong>Oops:</strong> Upward Team Plugin Required.</div>";
				}
			?>

				<?php upward_post_nav(); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
