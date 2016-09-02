<?php
/**
 
  Template Name: Services
  Author: Travis Holt
  Date: 4/14/2016
 
 @package upward

 **/

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-8 col-lg-8">
			<main id="main" class="site-main" role="main">
        <h1><?php the_title(); ?></h1>
        <p class="lead">Below are all the services we offer...</p>
				<?php
						// WP_Query arguments
						$args = array (
							'post_type'              => array( 'services' ),
							'posts_per_page'         => '-1',
              'order' => 'random'
						);

						// The Query
						$query_services_home = new WP_Query( $args );

						// The Loop
						if ( $query_services_home->have_posts() ) {
							while ( $query_services_home->have_posts() ) {
								$query_services_home->the_post(); ?>
								
					   <!--Review card-->
							<!--Card Reveal-->
							<div class="card">
								<div class="card-image">
									<div class="view overlay hm-white-slight z-depth-1">
										<img src="<?php the_field('service_image'); ?>">
										<div class="mask waves-effect activator"></div>
									</div>
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4"><?php the_title(); ?><i class="material-icons right">more_vert</i></span>
									<p><a href="<?php the_permalink(); ?>">Read More</a></p>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4"><?php the_title(); ?><i class="material-icons right">close</i></span>
									<p><?php the_field('service_description'); ?></p>
								</div>
							</div>
							<!--/.Card Reveal-->				
						
								
						<?php	} } else { ?>
							<p>No services found...</p>
						<?php } wp_reset_postdata(); ?>
        
			</main><!-- #main -->
		</div><!-- #primary -->

			<?php get_sidebar(); ?>
		
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
