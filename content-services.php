<?php
/**
 * Single Post Content Template
 * @package upward
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="card">
		<div class="entry-container">
			<header class="entry-header">
				<h1 class="page-title h1-responsive"><?php the_title(); ?> <br /><small><?php the_field('alternate_name'); ?></small></h1>		
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_field('service_description'); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'upward' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php upward_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div> <!-- .entry-container -->
	</div> <!-- .card -->
</article><!-- #post-## -->
