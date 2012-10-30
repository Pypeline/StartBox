<?php get_header(); ?>

	<div id="container">
		<div id="content">

			<?php
				do_action( 'before_content' );
				do_action( 'before_featured' );
				do_action( 'featured' );
				do_action( 'after_featured' );
				do_action( 'home' );
				do_action( 'after_content' );
			?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>