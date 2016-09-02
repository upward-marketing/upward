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
				<h1 class="page-title h1-responsive">About <?php the_title(); ?> <small><?php the_field('position'); ?></small></h1>		
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
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
