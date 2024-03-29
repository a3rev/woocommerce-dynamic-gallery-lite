<?php
/**
 * WooCommerce Gallery Display Class
 *
 * Class Function into woocommerce plugin
 *
 * Table Of Contents
 *
 * wc_dynamic_gallery_display()
 */

namespace A3Rev\WCDynamicGallery;

class Main
{
	public static function frontend_register_scripts() {
		$suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';

		wp_register_style( 'a3-dgallery-style', WOO_DYNAMIC_GALLERY_JS_URL . '/mygallery/jquery.a3-dgallery.css', array(), WOO_DYNAMIC_GALLERY_VERSION );

		wp_register_script( 'a3-dgallery-script', WOO_DYNAMIC_GALLERY_JS_URL . '/mygallery/jquery.a3-dgallery.js', array( 'jquery' ), WOO_DYNAMIC_GALLERY_VERSION, true );
		wp_register_script( 'a3-dgallery-variations-script', WOO_DYNAMIC_GALLERY_JS_URL . '/select_variations.js', array( 'jquery', 'wc-add-to-cart-variation' ), WOO_DYNAMIC_GALLERY_VERSION, true );

		$popup_gallery = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'popup_gallery' );
		if ( 'fb' == $popup_gallery ) {
			wp_register_style( 'woocommerce_fancybox_styles', WOO_DYNAMIC_GALLERY_JS_URL . '/fancybox/jquery.fancybox.min.css', array(), '1.3.4' );
			wp_register_script( 'fancybox', WOO_DYNAMIC_GALLERY_JS_URL . '/fancybox/jquery.fancybox'.$suffix.'.js', array( 'jquery' ), '1.3.4', true );
		} elseif ( 'colorbox' == $popup_gallery  ) {
			wp_register_style( 'a3_colorbox_style', WOO_DYNAMIC_GALLERY_JS_URL . '/colorbox/colorbox.css', array(), '1.4.4' );
			wp_register_script( 'colorbox_script', WOO_DYNAMIC_GALLERY_JS_URL . '/colorbox/jquery.colorbox'.$suffix.'.js', array( 'jquery' ), '1.4.4', true );
		}
	}

	public static function backend_register_scripts() {
		$suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';

		wp_register_style( 'a3-dgallery-style', WOO_DYNAMIC_GALLERY_JS_URL . '/mygallery/jquery.a3-dgallery.css', array( 'thickbox' ), WOO_DYNAMIC_GALLERY_VERSION );
		wp_register_style( 'woocommerce_fancybox_styles', WOO_DYNAMIC_GALLERY_JS_URL . '/fancybox/jquery.fancybox.min.css', array(), '1.3.4' );
		wp_register_style( 'a3_colorbox_style', WOO_DYNAMIC_GALLERY_JS_URL . '/colorbox/colorbox.css', array(), '1.4.4' );
		wp_register_style( 'a3-dynamic-metabox-admin-style', WOO_DYNAMIC_GALLERY_CSS_URL . '/a3.dynamic.metabox.admin.css', array(), WOO_DYNAMIC_GALLERY_VERSION );
		wp_register_style( 'a3-dynamic-metabox-admin-style-rtl', WOO_DYNAMIC_GALLERY_CSS_URL . '/a3.dynamic.metabox.admin.rtl.css', array(), WOO_DYNAMIC_GALLERY_VERSION );

		wp_register_script( 'preview-gallery-script', WOO_DYNAMIC_GALLERY_JS_URL.'/galleries.js', array( 'jquery', 'thickbox' ), WOO_DYNAMIC_GALLERY_VERSION, true );
		wp_register_script( 'a3-dgallery-script', WOO_DYNAMIC_GALLERY_JS_URL . '/mygallery/jquery.a3-dgallery.js', array( 'jquery' ), WOO_DYNAMIC_GALLERY_VERSION, true );

		wp_register_script( 'fancybox', WOO_DYNAMIC_GALLERY_JS_URL . '/fancybox/jquery.fancybox'.$suffix.'.js', array( 'jquery' ), '1.3.4', true );
		wp_register_script( 'colorbox_script', WOO_DYNAMIC_GALLERY_JS_URL . '/colorbox/jquery.colorbox'.$suffix.'.js', array( 'jquery' ), '1.4.4', true );

		wp_register_script( 'a3-dynamic-metabox-admin-script', WOO_DYNAMIC_GALLERY_JS_URL . '/a3.dynamic.metabox.admin' . $suffix . '.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-widget', 'jquery-ui-mouse', 'jquery-ui-sortable' ), WOO_DYNAMIC_GALLERY_VERSION );
	}

	public static function init_dynamic_gallery( $product_id = 0, $is_product_showing = true ) {
		if ( empty( $product_id ) ) return '';

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
	}

	public static function wc_dynamic_gallery_display( $product_id = 0, $is_shortcode = false ) {
		$product_id = Functions::get_current_product_id( $product_id );
		if ( empty( $product_id ) ) return '';
		
		$product = wc_get_product( $product_id );
	?>
		<div class="<?php echo ( ! $is_shortcode ? 'images' : '' ); ?> gallery_container">
	<?php
		do_action('wc_dynamic_gallery_before_gallery');

		self::get_gallery_main( $product_id );

		do_action('wc_dynamic_gallery_after_gallery');
	?>
		</div>
	<?php
	}

	public static function get_gallery_main( $product_id = 0 ) {

		/**
		 * Single Product Image
		 */
		global $post;

		$global_stop_scroll_1image = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'stop_scroll_1image' );
		$enable_scroll             = 'true';
		$display_back_and_forward  = 'true';
		$no_image_uri              = Functions::get_no_image_uri();

		if ( $product_id < 1 ) {
			$product_id = $post->ID;
		}

		// Get gallery of this product
		$dgallery_ids = Functions::get_gallery_ids( $product_id );
		if ( ! is_array( $dgallery_ids ) ) {
			$dgallery_ids = array();
		}

		$main_dgallery       = array();
		$ogrinal_product_id  = $product_id;
		$product_id          .= '_' . rand( 100, 10000 );
		$lightbox_class      = 'lightbox';
		$thumbs_list_class	 = '';
		$max_height          = 0;
		$width_of_max_height = 0;

		$single_size_name    = 'woocommerce_single';
		$thumbnail_size_name = 'woocommerce_gallery_thumbnail';

		// Process to get max height and width of max height for set gallery container
		if ( count( $dgallery_ids ) > 0 ) {
			$lightbox_class = 'lightbox';

			// Assign image data into main gallery array
			foreach ( $dgallery_ids as $img_id ) {
				// Check if image id is existed on main gallery then just use it again for decrease query
				if ( isset( $main_dgallery[$img_id] ) ) {
					continue;
				}

				$image_data             = get_post( $img_id );
				$large_image_attribute  = wp_get_attachment_image_src( $img_id, 'large' );

				$single_image_attribute = wp_get_attachment_image_src( $img_id, $single_size_name );
				$thumb_image_attribute  = wp_get_attachment_image_src( $img_id, $thumbnail_size_name );

				$alt           = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
				$single_srcset = '';
				$single_sizes  = '';
				$thumb_srcset  = '';
				$thumb_sizes   = '';

				if ( function_exists( 'wp_get_attachment_image_srcset' ) ) {
					$single_srcset = wp_get_attachment_image_srcset( $img_id, $single_size_name );
					$thumb_srcset = wp_get_attachment_image_srcset( $img_id, $thumbnail_size_name );
				}
				if ( function_exists( 'wp_get_attachment_image_sizes' ) ) {
					$single_sizes = wp_get_attachment_image_sizes( $img_id, $single_size_name );
					$thumb_sizes = wp_get_attachment_image_sizes( $img_id, $thumbnail_size_name );
				}

				$main_dgallery[$img_id] = array (
						'caption_text' => $image_data->post_excerpt,
						'alt_text'     => $alt,
						'thumb'        => array (
								'url'        => $thumb_image_attribute[0],
								'width'      => $thumb_image_attribute[1],
								'height'     => $thumb_image_attribute[2],
								'img_srcset' => $thumb_srcset,
								'img_sizes'  => $thumb_sizes,
							),
						'single'        => array (
								'url'        => $single_image_attribute[0],
								'width'      => $single_image_attribute[1],
								'height'     => $single_image_attribute[2],
								'img_srcset' => $single_srcset,
								'img_sizes'  => $single_sizes,
							),
						'large'			=> array (
								'url'        => $large_image_attribute[0],
							),
					);

				$height_current = $single_image_attribute[2];
				if ( $height_current > $max_height ) {
					$max_height          = $height_current;
					$width_of_max_height = $single_image_attribute[1];
				}
			}
		}
		?>

		<div class="product_gallery">
            <?php
			$woo_dg_width_type   = get_option( WOO_DYNAMIC_GALLERY_PREFIX . 'width_type', '%' );
			$gallery_height_type = get_option( WOO_DYNAMIC_GALLERY_PREFIX . 'gallery_height_type', 'fixed' );
			if ( $woo_dg_width_type == 'px' ) {
				$g_width  = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'product_gallery_width_fixed' ).'px';
				$g_height = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'product_gallery_height' );
			} else {
				$g_width  = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'product_gallery_width_responsive' ).'%';
			}

			// Set height for when gallery is responsive wide or dynamic height
			if ( 'px' != $woo_dg_width_type || 'dynamic' == $gallery_height_type ) {
				if ( $max_height > 0 ) {
					$g_height = false;
			?>
	            <script type="text/javascript" id="a3-wc-dynamic-gallery-inline-script">
				(function($){
					$(function(){
						a3revWCDynamicGallery_<?php echo $product_id; ?> = {

							setHeightProportional: function () {
								var image_wrapper_width  = parseInt( $( '#gallery_<?php echo $product_id; ?>' ).find('.a3dg-image-wrapper').outerWidth() );
								var width_of_max_height  = parseInt(<?php echo $width_of_max_height; ?>);
								var image_wrapper_height = parseInt(<?php echo $max_height; ?>);
								if( width_of_max_height > image_wrapper_width ) {
									var ratio = width_of_max_height / image_wrapper_width;
									image_wrapper_height = parseInt(<?php echo $max_height; ?>) / ratio;
								}
								$( '#gallery_<?php echo $product_id; ?>' ).find('.a3dg-image-wrapper').css({ height: image_wrapper_height });
							}
						}

						a3revWCDynamicGallery_<?php echo $product_id; ?>.setHeightProportional();

						$( window ).on('resize', function() {
							a3revWCDynamicGallery_<?php echo $product_id; ?>.setHeightProportional();
						});
						$(window).on( 'resize', function() {
							var idx = $("#gallery_<?php echo $product_id; ?> .a3dg-image img").attr("idx");
							$('body').trigger('wc_dg_resize', [ idx ]);
						});
					});
				})(jQuery);
				</script>
			<?php
				} else {
					$g_height = 138;
				}
			}

			$woocommerce_thumbnail = wc_get_image_size( $thumbnail_size_name );
			$g_thumb_width         = $woocommerce_thumbnail['width'];
			$g_thumb_height        = $woocommerce_thumbnail['height'];
			$thumb_show_type       = get_option( WOO_DYNAMIC_GALLERY_PREFIX . 'thumb_show_type', 'slider' );
			$thumb_columns         = get_option( WOO_DYNAMIC_GALLERY_PREFIX . 'thumb_columns', 3 );
			$thumb_spacing         = get_option( WOO_DYNAMIC_GALLERY_PREFIX . 'thumb_spacing', 10 );
			if ( 'static' == $thumb_show_type ) {
				$thumbs_list_class = 'a3dg-thumbs-static';
			}

			$g_auto               = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'product_gallery_auto_start' );
			$g_speed              = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'product_gallery_speed' );
			$g_effect             = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'product_gallery_effect' );
			$g_animation_speed    = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'product_gallery_animation_speed' );
			$product_gallery_nav  = 'yes';
			$main_margin_left     = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'main_margin_left' );
			$main_margin_right    = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'main_margin_right' );
			$navbar_margin_left   = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'navbar_margin_left' );
			$navbar_margin_right  = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'navbar_margin_right' );
			$lazy_load_scroll     = 'yes';

			$default_enable_gallery_thumb = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'enable_gallery_thumb', 'yes' );
			$enable_gallery_thumb         = get_post_meta( $ogrinal_product_id, '_wc_dgallery_enable_gallery_thumb', true );
			if ( $enable_gallery_thumb == '' ) {
				$enable_gallery_thumb = $default_enable_gallery_thumb;
			}
			if ( $enable_gallery_thumb == 1 || $enable_gallery_thumb == 'yes' ) {
				$enable_gallery_thumb = 'yes';
			} else {
				$enable_gallery_thumb = 'no';
			}

			$display_ctrl = '';
			if ( 'no' == $product_gallery_nav ) {
				$display_ctrl = 'display:none !important;';
			}

			$popup_gallery     = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'popup_gallery' );
			$hide_thumb_1image = get_option( WOO_DYNAMIC_GALLERY_PREFIX.'hide_thumb_1image', 'yes' );
			$start_label       = __('START SLIDESHOW', 'woocommerce-dynamic-gallery' );
			$stop_label        = __('STOP SLIDESHOW', 'woocommerce-dynamic-gallery' );

			if ( 'yes' == $global_stop_scroll_1image && count( $dgallery_ids ) <= 1 ) {
				$enable_scroll            = 'false';
				$display_back_and_forward = 'false';
				$start_label              = '';
				$stop_label               = '';
			}

			if ( 'static' == $thumb_show_type ) {
				$display_back_and_forward = 'false';
			}

			$zoom_label        = __('ZOOM +', 'woocommerce-dynamic-gallery' );
			if ( 'deactivate' == $popup_gallery ) {
				$zoom_label     = '';
				$lightbox_class = 'lightbox';
			}

			if ( '' == $lightbox_class && 'false' == $enable_scroll ) {
				$display_ctrl = 'display:none !important;';
			}

			$_upload_dir = wp_upload_dir();
			if ( file_exists( $_upload_dir['basedir'] . '/sass/woo_dynamic_gallery.min.css' ) ) {
				echo  '<link media="all" type="text/css" href="' . str_replace(array('http:','https:'), '', $_upload_dir['baseurl'] ) . '/sass/woo_dynamic_gallery.min.css?ver='.$GLOBALS[WOO_DYNAMIC_GALLERY_PREFIX.'less']->get_css_file_version().'" rel="stylesheet" />' . "\n";
			} else {
				include( WOO_DYNAMIC_GALLERY_DIR . '/templates/customized_style.php' );
			}

            echo '<style>
            	.product.has-default-attributes.has-children > .images {
            		opacity: 1 !important;
            	}
				.a3-dgallery .a3dg-image-wrapper {
					'. ( ( $g_height != false ) ? 'height: '. $g_height.'px;' : '' ) .'
				}
				.product_gallery #gallery_'.$product_id.' .a3dg-navbar-control {
					'.$display_ctrl.';
					width: calc( 100% - '.( $navbar_margin_left + $navbar_margin_right ).'px );
				}';

				if ( 'no' == $lazy_load_scroll ) {
					echo '.a3-dgallery .lazy-load {
						display: none !important;
					}';
				}

				if ( 'yes' == $hide_thumb_1image && count( $dgallery_ids ) <= 1 ) {
					echo '#gallery_'.$product_id.' .a3dg-nav {
						display:none;
					}
					.woocommerce #gallery_'.$product_id.' .images {
						margin-bottom: 15px;
					}';
				}

				if ( 'yes' == $global_stop_scroll_1image && count( $dgallery_ids ) <= 1 ) {
					echo '#gallery_'.$product_id.' .a3dg-navbar-control {
						width: calc( 50% - '.( ( $navbar_margin_left + $navbar_margin_right ) / 2 ).'px ) !important;
					}
					#gallery_'.$product_id.' .a3dg-navbar-control .icon_zoom {
						width: 100%;
					}
					#gallery_'.$product_id.' .a3dg-navbar-separator,
					#gallery_'.$product_id.' .slide-ctrl {
						display: none !important;
					}';
				}
				if ( 'deactivate' == $popup_gallery ) {
					echo '.a3-dgallery .a3dg-image-wrapper .a3dg-image img {
						cursor: default;
					}
					#gallery_'.$product_id.' .a3dg-navbar-control {
						width: calc( 50% - '.( ( $navbar_margin_left + $navbar_margin_right ) / 2 ).'px ) !important;
						float: right;
					}
					#gallery_'.$product_id.' .a3dg-navbar-control .slide-ctrl {
						width: 100%;
					}
					#gallery_'.$product_id.' .a3dg-navbar-separator,
					#gallery_'.$product_id.' .icon_zoom {
						display: none;
					}';
				}

				if ( 'no' == $enable_gallery_thumb ) {
					echo '.a3dg-nav {
						display:none;
						height:1px;
					}
					.woocommerce .images {
						margin-bottom: 15px;
					}';
				}

			echo '
			</style>';

			echo '<script type ="text/javascript" id="a3-wc-dynamic-gallery-init-inline-script">
				jQuery(function() {
					var settings_defaults_'.$product_id.' = { loader_image: "'.WOO_DYNAMIC_GALLERY_JS_URL.'/mygallery/loader.gif",
						start_at_index: 0,
						gallery_ID: "'.$product_id.'",
						lightbox_class: "'.$lightbox_class.'",
						description_wrapper: false,
						thumb_opacity: 0.5,
						animate_first_image: false,
						animation_speed: '.$g_animation_speed.'000,
						width: false,
						height: false,
						display_next_and_prev: '.$enable_scroll.',
						display_back_and_forward: '.$display_back_and_forward.',
						scroll_jump: 0,
						slideshow: {
							enable: '.$enable_scroll.',
							autostart: '.$g_auto.',
							speed: '.$g_speed.'000,
							start_label: "'.$start_label.'",
							stop_label: "'.$stop_label.'",
							zoom_label: "'.$zoom_label.'",
							stop_on_scroll: true,
							countdown_prefix: "(",
							countdown_sufix: ")",
							onStart: false,
							onStop: false
						},
						effect: "'.$g_effect.'",
						enable_keyboard_move: true,
						cycle: true,
						callbacks: {
						init: false,
						afterImageVisible: false,
						beforeImageVisible: false
					}
				};
				jQuery("#gallery_'.$product_id.'").adGallery(settings_defaults_'.$product_id.');
			});

            </script>';

			echo '<img style="width: 0px ! important; height: 0px ! important; display: none ! important; position: absolute;" src="'.WOO_DYNAMIC_GALLERY_IMAGES_URL . '/blank.gif">';

			echo '<div id="gallery_'.$product_id.'"
			class="a3-dgallery"
			data-height_type="'. esc_attr( $gallery_height_type ).'"
			data-show_navbar_control="'. esc_attr( $product_gallery_nav ) .'"
			data-show_thumb="'. esc_attr( $enable_gallery_thumb ) .'"
			data-hide_one_thumb="'. esc_attr( $hide_thumb_1image ) .'"
			data-thumb_show_type="'. esc_attr( $thumb_show_type ) .'"
			data-thumb_visible="'. esc_attr( $thumb_columns ) .'"
			data-thumb_spacing="'. esc_attr( $thumb_spacing ) .'"
			style="width: 100%;
			max-width: '.$g_width.';"
			>
				<div class="a3dg-image-wrapper" style="width: calc(100% - '.( (int) $main_margin_left + (int) $main_margin_right ).'px); ' . ( ( $g_height != false ) ? 'height: '.$g_height.'px;' : '' ) . '"></div>
				<div class="lazy-load"></div>
				<div style="clear: both"></div>
				<div class="a3dg-navbar-control"><div class="a3dg-navbar-separator"></div></div>
				<div style="clear: both"></div>
				<div class="a3dg-nav">
					<div class="a3dg-back"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></div>
					<div class="a3dg-forward"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></div>
					<div class="a3dg-thumbs '.$thumbs_list_class.'">
						<ul class="a3dg-thumb-list">';

                        $script_colorbox = '';
						$script_fancybox = '';
                        if ( count( $dgallery_ids ) > 0 ) {

							$current_color_text = __('image {current} of {total}', 'woocommerce-dynamic-gallery' );
							$current_color_text = '';

							$script_colorbox .= '<script type="text/javascript">';
							$script_fancybox .= '<script type="text/javascript">';
							$script_colorbox .= '(function($){';
							$script_fancybox .= '(function($){';
							$script_colorbox .= '$(function(){';
							$script_fancybox .= '$(function(){';
							$script_colorbox .= '$(document).on("click", ".a3-dgallery .lightbox", function(ev) { if( $(this).attr("rel") == "gallery_'.$product_id.'") {
								var idx = $("#gallery_'.$product_id.' .a3dg-image img").attr("idx");';
							$script_fancybox .= '$(document).on("click", ".a3-dgallery .lightbox", function(ev) { if( $(this).attr("rel") == "gallery_'.$product_id.'") {
								var idx = $("#gallery_'.$product_id.' .a3dg-image img").attr("idx");';

							if ( count( $dgallery_ids ) <= 1 ) {
								$script_colorbox .= '$(".gallery_product_'.$product_id.'").colorbox({ current:"'.$current_color_text.'", open:true, maxWidth:"100%" });';
								$script_fancybox .= '$.fancybox.open(';
							} else {
								$script_colorbox .= '$(".gallery_product_'.$product_id.'").colorbox({ current:"'.$current_color_text.'", rel:"gallery_product_'.$product_id.'", maxWidth:"100%" }); $(".gallery_product_'.$product_id.'_"+idx).colorbox({ current:"'.$current_color_text.'", open:true, maxWidth:"100%" });';
								$script_fancybox .= '$.fancybox.open([';
							}

							$common = '';
							$idx    = 0;

							foreach ( $dgallery_ids as $img_id ) {
								if ( ! isset( $main_dgallery[$img_id] ) ) {
									continue;
								}

								// Get image data from main gallery array
								$gallery_item = $main_dgallery[$img_id];

								$li_class        = '';
								if ( 'static' == $thumb_show_type ) {
									if ( $idx % $thumb_columns == 0 ) {
										$li_class    = 'first_item';
									} elseif ( ( $idx % $thumb_columns + 1 ) == $thumb_columns ) {
										$li_class    = 'last_item';
									}
								} else {
									if ( $idx == 0 ) {
										$li_class    = 'first_item';
									} elseif ( $idx == count( $dgallery_ids ) - 1 ) {
										$li_class    = 'last_item';
									}
								}

								$image_large_url  = $gallery_item['large']['url'];
								$image_single_url = $gallery_item['single']['url'];
								$image_thumb_url  = $gallery_item['thumb']['url'];

								$thumb_height    = $g_thumb_height;
								$thumb_width     = $g_thumb_width;
								$width_old       = $gallery_item['thumb']['width'];
								$height_old      = $gallery_item['thumb']['height'];

								if ( $width_old > $g_thumb_width || $height_old > $g_thumb_height ) {
									if ( $height_old > $g_thumb_height && $g_thumb_height > 0 ) {
										$factor       = ($height_old / $g_thumb_height);
										$thumb_height = $g_thumb_height;
										$thumb_width  = $width_old / $factor;
									}
									if ( $thumb_width > $g_thumb_width && $g_thumb_width > 0 ) {
										$factor       = ($width_old / $g_thumb_width);
										$thumb_height = $height_old / $factor;
										$thumb_width  = $g_thumb_width;
									} elseif ( $thumb_width == $g_thumb_width && $width_old > $g_thumb_width && $g_thumb_width > 0 ) {
										$factor       = ($width_old / $g_thumb_width);
										$thumb_height = $height_old / $factor;
										$thumb_width  = $g_thumb_width;
									}
								} else {
									$thumb_height = $height_old;
									$thumb_width = $width_old;
								}

								echo '<li class="'.$li_class.'">';
								echo Functions::filter_image_url( '<a alt="'. esc_attr( $gallery_item['alt_text'] ).'" class="gallery_product_'.$product_id.' gallery_product_'.$product_id.'_'.$idx.'" title="'. esc_attr( $gallery_item['caption_text'] ).'" rel="gallery_product_'.$product_id.'" href="'.$image_single_url.'">', array( $product_id, $img_id, '', '' ), true );
								echo Functions::filter_image_url( '<img
								org-width="'. esc_attr( $gallery_item['single']['width'] ).'"
								org-height="'. esc_attr( $gallery_item['single']['height'] ).'"
								org-sizes="'. esc_attr( $gallery_item['single']['img_sizes'] ).'"
								org-srcset="'. esc_attr( $gallery_item['single']['img_srcset'] ).'"
								sizes="'. esc_attr( $gallery_item['thumb']['img_sizes'] ) .'"
								srcset="'. esc_attr( $gallery_item['thumb']['img_srcset'] ).'"
								idx="'.$idx.'"
								src="'.$image_thumb_url.'"
								alt="'. esc_attr( $gallery_item['alt_text'] ).'"
								data-caption="'. esc_attr( $gallery_item['caption_text'] ).'"
								data-skip-lazy="true"
								class="no-lazy skip-lazy wc_dgallery_image image'.$idx.'"
								width="'.$thumb_width.'"
								height="'.$thumb_height.'">', array( $product_id, $img_id, '', '' ) );
								echo '</a>';
								echo '</li>';

								if ( '' != trim( $gallery_item['caption_text'] ) ) {
									$script_fancybox .= $common.'{src:"'.$image_large_url.'",opts:{caption:"'.esc_js( $gallery_item['caption_text'] ).'"}}';
								} else {
									$script_fancybox .= $common.'{src:"'.$image_large_url.'"}';
                                }
								$common = ',';
								$idx++;
							}

							if ( count( $dgallery_ids ) <= 1 ) {
								$script_fancybox .= ');';
							} else {
								$script_fancybox .= '],{
    \'index\': idx
  });';
							}
							$script_colorbox .= 'ev.preventDefault();';
							$script_colorbox .= '} });';
							$script_fancybox .= '} });';
							$script_colorbox .= '});';
							$script_fancybox .= '});';
							$script_colorbox .= '})(jQuery);';
							$script_fancybox .= '})(jQuery);';
							$script_colorbox .= '</script>';
							$script_fancybox .= '</script>';

						} else {
							echo '<li>';
							echo '<a class="" rel="gallery_product_'.$product_id.'" href="'.$no_image_uri.'">';
							echo '<img org-width="" org-height="" sizes="" srcset="" src="'.$no_image_uri.'" class="image" alt="">';
							echo '</a>';
							echo '</li>';
						}

						if ( 'deactivate' == $popup_gallery ) {
							$script_colorbox = '';
							$script_fancybox = '';
						} elseif( 'colorbox' == $popup_gallery ) {
							echo $script_colorbox;
						} else {
							echo Functions::filter_image_url( $script_fancybox, array( $product_id, 0, '', '' ) );
						}

						echo '</ul>

					</div>
				</div>
			</div>';
		?>
		</div>
	<?php
	}
}
