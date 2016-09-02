<?php
/**
 
  Template Name: FAQ's
  Author: Travis Holt
  Date: 4/14/2016
 
 @package upward

 **/

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-8 col-sm-12">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'faqs' ); ?>
					

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		
		
	<?php get_sidebar(); ?>
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
