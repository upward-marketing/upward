<?php
/**
 
  Template Name: Contact Us
  Author: Travis Holt
  Date: 4/14/2016
 
 @package upward

 **/

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12 col-lg-12">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		
		
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
