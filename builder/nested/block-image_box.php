<?php
/*
* Nested Image Box
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$title = get_sub_field( 'title' );

	$image = get_sub_field( 'image' );

?>

<div class="mx_image_wrap">

	<h3><?php echo $title; ?></h3>

	<img src="<?php echo $image; ?>" alt="" />
	
</div>