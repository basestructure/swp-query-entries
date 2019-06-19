<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

	/*
		// native fields
		the_title()
		the_content() // in this template, the_content() is already displayed. see function "swp_display_native_content_func"
		the_post_thumbnail( 'put_size_here' )
		the_tags()
		the_category()
		the_permalink() or get_permalink() // depends on how you want to use it
		the_author()
		get_the_date()

		// custom fields available
		get_post_meta( get_the_ID(), 'cta', TRUE )
		get_post_meta( get_the_ID(), 'alt_title', TRUE )
		get_post_meta( get_the_ID(), 'alt_content', TRUE )
		get_post_meta( get_the_ID(), 'alt_summary', TRUE )
	*/

?>

<section>

	<div class="item-title">
		<h4><a href='<?php echo get_the_permalink(); ?>'><?php echo get_the_title(); ?></a></h4>
	</div>


	<?php $swp_field = get_post_meta( get_the_ID(), 'alt_content', TRUE ); ?>
	<?php if ( $swp_field ): ?>
		<div class="item-content"><?php echo $swp_field; ?></div>
	<?php endif ?>


	<?php $swp_field = get_post_meta( get_the_ID(), 'pic', TRUE ); ?>
	<?php if ( $swp_field ): ?>
		<div class="item-pic"><?php echo wp_get_attachment_image( $swp_field, $size = 'medium', $icon = false ); ?></div>
	<?php endif ?>

</section>