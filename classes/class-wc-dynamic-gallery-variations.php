<?php
/**
 * WooCommerce Dynamic Gallery Variations Class
 *
 * Class Function into woocommerce plugin
 *
 * Table Of Contents
 *
 * media_fields()
 * save_media_fields()
 */

namespace A3Rev\WCDynamicGallery;

class Variations
{

	public static function change_image_in_cart_page( $product_image, $values, $cart_item_key ) {
		if ( is_array( $values ) && isset( $values['variation_id'] ) && $values['variation_id'] > 0 ) {
			return $product_image;

		} elseif ( isset( $values['product_id'] ) && $values['product_id'] > 0 ) {
			$product_id = $values['product_id'];
			// Don't change the image if product has featured image
			if ( has_post_thumbnail( $product_id ) ) return $product_image;

			$dgallery_ids = Functions::get_gallery_ids( $product_id );
			if ( is_array( $dgallery_ids ) && count( $dgallery_ids ) > 0 ) {
				// Use first image from variation gallery
				$img_id = (int) array_shift( $dgallery_ids );
				$product_image = wp_get_attachment_image( $img_id, 'woocommerce_gallery_thumbnail' );
			}
		}

		return Functions::filter_image_url( $product_image, array( $product_id, $img_id ?? 0, '', '' ) );
	}
}
