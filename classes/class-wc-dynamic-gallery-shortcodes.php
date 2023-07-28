<?php

namespace A3Rev\WCDynamicGallery;

class Shortcodes 
{
	public static function render_block_core_shortcode( $content, $parsed_block, $block ) {
		if ( has_shortcode( $content, 'wc_product_dynamic_gallery' ) || has_shortcode( $content, 'wc_product_dgallery' ) ) {
			$content = do_shortcode( $content );
		}
	    return $content;
	}

	public static function parse_shortcode_product_dynamic_gallery( $attributes ) {
		// Don't show content for shortcode on Dashboard, still support for admin ajax
		if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) return;

		if ( ! is_array( $attributes ) ) {
			$attributes = array();
		}

		$attr = array_merge(array(
			'product_id' => '', // leave empty for current product
        ), $attributes );

        $product_id = esc_attr( $attr['product_id'] );	// XSS ok

        if ( empty( $product_id ) ) {
	    	global $product;

	    	if ( $product && is_a( $product, 'WC_Product' ) ) {
	    		$product_id = $product->get_id();
	    	}
	    }

        if ( empty( $product_id ) && is_product() ) {
        	global $post;

        	$product_id = $post->ID;
        }

        if ( empty( $product_id ) ) {
        	return '';
        }

        $gallery_html = '';

		$global_wc_dgallery_activate = get_option( WOO_DYNAMIC_GALLERY_PREFIX . 'activate' );

		$actived_d_gallery = 0;
		if ( 'no' != $global_wc_dgallery_activate ) {
			$actived_d_gallery = 1;
		}

		if ( 1 == $actived_d_gallery ) {
			// Include google fonts into header
			add_action( 'wp_enqueue_scripts', array( '\A3Rev\WCDynamicGallery\Functions', 'add_google_fonts'), 9 );

			wp_enqueue_style( 'a3-dgallery-style' );
			wp_enqueue_script( 'a3-dgallery-script' );

			$popup_gallery = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'popup_gallery' );
			if ($popup_gallery == 'fb') {
				wp_enqueue_style( 'woocommerce_fancybox_styles' );
				wp_enqueue_script( 'fancybox' );
			} elseif ($popup_gallery == 'colorbox') {
				wp_enqueue_style( 'a3_colorbox_style' );
				wp_enqueue_script( 'colorbox_script' );
			}

			ob_start();
			Main::wc_dynamic_gallery_display( $product_id, true );

			$gallery_html = ob_get_clean();
		}

        return $gallery_html;
	}
}
