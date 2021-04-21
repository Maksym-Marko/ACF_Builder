<?php
/*
* Nested Icon Box
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$icon = get_sub_field( 'icon' );

	$text = get_sub_field( 'text' );

?>

<div class="mx_icon_wrap">

	<h3><?php echo $icon; ?></h3>

	<h4><?php echo $text; ?></h4>
	
</div>