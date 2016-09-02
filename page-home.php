<?php
/**
 
  Template Name: Home
  Author: Travis Holt
  Date: 4/14/2016
 @package upward

 **/

//get_header(); 
include_once( 'header-home.php' );

?>
	<?php while ( have_posts() ) : the_post(); ?>
<section id="home-1"  style="background:transparent url(<?php the_field('section_1_background'); ?>) fixed top center; background-size:cover; ">
	<div class="container">
		<div class="row">
						<div class="col-md-12 text-center">
							<h1 class="h1-responsive"><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<a data-toggle="modal" data-target="#contactModal" class="btn btn-primary btn-lg">Start Here<?php the_field('cta_button_text'); ?></a>
						</div><!--end column-->
						
					</div><!-- end row-->
				</div><!-- end container-->
		</div><!--end mask-->
</section><!-- end home section 1 -->

<section id="home-2" style="background-color:<?php the_field('section_2_background'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center"><?php the_field('section_2_title'); ?></h2>
				<p class="lead text-center"><?php the_field('section_2_content'); ?></p>
				<div class="row">

				<?php
						// WP_Query arguments
						$args = array (
							'post_type'              => array( 'services' ),
							'posts_per_page'         => '3',
							'ignore_sticky_posts'    => true,
						);

						// The Query
						$query_services_home = new WP_Query( $args );

						// The Loop
						if ( $query_services_home->have_posts() ) {
							while ( $query_services_home->have_posts() ) {
								$query_services_home->the_post(); ?>
								
					   <!--Review card-->
					   <div class="col-md-4">
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
							</div><!--end column-->
						
								
						<?php	} } else { ?>
							<p>No services found...</p>
						<?php } wp_reset_postdata(); ?>
										<div class="clearfix clear"></div>
          <p><a data-toggle="modal" data-target="#contactModal" class="btn btn-primary btn-lg">I want a free quote.<?php the_field('cta_button_text'); ?></a></p>
					</div><!--end card row-->	
			</div><!--end column-->
		</div><!--end of row-->
	</div><!--end container-->
</section>
<!-- end home section 2 -->
<section id="home-3"  style="background:transparent url(<?php the_field('section_3_background'); ?>) fixed top center; background-size:cover; ">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><?php the_field('section_3_title'); ?></h2>
        <p class="lead text-center"><?php the_field('section_3_content'); ?></p>
				<div class="row">
          	<div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				<?php
						// WP_Query arguments
						$args = array (
							'post_type'              => array( 'reviews' ),
							'posts_per_page'         => '3'
						);

						// The Query
						$query_services_home = new WP_Query( $args );

						// The Loop
						if ( $query_services_home->have_posts() ) {
							while ( $query_services_home->have_posts() ) {
								$query_services_home->the_post(); ?>
								
					
							
          
				    <div class="item active">
                        <div class="row">
                          <div class="col-md-3 col-xs-1"></div><!--gap-->
                           <div class="col-md-6 col-xs-10"> <img src="<?php the_field('reviewer_photo'); ?>" class="img-responsive" /></div>
                        <div class="col-md-3 col-xs-1"></div><!--gap-->   
                         </div>
				    	<blockquote>
				    		<p><?php the_field('review'); ?></p>
				    	</blockquote>	
				    </div>
				   
						
								
						<?php	} } else { ?>
							<p>No services found...</p>
						<?php } wp_reset_postdata(); ?>	
          </div>
			</div>	
          </div>
          <div class="clearfix clear"></div>
          <p><a data-toggle="modal" data-target="#contactModal" class="btn btn-primary btn-lg">I want a free quote.<?php the_field('cta_button_text'); ?></a></p>
					</div><!--end card row-->	
			</div><!--end column-->
		</div><!--end of row-->
	</div><!--end container-->
</section>
<!-- end home section 3 -->

<section id="home-5">
	<?php 

$location = get_field('section_5_background');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>
</section>
<!-- end home section 5  -->

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
