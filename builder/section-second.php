<?php
/*
* Section Second
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if( have_rows('images') ): ?>

	<section class="mx_second_section">

		<?php while( have_rows('images') ): the_row(); ?>

			<?php
				if ( get_row_layout() == 'image_box' ) :
					get_template_part( 'builder/nested/block', 'image_box' );
				endif;

				if ( get_row_layout() == 'icon_box' ) :
					get_template_part( 'builder/nested/block', 'icon_box' );
				endif; 
			?>

		<?php endwhile; ?>

	</section>

<?php endif; ?>

