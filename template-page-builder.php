<?php
/*
  Template Name: Page Builder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

  <div class="wrapper">

    <main class="site-main">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				if ( have_rows( 'page_builder' ) ):

					while ( have_rows( 'page_builder' ) ) : the_row();

						if ( get_row_layout() == 'section_first' ):
							get_template_part( 'builder/section', 'first' );
						endif;

						if ( get_row_layout() == 'section_second' ):
							get_template_part( 'builder/section', 'second' );
						endif;
					
					endwhile;

				endif;

				the_content();

			endwhile;
		endif;
		?>

    </main><!-- #main -->

  </div><!-- Wrapper end -->

<?php get_footer(); ?>