<?php
/*
* Section First
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$title = get_sub_field( 'title_first' );

$image = get_sub_field( 'image_first' );

?>

<section class="mx_first_section">

	<h2><?php echo $title; ?></h2>

	<img class="mx_image" src="<?php echo $image; ?>" alt="" />

</section>