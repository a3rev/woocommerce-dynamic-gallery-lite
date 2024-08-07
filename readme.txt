=== Dynamic Product Gallery for WooCommerce ===
Contributors: a3rev, nguyencongtuan
Tags: WooCommerce image gallery, WooCommerce, WooCommerce Product images, WooCommerce Product Gallery, WooCommerce Dynamic Gallery, Elementor WooCommerce Product Gallery, Elementor Product Gallery
Requires at least: 6.0
Tested up to: 6.6
Stable tag: 3.5.3
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Bring your product pages and presentation alive with Dynamic Product Gallery for WooCommerce. Beautifully.

== DESCRIPTION ==

Science has proven that Product images have a massive impact on your stores conversion rates. Dynamic Product Gallery for WooCommerce will bring your stores static image display to life.

As soon as you install Dynamic Gallery your Product pages image gallery is transformed into a dynamic scrolling product gallery with thumbnails displayed in a single row slider.


= KEY FEATURES =

* A Dynamic Product Page image gallery for WooCommerce Products page.
* Full support for WordPress responsive images - srcset and size
* Full support for Webp images
* Supports .jpg and .png images converted to Webp using HTML, replace URL attributes.
* Fully integrated with WooCommerce Product Gallery
* Full compatibility with WooCommerce version 8.0
* Fully Compatible with Elementor Premium Templates
* Dynamic Gallery shortcodes. Works with page builders like Elementor, Divi etc.
* **NEW** Product Gallery Block - Use with WooCommerce Single Product page Block Template 

= PRODUCT GALLERY =

* Instantly applies Dynamic Gallery features to all WooCommerce Product Gallery images on install
* Auto Converts your static product image galleries into a dynamic scrolling gallery
* Auto converts you static Product image thumbnails into a dynamic single row thumbnail slider
* Displays all of your product images beautifully in all PC, Tablet and mobile phone browsers
* Simple to use - just install and continue to use the WooCommerce Product gallery to add, move and delete product images
* Search Engine friendly images
* Dynamic Gallery ON | OFF setting for single products
* Built in Lazy-load feature
* Support for image captions
* 2 Choices of Gallery width FIXED or DYNAMIC
* 2 Choices of Gallery Height - FIXED (set in px) or DYNAMIC
* ZOOM - shows full size image with caption text and manual scroll through entire gallery.
* Choice of 2 different pop-up tools - Fancybox and Colorbox.
* ZOOM | START SLIDE SHOW / STOP SLIDESHOW controls

= * NEW WIGET & SHORTCODE =

Dynamic Gallery automatically replaces the default WooCommerce Product Gallery on product pages. The Dynamic Gallery Widget and Shortcode enable you to:

* Shop Shortcode - use it to add Dynamic gallery to new WooCommerce FSE Single Product Block Template
* Shop Shortcode - use it to add Dynamic gallery to page builders WooCommerce Product Page Template. 
* Single Shortcode - Use to insert a Single Product Gallery, by product id into anywhere that accepts shortcodes
* Widget - Add a single product Dynamic Gallery to any widget area
* Elementor Product Page Template - Add the WooCommerce Dynamic Gallery to your Elementor Product Page template via the Dynamic Gallery Widget or Shop Shortcode.


= GALLERY THUMBNAIL SLIDER =

* Gallery Thumbnails show in a single row slider under the Gallery
* Option to set the number of thumbnails that are visible in the Thumbnail slider from 2 to 8.
* Option to set Thumbnail auto don't show when there is only 1 image in the gallery
* Thumbnails auto scale to size in smaller screens

= THINGS TO KNOW =

* Dynamic Gallery admin panel is found in the WooCommerce submenu on your wp-admin page
* Dynamic Gallery is found on the WooCommerce Single Product Template
* The Gallery uses the default WooCommerce Main Image size. The sizes for these are set on the Customiser menu > WooCommerce > Product images.
* Gallery thumbnails are the default WooCommerce square cropped 100×100 pixels. WooCommerce allows changing this by filtering on woocommerce_gallery_thumbnail 
* Translation ready and fully compatible with WPMU


= PREMIUM VERSION =

There is a [Premium Version](http://a3rev.com/shop/woocommerce-dynamic-gallery/) of Dynamic Gallery for WooCommerce available if you find you want more features than are available in the free version

= CONTRIBUTE =

When you download Dynamic Product Gallery for WooCommerce, you join our the a3rev Software community. Regardless of if you are a WordPress beginner or experienced developer if you are interested in contributing to the future development of Dynamic Gallery or any of our other plugins on Github head over to the Dynamic Product Gallery [GitHub Repository](https://github.com/a3rev/woocommerce-dynamic-gallery-lite) to find out how you can contribute.

Want to add a new language? You can contribute via [translate.wordpress.org](https://translate.wordpress.org/projects/wp-plugins/woocommerce-dynamic-gallery)


== Installation ==

= Minimum Requirements =

* PHP version 8.1 or greater is recommended
* MySQL version 5.6 or greater is recommended

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don't even need to leave your web browser. To do an automatic install of Dynamic Gallery, log in to your WordPress admin panel, navigate to the Plugins menu and click Add New.

In the search field type "Dynamic Products Gallery for WooCommerce" and click Search Plugins. Once you have found our plugin you can install it by simply clicking Install Now. After clicking that link you will be asked if you are sure you want to install the plugin. Click yes and WordPress will automatically complete the installation.

= Manual installation =

The manual installation method involves downloading our plugin and uploading it to your web server via your favorite FTP application.

1. Download the plugin file to your computer and unzip it
2. Using an FTP program, or your hosting control panel, upload the unzipped plugin folder to your WordPress installations wp-content/plugins/ directory.
3. Activate the plugin from the Plugins menu within the WordPress admin.


== Screenshots ==

1. Dynamic Gallery replaces the default WooCommerce Gallery
2. Zoom feature - opens images at full size
3. Dynamic Gallery Meta Box is added to WooCommerce Product Data menu
4. In plugin style and layout options - no coding required


== Usage ==

1. Go to WordPress admin > WooCommerce menu > Dynamic Gallery menu

2. On the Settings tab activate the gallery and tweak settings as required

3. On the Gallery Style tab set layout, style and features of your product gallery 

4. On the Icon Styles menu style your gallery icons

5. On any product edit page on the WooCommerce Product Data menu go to the Dynamic gallery menu and set the way the gallery works for that product

6. Enjoy


== Frequently Asked Questions ==

= When can I use this plugin? =

You can use this plugin only when you have installed the WooCommerce plugin.



== Changelog ==

= 3.5.3 - 2024/07/13 =
* This release has various tweaks for compatibility with WordPress 6.6 and WooCommerce 8.9.3.
* Tweak - Tested for compatibility with WordPress 6.6
* Tweak - Tested for compatibility with WooCommerce 8.9.3

= 3.5.2 - 2023/11/22 =
* This maintenance release has plugin framework updates for compatibility with PHP 8.1 onwards, plus a bug fix and backward compatibility updated to WooCommerce 6.0.
* Tweak - Remove backward compatibility for WooCommerce versions less than 6.0
* Framework - Set parameter number of preg_match function from null to 0 for compatibility with PHP 8.1 onwards
* Framework - Validate empty before call trim for option value
* Fix - Set default settings and generate dynamic CSS after plugin is activated instead while activating. This prevents a missed lib error.

= 3.5.1 - 2023/10/30 =
* This maintenance release has a Code Tweak for compatibility with WordPress 6.4 and WooCommerce 8.2
* Tweak - Tested for compatibility with WordPress 6.4
* Tweak - Tested for compatibility with WooCommerce 8.2
* Tweak - Call add action to 'enqueue_block_assets' instead of 'enqueue_block_editor_assets' for enqueue style inside iframe of Gutenberg.

= 3.5.0 - 2023/09/06 =
* This feature release adds a "Dynamic Gallery" Block for use with Gutenberg templates. Also compatibility with WooCommerce 8.0.3 and WordPress 6.3
* Feature - Define new "Product Dynamic Gallery" block to show gallery on Gutenberg Block templates pages.
* Tweak - Test for compatibility with WooCommerce 8.0.3
* Tweak - Test for compatibility with WordPress 6.3.0
* Fix - New Product Gallery Block resolves issues that the Gallery shortcode has with Gutenberg templates

= 3.4.3 - 2023/07/28 =
* This maintenance release has 2 bug fixes for compatibility with WordPress 6.2.2 or higher.
* Tweak - Test for compatibility with WordPress 6.2.2
* Fix - validate if $product is WC_Product or not before call get_id() . For compatibility with WC 7.9.0
* Fix - Show correct Dynamic Gallery for each product inside Single Product template from Gutenberg with double [[ ]] for compatibility with WP 6.2.2 or higher.

= 3.4.2 - 2023/07/24 =
* This maintenance release fixes a conflict with WooCommerce 7.9 and the single block template.
* Tweak - Test for compatibility with WooCommerce 7.9.
* Fix - Add wc_dynamic_gallery_show function to new action wc_get_template_part tag for compatibility with blocks on WC 7.9.0

= 3.4.1 - 2023/07/04 =
* This maintenace release has 2 performance / SEO tweaks and compatibility with WooCommerce 7.8.2
* Performamnce - Add global no-lazy, skip-lazy classes for thumbnail images so it will automaticaally exclude those thumb from lazy load feature of any lazy load plugin. This is to resolve an issue with getting the correct image sizes.
* Performance - Add ALT text, dimension size to preload image for improved SEO scores higher
* Tweak - Test for compatibility with WooCommerce 7.8.2

= 3.4.0 - 2023/06/01 =
* This feature release adds insert Dynamic Gallery by 2 new shortcodes. Works with New WC Single Product Page Bock Template and page builders like Elementor.
* Feature - Add Dynamic Gallery Shop shortcode. Adds Dynamic Gallery to all product pages across the store.
* Feature - Add Single Product Dynamic Gallery shortcode. Use to insert a Single Product Gallery, by product id into anywhere that accepts shortcodes.
* Feature - Fully compatible with the new WooCommerce Single Product Blocks Template
* Feature - Fully compatible with page builders like Elementor, Divi etc
* Tweak - Adds new + Gallery Shortcode option box to the Settings tab (at the bottom)
* Tweak - Add a Get Help link from the new options box to the new shortcode section of the Dynamic Gallery Docs.
* Depreciated - Old [wc_product_dynamic_gallery] Shortcode. Auto map existing [wc_product_dgallery] shortcode to new shortcode
* Tweak - Test for compatibility with WooCommerce 7.7.0

= 3.3.0 - 2023/04/25 =
* This release has compatibility with WordPress 6.2.0, WooCommerce 7.6.0 plus declared compatibility with WooCommerce HPOS.
* Tweak - Test for compatibility with WordPress 6.2
* Tweak - Test for compatibility with WooCommerce 7.6.0
* Tweak - Test and declare plugin compatibility with WooCommerce HPOS Custom Tables.

= 3.2.0 - 2022/12/21 =
* This Core web vitals performance improving release removes the fontawesome lib, replacing font icons with SVGs, changes Gallery Thumbnail sizes to WooCommerce default (smaller and faster loading), plus checks for compatibility with WooCommerce 7.2.
* Feature - Convert icon from font awesome to SVG
* Feature - Update styling for new SVG icons
* Plugin Framework - Remove fontawesome lib
* Performance - Change woocommerce_thumbnails to woocommerce_gallery_thumbnail size for gallery thumbnail
* Tweak - Test for compatibility with WooCommerce 7.2

= 3.1.1 - 2022/12/12 =
* This maintenance release has a bug fix for some missing Webp filter args.
* Fix - Add arguments to Webp filter tag made on previous version for compatibility with some theme or plugin that use other arguments.

= 3.1.0 - 2022/12/03 =
* This feature release adds Default font control and support for Webp images converted by popular plugins, Webp Express and Imagify.
* Feature - Apply webp filter tag to gallery images converted from .jpg and .png by 3rd party Webp conversion plugins.
* Feature - Works when HTML Replace image URL is set in the conversion. Does not work with replace, picture tag 
* Performance – Improved performance as actual webp images are loaded in the gallery.
* Plugin Framework - Update typography control from plugin framework to add support for Default value
* Plugin Framework - Default value will get fonts set in the theme.
* Plugin Framework - Change generate typography style for change on typography control

= 3.0.3 - 2022/11/21 =
* This maintenance release has 1 bug fix and compatibility with WooCommerce 7.1
* Tweak - Check for compatibility with WooCommerce version 7.1
* Fix - Show the panel settings page if have combine of premium and free options on same page.

= 3.0.2 - 2022/11/01 =
* This maintenance release has a security vulnerability patch, plus compatibility with WordPress major version 6.1.0 and WooCommerce version 7.0
* Tweak - Test for compatibility with WordPress 6.1
* Tweak - Test for compatibility with WooCommerce 7.0
* Security – This release has a patch for a security vulnerability

= 3.0.1 - 2022/05/25 =
* This release fixes a bug with the just released version 3.0.0
* Fix - Do not call update_google_map_api_key from construct of Admin UI

= 3.0.0 - 2022/05/24 =
* This release is for compatibility with WordPress major version 6.0 and WooCommerce version 6.5.1. It and includes various code tweaks and tweaks to harden security.
* Tweak - Test for compatibility with WordPress 6.0
* Tweak - Add filter on generate_border_style_css
* Tweak - Add filter on generate_border_corner_css
* Tweak - Test for compatibility with WooCommerce 6.5
* Framework – Upgrade Plugin Framework to version 2.6.0
* Security - Various code hardening tweaks.
* Security - Escape all $-variable
* Security - Sanitize all $_REQUEST, $_GET, $_POST
* Security - Apply wp_unslash before sanitize

= 2.9.0 - 2022/01/22 =
* This release has a new Google Fonts API Validation feature plus compatibility with WordPress 5.9 and WooCommerce 6.1.1
* Feature - Add Ajax Validate button for Google Fonts API, for quick and easy Validation of API key.
* Dev - Add dynamic help text to Google Font API field
* Tweak - Test for compatibility with WooCommerce 6.1
* Tweak - Test for compatibility with WordPress 5.9
* Framework - Update a3rev Plugin Framework to version 2.5.0

= 2.8.13 - 2021/11/20 =
* This maintenance release has check for compatibility with PHP version 8.x and WooCommerce 5.9
* Tweak - Test for compatibility with PHP 8.x
* Tweak - Test for compatibility with WooCommerce 5.9

= 2.8.12 - 2021/07/22 =
* This maintenance release has code tweaks for compatibility with WordPress Major version 5.8, WooCommerce version 5.5.1 and some Security Hardening.
* Tweak - Test for compatibility with WordPress 5.8
* Tweak - Test for compatibility with WooCommerce 5.5.1
* Security - Add more variable, options and html escaping
* Security - Get variable via name instead of use extract

= 2.8.11 - 2021/07/12 =
* This small maintenance release contains a security patch.
* Security - Added escaping for the shortcode parameters
* Tweak - Skipped version 2.8.10 to avoid PHP misread

= 2.8.9 - 2021/03/19 =
* This maintenance release updates 23 deprecated jQuery functions for compatibility with the latest version of jQuery in WordPress 5.7
* Tweak - Update JavaScript on plugin framework for compatibility with latest version of jQuery and resolve PHP warning event shorthand is deprecated.
* Tweak - Replace deprecated .change( handler ) with .on( 'change', handler )
* Tweak - Replace deprecated .change() with .trigger('change')
* Tweak - Replace deprecated .focus( handler ) with .on( 'focus', handler )
* Tweak - Replace deprecated .focus() with .trigger('focus')
* Tweak - Replace deprecated .click( handler ) with .on( 'click', handler )
* Tweak - Replace deprecated .click() with .trigger('click')
* Tweak - Replace deprecated .select( handler ) with .on( 'select', handler )
* Tweak - Replace deprecated .select() with .trigger('select')
* Tweak - Replace deprecated .blur( handler ) with .on( 'blur', handler )
* Tweak - Replace deprecated .blur() with .trigger('blur')
* Tweak - Replace deprecated .resize( handler ) with .on( 'resize', handler )
* Tweak - Replace deprecated .submit( handler ) with .on( 'submit', handler )
* Tweak - Replace deprecated .scroll( handler ) with .on( 'scroll', handler )
* Tweak - Replace deprecated .mousedown( handler ) with .on( 'mousedown', handler )
* Tweak - Replace deprecated .mouseover( handler ) with .on( 'mouseover', handler )
* Tweak - Replace deprecated .mouseout( handler ) with .on( 'mouseout', handler )
* Tweak - Replace deprecated .keydown( handler ) with .on( 'keydown', handler )
* Tweak - Replace deprecated .attr('disabled', 'disabled') with .prop('disabled', true)
* Tweak - Replace deprecated .removeAttr('disabled') with .prop('disabled', false)
* Tweak - Replace deprecated .attr('selected', 'selected') with .prop('selected', true)
* Tweak - Replace deprecated .removeAttr('selected') with .prop('selected', false)
* Tweak - Replace deprecated .attr('checked', 'checked') with .prop('checked', true)
* Tweak - Replace deprecated .removeAttr('checked') with .prop('checked', false)

= 2.8.8 - 2021/03/09 =
* This maintenance release is for compatibility with WordPress 5.7
* Tweak - Test for compatibility with WordPress 5.7
* Tweak - Use new function wp_getimagesize of WP instead of getimagesize

= 2.8.7 - 2021/01/13 =
* This maintenance release is for compatibility with WooCommerce major version 4.9.0.
* Tweak - Test for compatibility with WooCommerce 4.9.0

= 2.8.6 - 2020/12/30 =
* This is an important maintenance release that updates our scripts for compatibility with the latest version of jQuery released in WordPress 5.6
* Tweak - Update JavaScript on plugin framework for work compatibility with latest version of jQuery
* Fix - Replace .bind( event, handler ) by .on( event, handler ) for compatibility with latest version of jQuery
* Fix - Replace :eq() Selector by .eq() for compatibility with latest version of jQuery
* Fix - Replace .error() by .on( “error” ) for compatibility with latest version of jQuery
* Fix - Replace :first Selector by .first() for compatibility with latest version of jQuery
* Fix - Replace :gt(0) Selector by .slice(1) for compatibility with latest version of jQuery
* Fix - Remove jQuery.browser for compatibility with latest version of jQuery
* Fix - Replace jQuery.isArray() by Array.isArray() for compatibility with latest version of jQuery
* Fix - Replace jQuery.isFunction(x) by typeof x === “function” for compatibility with latest version of jQuery
* Fix - Replace jQuery.isNumeric(x) by typeof x === “number” for compatibility with latest version of jQuery
* Fix - Replace jQuery.now() by Date.now() for compatibility with latest version of jQuery
* Fix - Replace jQuery.parseJSON() by JSON.parse() for compatibility with latest version of jQuery
* Fix - Remove jQuery.support for compatibility with latest version of jQuery
* Fix - Replace jQuery.trim(x) by x.trim() for compatibility with latest version of jQuery
* Fix - Replace jQuery.type(x) by typeof x for compatibility with latest version of jQuery
* Fix - Replace .load( handler ) by .on( “load”, handler ) for compatibility with latest version of jQuery
* Fix - Replace .size() by .length for compatibility with latest version of jQuery
* Fix - Replace .unbind( event ) by .off( event ) for compatibility with latest version of jQuery
* Fix - Replace .unload( handler ) by .on( “unload”, handler ) for compatibility with latest version of jQuery

= 2.8.5 - 2020/12/14 =
* This maintenance release has fixes for compatibility issues with the latest version of jQuery in WordPress 5.6
* Fix - Replace .load( handler ) by .on( load, handler ) for compatibility with latest version of jQuery
* Fix - Replace .error( handler ) by .on( error, handler ) for compatibility with latest version of jQuery

= 2.8.4 - 2020/12/10 =
* Tweak - Test for compatibility with WooCommerce 4.8.0

= 2.8.3 - 2020/12/08 =
* This maintenance release has tweaks and a fix for compatibility with WordPress major version 5.6, WooCommerce 4.7.1 and PHP 7.4.8
* Tweak - Test for compatibility with PHP 7.4.8
* Tweak - Test for compatibility with WooCommerce 4.7.1
* Tweak - Test for compatibility with WordPress 5.6
* Fix - Add \ before WC() inside namespace file for it to call to correct WC() of WooCommerce

= 2.8.2 - 2020/08/08 =
* This maintenance release is for compatibility with WordPress major version 5.5 and WooCommerce 4.3.1.
* Tweak - Test for compatibility with WordPress 5.5
* Tweak - Test for compatibility with WooCommerce 4.3.1
* Tweak - Upgrade fancybox script lib to version 3.5.7 for work compatibility with WP 5.5. Fancybox version 2.x does not work on WP 5.5
* Tweak - Update relation code for use new fancybox v3.5.7

= 2.8.1 - 2020/03/26 =
* This maintenance release is for compatibility with WooCommerce 4.0.1, WordPress 5.4, introducing Travis CI unit testing for full compliance with WordPress code standards for PHP versions 7.0 to 7.4
* Tweak - Test for compatibility with WordPress 5.4
* Tweak - Test for compatibility with WooCommerce 4.0.1
* Tweak - Run Travis CI unit build tests for PHP compatibility issues with PHP 7.0 to 7.4
* Fix - Update global ${$this- to $GLOBALS[$this to resolve 7.0+ PHP warnings
* Fix - Update global ${$option} to $GLOBALS[$option] to resolve 7.0+ PHP warnings
* Fix - Update less PHP lib that use square brackets [] instead of curly braces {} for Array , depreciated in PHP 7.4
* Fix - Validate for do not use get_magic_quotes_gpc function for PHP 7.4

= 2.8.0 - 2020/01/11 =
* This feature release completes the full refactor (frontend and backend) of the plugins PHP to Composer plus compatibility with WordPress 5.3.2
* Feature - Plugin Framework fully refactored to Composer for cleaner code and faster PHP code on the admin panels
* Tweak - Update plugin for compatibility with new version of plugin Framework
* Tweak - Test for compatibility with WordPress 5.3.2

= 2.7.1 - 2019/11/29 =
* This maintenance release is for WordPress 5.3 and WooCommerce 3.8.1 compatibility with a full security review of the plugins code. 
* Tweak - Test for compatibility with WordPress 5.3.0
* Tweak - Test for compatibility with WooCommerce 3.8.1
* Tweak - Remove the hard coded PHP error_reporting display errors false from compile sass to css
* Dev - Replace file_get_contents with HTTP API wp_remote_get
* Dev - Ensure that all inputs are sanitized and all outputs are escaped

= 2.7.0 - 2019/10/11 =
* This feature upgrade is for the upgrade of the plugin to Composer PHP dependency manager for cleaner and faster PHP code.
* Feature - Plugin fully refactored to Composer for cleaner and faster PHP code
* Tweak - Tested for compatibility with WooCommerce 3.7.1
* Tweak - Tested for compatibility with WordPress 5.2.3

= 2.6.0 - 2019/08/03 =
* This major feature upgrade adds a Dynamic Gallery Widget & Shortcode. Full compatibility with Elementor Premium Template Builder.
* Feature - Define new shortcode [wc_product_dynamic_gallery] to enable add Dynamic Gallery of a product to show on any page
* Feature - Define new widget WC Product Dynamic Gallery to enable add Dynamic Gallery of a product as widget to any sidebar
* Feature - Add Dynamic Gallery to any Elementor Premium WooCommerce Product Page Template via the new Dynamic Gallery Widget

= 2.5.8 - 2019/08/01 =
* This maintenance upgrade is to fix a style conflict with fontawesome icons
* Fix - fontawesome icons not able to get correct style on frontend when the fontawesome script is loaded on the page by theme or another plugin.

= 2.5.7 - 2019/06/29 =
* This is a maintenance upgrade to fix a potentially fatal error conflict with sites running PHP 7.3 plus compatibility with WordPress v 5.2.2 and WooCommerce 3.6.4
* Tweak - Test for compatibility with WooCommerce 3.6.4
* Tweak - Test for compatibility with WordPress 5.2.2
* Fix - PHP warning continue targeting switch is equivalent to break for compatibility on PHP 7.3

= 2.5.6 - 2019/04/26 =
* This maintenance update has tweaks for compatibility with WordPress 5.2.0 and WooCommerce 3.6.0 major new versions whilst maintaining backward compatibility
* Tweak - Test for compatibility with WordPress 5.2.0
* Tweak - Test for compatibility with WooCommerce 3.6.2
* Tweak - Support for backward compatibility with WooCommerce v 3.5

= 2.5.5 - 2019/02/14 =
* This maintenance adds a code tweak and fix for the Gallery display and function in mobile devices. plus compatibility with WooCommerce 3.5.4 and WordPress 5.1
* Tweak - Remove auto image transition, next and previous, start and stop on mobile when touch swipe feature is ON.
* Tweak - Update structure html of icons to avoid conflict with fontawesome latest version that loads  icons as script instead of Webfont
* Tweak - Test for compatibility with WordPress 5.1
* Tweak - Test for compatibility with WooCommerce 3.5.4
* Fix - Auto resize image and center it when change orientation in mobile device

= 2.5.4 - 2018/12/18 =
* This maintenance update is for compatibility with WordPress 5.0.2, WooCommerce 3.5.2 and PHP 7.3. Also includes performance updates to the plugin framework. 
* Tweak - Editor sidebar global Predictive Search Keyword metabox works with both Gutenberg and Classic Editor
* Tweak - Test for compatibility with WordPress 5.0.2 and WordPress 4.9.9
* Tweak - Test for compatibility with WooCommerce 3.5.2
* Tweak - Create new structure for future development of Gutenberg Blocks
* Framework - Performance improvement.  Replace wp_remote_fopen  with file_get_contents for get web fonts
* Framework - Performance improvement. Define new variable `is_load_google_fonts` if admin does not require to load google fonts
* Framework - Register style name for dynamic style of plugin for use with Gutenberg block
* Framework - Update Modal script and style to version 4.1.1
* Framework - Update a3rev Plugin Framework to version 2.1.0
* Framework - Test and update for compatibility with PHP 7.3

= 2.5.3 - 2018/05/26 =
* This maintenance update is for compatibility with WordPress 4.9.6 and WooCommerce 3.4.0 and the new GDPR compliance requirements for users in the EU 
* Tweak - Test for compatibility with WooCommerce 3.4.0
* Tweak - Test for compatibility with WordPress 4.9.6
* Tweak - Check for any issues with GDPR compliance. None Found
* Framework - Update a3rev Plugin Framework to version 2.0.3

= 2.5.2 - 2018/02/13 =
* Maintenance Update. Under the bonnet tweaks to keep your plugin running smoothly and is the foundation for new features to be developed this year 
* Framework - Update a3rev Plugin Framework to version 2.0.2
* Framework - Add Framework version for all style and script files
* Tweak - Update for full compatibility with a3rev Dashboard plugin
* Tweak - Change OLD thumbnail image name shop_thumbnail to woocommerce_thumbnail for compatibility with WC 3.3.0 . Backward compatibility with WC 3.2.6
* Tweak - Change OLD thumbnail image name shop_single to woocommerce_single for compatibility with WC 3.3.0 . Backward compatibility with WC 3.2.6
* Tweak - Update WooCommerce Display Settings URL to link to new WooCommerce Customizer menu URL on WC v 3.3.0
* Tweak - Test for compatibility with WordPress 4.9.4
* Tweak - Test for compatibility with WooCommerce 3.3.1

= 2.5.1 - 2017/11/15 =
* Fixed - Show WC dynamic gallery images on frontend if feature image as part of gallery
* Tweak - Tested for compatibility with WordPress 4.9

= 2.5.0 - 2017/11/06 =
* Feature Upgrade. This feature upgrade adds the ability to set the source of images that populate the Dynamic gallery.
* Feature - Add new Dynamic Gallery Image Source option support for show the slideshow on frontend from Attached Images of Product or WC Product Images
* Feature - Add separate Dynamic Gallery Image Source option to Dynamic Gallery Meta menu on Edit Product page so that can override global option
* Feature - Added Global Reset for this feature from the settings page option box
* Tweak - Add new Dynamic Gallery Image Source Options box on the plugins settings page 
* Tweak - Added Image source options to the WooCommerce Product Data - Dynamic Gallery menu on each product edit page
* Tweak - Tested for compatibility with WooCommerce 3.2.3
* Tweak - Tested for compatibility with WordPress 4.8.3

= 2.4.1 - 2017/10/13 =
* Tweak - Tested for compatibility with WooCommerce 3.2.0
* Tweak - Tested for compatibility with WordPress 4.8.2
* Tweak - Added support for the new WC 'tested up to' feature to show this plugin has been tested compatible with WC updates

= 2.4.0 - 2017/06/06 =
* Feature - Launched WooCommerce Dynamic Gallery public Repository
* Feature - WordPress Translation activation. Add text domain declaration in file header
* Tweak - Tested for compatibility with WordPress major version 4.8.0
* Tweak - Include bootstrap modal script into plugin framework
* Tweak - Update a3rev plugin framework to latest version

= 2.3.5 - 2017/05/18 =
* Tweak - Tested for full compatibility with WordPress version 4.7.5
* Tweak - Tested for full compatibility with WooCommerce version 3.0.7

= 2.3.4 - 2017/04/11 =
* Tweak - Full compatibility with WC version 3.0.1 with backward compatibility to WC version 2.6.0
* Tweak - Change call direct to Product properties with new function that are defined on WC v3.0
* Tweak - Called action for save data of plugin after WC data is saved on new CRUD
* Tweak - Change priority for save_post action so that it is called after WooCommerce save the product data, to get the correct data on WC v3.0
* Tweak - Tested for full compatibility with WordPress version 4.7.3

= 2.3.3 - 2017/01/13 =
* Tweak - Change global $$variable to global ${$variable} for compatibility with PHP 7.0 
* Tweak - Update a3 Revolution to a3rev Software on plugins description
* Tweak - Added Settings link to plugins description on plugins menu
* Tweak - Tested for full compatibility with WordPress version 4.7.1 
* Tweak - Tested for full compatibility with WooCommerce version 2.6.12
* Credit - Thanks to Scott for reporting the PHP 7.0 Global variable error

= 2.3.2 - 2016/10/24 =
* Tweak - Tested for full compatibility with WooCommerce version 2.6.6
* Tweak - Tested for full compatibility with WordPress version 4.6.1

= 2.3.1 - 2016/09/07 =
* Tweak - Tested for full compatibility with WordPress version 4.6.0

= 2.3.0 - 2016/08/02 =
* Feature - Upgrade all Gallery and thumbnail slider images to fontawesome icons
* Feature - Added global ON | OFF to include an image set as the Product Image (featured image) into the Gallery Images
* Feature - Added the option the set Product Image (feature image) display in gallery to each individual product
* Feature - Added Global rest option for Product Image (feature image) display in the gallery
* Feature - Added the option to Activate / Deactivate Gallery Thumbnails for individual product
* Feature - Added new 'Gallery Image Transition Effects' setting box with options to change transition effects for gallery
* Feature - Added new 'Gallery Container' setting box with style options for gallery container
* Feature - Added new ' Thumbnail Display' option into 'Image Thumbnails' setting box. Choose display Thumbnails as Slider or as a Static Display (all thumbnails are visible under gallery)
* Feature - Added new 'Thumbnail Slider Container' setting box support change style for slider container
* Feature - Added Font editor 'Line Height' option
* Tweak - Update Typography Preview script for apply 'Line Height' value to Preview box
* Tweak - Update the generate_font_css() function with new 'Line Height' option
* Tweak - Replace all hard code for line-height inside custom style by new dynamic 'Line Height' value
* Tweak - Update a3 Dynamic Gallery script and style to support new features
* Tweak - Update dynamic style for new features
* Tweak - Tested for full compatibility with WooCommerce version 2.6.4

= 2.2.7 - 2016/07/08 =
* Tweak - Update select type of plugin framework for support group options
* Tweak - Tested for full compatibility with WooCommerce version 2.6.2
* Tweak - Tested for full compatibility with WordPress version 4.5.3
* Fix - Update style from WooCommerce thumbnails style to custom style to solve thumbnail distort when the thumbnail is smaller than the thumbnail container

= 2.2.6 - 2016/06/18 =
* Tweak - Tested for full compatibility with WooCommerce major version 2.6.0
* Tweak - Tested for full compatibility with WooCommerce version 2.6.1
* Fix - Don't show Update database warning box again when have manual click on Update button

= 2.2.5 - 2016/05/12 =
* Tweak - Use 'Single Product Image' size of WooCommerce for image on gallery instead of 'Large' size of WordPress.
* Tweak - Option to use the WooCommerce Single Product Image Hard Crop option
* Tweak - Update plugin script for use 'single product image' size
* Tweak - Add new 'Gallery Image Dimensions' settings box to Settings tab for explain gallery image dimensions are using by plugin
* Tweak - Tested for full compatibility with WordPress version 4.5.2

= 2.2.4 - 2016/05/10 =
* Fix - Check valid data when get gallery ids for don't show the PHP warning 'Invalid argument'

= 2.2.3 - 2016/05/09 =
* Tweak - When an image is uploaded to default WooCommerce image gallery and as a Featured image it shows twice in the gallery on front end. Don't auto append the Featured Image (Product Image) into gallery on frontend if the image is also uploaded to WooCommerce Dynamic Gallery metabox
* Credit - Thanks to Matt Redinius for notifying us of the issue a3rev.com/forums/topic/featured-image-displayed-twice/

= 2.2.2 - 2016/05/04 =
* Tweak - Auto append Featured Image to show as first image of gallery on frontend if it is not uploaded to the Gallery
* Credit - Thanks to Vargas jb for notifying us about the featured image issue a3rev.com/forums/topic/problem-with-variation-product-and-image-featured/

= 2.2.1 - 2016/04/05 =
* Tweak - Register fontawesome in plugin framework with style name is 'font-awesome-styles'
* Tweak - Update plugin framework to latest version
* Tweak - Tested for full compatibility with WordPress major version 4.5

= 2.2.0 - 2016/02/29 =
* Feature - Added Gallery Dimension Responsive Gallery Type. Set the gallery width as a % of your themes Product Page Product Gallery container
* Feature - Added Gallery Dimension Responsive Container height options DYNAMIC or FIXED
* Tweak - Saved the time number into database for one time customize style and Save change on the Plugin Settings
* Tweak - Replace version number by time number for dynamic style file are generated by Sass to solve the issue get cache file on CDN server
* Fix - Remove 'parseInt' javascript function that was applying to get thumbnail type. Was causing the thumbnail container UI to be broken
* Credit - Thanks to Kevin Coffel from antiquewoodworks.com for notifying us about the Thumbnail UI bug and dynamic style file not update by sites with CDN.

= 2.1.0 - 2016/02/27 =
* Feature - Completed full integration with WooCommerce Product Image Gallery. Dynamic Gallery functions and features are now applied to WooCommerce Product Gallery and does not create its own Gallery
* Feature - Dynamic gallery now compatible with all 3rd party import export data plugins
* Feature - Dynamic gallery uses WooCommerce Product meta box for Add, Move and Delete product images
* Feature - Manual plugin database RUN UPDATE feature converts database of current Dynamic Gallery to WooCommerce Product Gallery.
* Tweak - Added manual RUN UPDATE of Dynamic Gallery database after upgrade to version 2.1.0. Allows admin to backup site database before RUN UPDATE
* Tweak - Defined 'WOO_DYNAMIC_GALLERY_DB_VERSION' constant for current database version of Dynamic Gallery plugin
* Tweak - Remove 'WooCommerce Default Gallery Activation' option so that for this version plugin will use 'WooCommerce Default Gallery' for show on frontend
* Tweak - Add some attributes into gallery container for Dynamic script to use it
* Tweak - Remove 'Dynamic Gallery' image uploader from the Dynamic gallery meta box - now use the WooCommerce 'Product Gallery' meta box to Add, Move or Delete images
* Tweak - Added help text to the Dynamic Gallery meta box to explain about using the Product gallery meta
* Tweak - Updated the Dynamic Gallery activation help text
* Fix - Register popup tool script when it's set from Plugin Settings. Resolves version confliction when have 3rd party plugin also register the same pop up script
* Fix - Update Dynamic script for get data from attributes of gallery container instead of use 'a3_dgallery_arg' variable to parse into script. Resolves confliction with Dynamic Gallery on WooCommerce Quick View Ultimate plugin
* Fix - Remove 'z-index' for Control Bar. Now obsolete with Dynamic gallery html structure. Resolves conflict with any overlaying html for example from sidebar navigation pop out menus
* Credit - Thanks to Daniel from siccasguitars.com for nudging us toward the full integration with WooCommerce Product gallery
* Credit - Thanks to Kevin Coffel from antiquewoodworks.com for notifying us about the nav bar zoom z-index issue

= 2.0.3 - 2016/02/16 =
* Tweak - Remove dialog popup when delete the image from gallery

= 2.0.2 - 2016/02/05 =
* Tweak - Define new 'strip_methods' argument for Uploader type, allow strip http/https or no
* Tweak - Tested for full compatibility with WooCommerce version 2.5.2
* Tweak - Tested for full compatibility with WordPress version 4.4.2

= 2.0.1 - 2016/01/27 =
* Tweak - Tested for full compatibility with WooCommerce version 2.5.1
* Fix - Add opacity to 1 for image gallery container for override opacity 0 set from WooCommerce 2.5.0. Was causing gallery images to not show on front end
* Credit - Thanks to Jerome Manceau for [reporting the bug](https://a3rev.com/forums/topic/images-not-showing-with-variable-products/)

= 2.0.0 - 2016/01/19 =
* Feature - Define new 'Background Color' type on plugin framework with ON | OFF switch to disable background or enable it
* Feature - Define new function - hextorgb() - for convert hex color to rgb color on plugin framework
* Feature - Define new function - generate_background_color_css() - for export background style code on plugin framework that is used to make custom style
* Feature - Add new 'Gallery Container Height' setting with FIXED | DYNAMIC options
* Feature - Dynamic Container height auto adjusts to the scaled height of each image
* Feature - Dynamic Container height supports both FIXED WIDE
* Feature - New Premium Video box at top of admin panels to show Premium Version feature video instead of premium features in Green boxes
* Tweak - Update core style and script of plugin framework for support Background Color type
* Tweak - Update Dynamic Gallery script and style for work on new features above and new layout of gallery
* Tweak - Remove all old style and scripts
* Tweak - Remove Premium Green Boxes from plugins admin panel
* Tweak - Remove Upgrade to Premium image from admin panel sidebars
* Tweak - Tested for full compatibility with WooCommerce version 2.5.0
* Tweak - Remove 3 outdated Screenshot images
* Update - Make upgrade function for convert old data to new data when upgrade to new version 2.0.0


= 1.8.2 - 2016/01/09 =
* Tweak - Update Dynamic Gallery script for use srcset and sizes of 'large' size
* Tweak - Update Fancybox style so that it is not override by other custom styles
* Tweak - Tested for full compatibility with WordPress version 4.4.1
* Fix - Use srcset and sizes of 'large' size for image show on Dynamic Gallery and Variation Galleries so that browser can get correct image
* Credit - Thanks to Davey van Aken, Ester Lafontant and Frank Ugolini for reporting the gallery image size bug and Frank for access to his site to find and fix

= 1.8.1 - 2016/01/08 =
* Tweak - Missed 2 new features in yesterday version 1.8.1 released package
* Tweak - Added new Feature option to switch Thumbnail Display ON | OFF
* Tweak - Added new feature option to hide Thumbnail when only 1 image is uploaded to a gallery
* Tweak - Updated required WordPress version to 4.1 for full compatibility with WooCommerce plugin
* Tweak - Update Dynamic Gallery Preview so that don't need to Save Changes to see edits on Gallery Preview Popup
* Tweak - Added support on Dynamic Gallery Preview for Thumbnail Column and Thumbnail Display - Slider

= 1.8.0 - 2016/01/07 =
* Feature - Complete rebuild of Dynamic Gallery Thumbnail Slider
* Feature - Added option to switch Thumbnail display ON or OFF
* Feature - Added option to hide thumbnail when only 1 image is loaded to gallery.
* Feature - Full integration with WooCommerce Product Thumbnails. Use WooCommerce Product Thumbnail dimensions set on Use WooCommerce > Settings > Products > Display - Product Images
* Feature - Thumbnails use Hard Crop or Scale set on the WooCommerce Product Images settings
* Feature - Added full support for responsive thumbnail sizing in all browsers
* Feature - Add new 'Thumbnail Columns' option. Use to set the number of Thumbnails visible in Slider Thumbnail Display
* Feature - Add 2 new 'Thumbnail Border Colour' and 'Current Thumbnail Border Colour' options to set the thumbnail border colour
* Tweak - Remove Thumbnails Dimensions settings from plugin, use Thumbnails Dimensions from WooCommerce Settings
* Tweak - Define 'a3_dgallery_arg' variable for parse value of option into Dynamic Gallery script
* Tweak - Update Dynamic Gallery script and style to support Slider Thumbnail Display and thumbnail columns and visible number features

= 1.7.0 - 2016/01/05 =
* Feature - Move 'a3 Dynamic Gallery' meta box to WooCommerce Product Data Menu for full Gallery integration with WooCommerce
* Feature - Plugin Framework Mobile First focus upgrade
* Feature - Massive improvement in admin UI and UX in PC, tablet and mobile browsers
* Feature - Introducing opening and closing Setting Boxes on admin panels.
* Feature - Added Plugin Framework Customization settings. Control how the admin panel settings show when editing.
* Feature - Added Option to set Google Fonts API key to directly access latest fonts and font updates from Google
* Tweak - Moved Image Thumbnails settings to Gallery Style tab and remove the Thumbnails tab.
* Tweak - Change default value 'OFF' to 'ON' for WooCommerce Gallery Activation on first install
* Tweak - Full backward compatibility to WooCommerce v 2.3.0 and older with meta box
* Tweak - Complete update of title and options help text on admin setting boxes
* Tweak - All Premium Version settings boxes are visible in boxes with Green header
* Tweak - Added images and links to Premium Version and Free WooCommerce and WordPress plugins

= 1.6.0 - 2015/12/31 =
* Feature - Upgrade Dynamic Gallery image uploader to new WordPress media uploader
* Feature - Refactor code to enable add images from Media Library, previously Dynamic Gallery could only use images that where uploaded to the Product. Now supports both.
* Feature - Complete rebuild of a3 Dynamic Gallery meta box.
* Feature - Image thumbnails show in a3 Dynamic Gallery Meta box as soon as they are uploaded / added. Previously thumbnails only show in the meta box after publish or update the post.
* Feature - Sort Gallery images by drag and drop in the meta box and delete images from meta box, previously sort and delete where done from the old media uploader pop up screen
* Tweak - Remove 'attachment_fields_to_edit' and 'attachment_fields_to_save' filter tags for old Upload UI
* Tweak - Move all upgrade function code to /includes/updates/ path
* Tweak - Update the frontend process for get new gallery of product
* Tweak - Update the function for get first image from gallery for thumbnail that is used for product on cart page when product is added to cart
* Tweak - Make upgrade code for this version to convert the old data to new data to work with new features of Dynamic Gallery

= 1.5.0 - 2015/12/23 =
* Feature - Update gallery scripts for support 'scrset' and 'sizes' for new WordPress v4.4 responsive images feature
* Feature - Make a3 Dynamic Gallery on frontend support the Responsive Image with 2 new attribute 'scrset' and 'sizes' are put on thumbnail and main image for decrease the total size of images are load on gallery for small screen
* Feature - Change old Media Uploader pop-up to New UI of Uploader with Backbone and Underscore from WordPress
* Feature - Added full support for Right to Left RTL layout on plugins admin dashboard
* Feature - Defined 'wc_dg_no_image_uri' filter tag for change the placeholder image of plugin by theme or 3rd party theme
* Tweak - Tested for full compatibility with WordPress major version 4.4
* Tweak - Tested for full compatibility with WooCommerce version 2.4.12
* Tweak - Update the uploader script to save the Attachment ID and work with New Uploader
* Tweak - Change call action from 'wp_head' to 'wp_enqueue_scripts' and use 'wp_enqueue_style' function to load style for better compatibility with minify feature of caching plugins
* Tweak - Change call action from  'wp_head' to 'wp_enqueue_scripts' to load  google fonts
* Tweak - Updated a3 Plugin Framework to the latest version
* Tweak - Defined 'frontend_register_scripts' function with all gallery scripts are registered here for easy to enqueue on frontend
* Tweak - Defined 'backend_register_scripts' function and contain all scripts are registered here for easy to enqueue on backend
* Fix - Move activate gallery and variations checkboxes into inside the a3 Dynamic Image Gallery box instead of put on Box Title for work compatibility on WordPress 4.4 so that it can save correct value when check or unchecked
* Fix - Change all 'ad-gallery' to 'a3-dgallery' and from 'ad-' to 'a3dg-' to prevent browser blocker addons from preventing the gallery from working. Note! any theme or plugin developer that have added style by custom code for a3 Dynamic Gallery that should update the class selector in their code

= 1.4.4 - 2015/08/28 =
* Tweak - Tested for full compatibility with WooCommerce Version 2.4.6
* Tweak - Added new options into Settings -> Permalinks page on Dashboard
* Fix - Show the caption on pop-up when ColorBox pop-up is selected
* Fix - Added 'box-sizing: initial;' for #fancybox-wrap ID to the Close button show correct on top right corner of Fancybox pop-up

= 1.4.3 - 2015/08/20 =
* Tweak - Tested for full compatibility with WooCommerce Version 2.4.4
* Tweak - Tested for full compatibility with WordPress major version 4.3.0
* Tweak - include new CSSMin lib from https://github.com/tubalmartin/YUI-CSS-compressor-PHP-port into plugin framework instead of old CSSMin lib from http://code.google.com/p/cssmin/ , to avoid conflict with plugins or themes that have CSSMin lib
* Tweak - Make __construct() function for 'Compile_Less_Sass' class instead of using a method with the same name as the class for compatibility on WP 4.3 and is deprecated on PHP4
* Tweak - Change class name from 'lessc' to 'a3_lessc' so that it does not conflict with plugins or themes that have another Lessc lib
* Fix - Check 'request_filesystem_credentials' function, if it does not exists then require the core php lib file from WP where it is defined

= 1.4.2 - 2015/06/04 =
* Tweak - Tested for full compatibility with WooCommerce Version 2.3.10
* Tweak - Security Hardening. Removed all php file_put_contents functions in the plugin framework and replace with the WP_Filesystem API
* Tweak - Security Hardening. Removed all php file_get_contents functions in the plugin framework and replace with the WP_Filesystem API

= 1.4.1 - 2015/05/30 =
* Fix - Update url of dynamic stylesheet in uploads folder to the format <code>//domain.com/</code> so it's always is correct when loaded as <code>http</code> or <code>https</code>

= 1.4.0 - 2015/05/21 =
* Feature - Added full compatibility with the Enhanced Media Library plugin.
* Tweak - Tested for full compatibility with WordPress Version 4.2.2
* Tweak - Tested and Tweaked for full compatibility with WooCommerce Version 2.3.9
* Tweak - Changed Permission 777 to 755 for style folder inside the uploads folder
* Tweak - Chmod 644 for dynamic style and .less files from uploads folder
* Credit - Thanks to Kevin Coffel raising the EML compatibility issue and unlimited access to his site to create the compatibility

= 1.3.5 - 2015/05/05 =
* Tweak - Tested for full compatibility with WordPress Version 4.2.1
* Tweak - Define image Alt Text for Alt Attribute for serach engine optomization
* Tweak - Redefine caption text as new attribute data-caption for use as image captions in gallery
* Fix - Removed check_ajax_referer() call on frontend for compatibility with PHP caching plugins. Was returning -1 to js success call-back.

= 1.3.4 - 2015/04/21 =
* Tweak - Tested and Tweaked for full compatibility with WordPress Version 4.2.0
* Tweak - Tested and Tweaked for full compatibility with WooCommerce Version 2.3.8
* Tweak - Update style of plugin framework. Removed the <code>[data-icon]</code> selector to prevent conflict with other plugins that have font awesome icons
* Fix - <code>Undefined property: stdClass::$ID</code> bug. Check if feature image is not set then don't include in gallery.
* Fix - Set <code>z-index</code> to <code>100</code> of <code>.onsale</code> class so that it cannot be overridden by Dynamic Gallery container

= 1.3.3 - 2015/03/19 =
* Tweak - Tested and Tweaked for full compatibility with WooCommerce Version 2.3.7
* Tweak - Tested and Tweaked for full compatibility with WordPress Version 4.1.1

= 1.3.2 - 2015/02/13 =
* Tweak - Maintenance update for full compatibility with WooCommerce major version release 2.3.0 with backward compatibility to WC 2.2.0
* Tweak - Tested fully compatible with WooCommerce just released version 2.3.3
* Tweak - Changed WP_CONTENT_DIR to WP_PLUGIN_DIR. When an admin sets a custom WordPress file structure then it can get the correct path of plugin
* Tweak - Added Link to new plugins a3 Lazy Load and a3 Portfolio to the Free WordPress plugins list in yelow sidebar.

= 1.3.1 - 2015/01/27 =
* Tweak - Audit, test and tweak for 100% compatibility with WooCommerce 2.2.10
* Tweak - Audit, test and tweak for 100% compatibility with WordPress Version 4.1
* Fix - Sass compile path not saving on windows xampp.

= 1.3.0 - 2014/09/15 =
* Feature - Converted all front end CSS #dynamic {stylesheets} to Sass #dynamic {stylesheets} for faster loading.
* Feature - Convert all back end CSS to Sass.
* Tweak - Changed from is_product() function to is_singular( array( 'product' ) ) function in check to load dynamic gallery
* Tweak - Remove inline style is loaded for each gallery and gallery variation to reduce the query to database
* Tweak - Added customized_style.php file for Sass

= 1.2.6.6 - 2014/09/11 =
* Tweak - Tested 100% compatible with WooCommerce 2.2.2
* Tweak - Tested 100% compatible with WordPress Version 4.0

= 1.2.6.5 - 2014/09/03 =
* Tweak - Tested fully compatible with WooCommerce 2.2 back to 2.1
* Tweak - Updated google font face in plugin framework.

= 1.2.6.4 - 2014/06/23 =
* Fixed - Fixed the Warning - "Creating default object from empty value in" on Dynamic Gallery Preview popup.
* Fixed - Solved the conflict with WP Email Template for the warning "WP Email Template: wp_mail has been declared by another process or plugin, so you won't be able to use another Email Deliver Provider until the problem is solved." on Dynamic Gallery Style tab.

= 1.2.6.3 - 2014/06/18 =
* Tweak - Updated chosen js script to latest version 1.0.1 on the a3rev Plugin Framework
* Tweak - Updated plugins wordpress.org description text and admin panel yellow sidebar text.
* Tweak - Tested 100% compatible with WooCommerce version 2.1.11

= 1.2.6.2 - 2014/05/28 =
* Feature - Added option to Hide or show the default WooCommerce Product Gallery Meta box on product edit pages.
* Feature - If default WooCommerce Product Gallery is deactivated - Turn OFF the Dynamic Gallery on the product, the Woo default gallery shows again.
* Tweak - Improved UI - Turn off the Dynamic gallery from the Meta box and the box closes. Turn it on and it opens.
* Tweak - Changed add_filter( 'gettext', array( $this, 'change_button_text' ), null, 2 ); to add_filter( 'gettext', array( $this, 'change_button_text' ), null, 3 );
* Tweak - Update change_button_text() function from ( $original == 'Insert into Post' ) to ( is_admin() && $original === 'Insert into Post' )
* Tweak : Added support for placeholder feature for input, email , password , text area types
* Tweak - Tested 100% compatible with WooCommerce Version 2.1.9
* Tweak - Tested 100% compatible with WordPress Version 3.9.1
* Tweak - Updated the plugins description text on wordpress.org
* Tweak - Updated the plugins admin panel yellow sidebar text.

= 1.2.6.1 - 2014/02/12 =
* Tweak - Added remove_all_filters('mce_external_plugins'); before call to wp_editor to remove extension scripts from other plugins.
* Tweak - Updated Framework help text font for consistency.
* Fix - Conflict with wpMandrill plugin. Rewrote Gallery preview URL security require_once( ABSPATH . 'wp-includes/pluggable.php' ); with sanitiser that does not call wp_mail.

= 1.2.6 - 2014/01/27 =
* Feature - Upgraded for 100% compatibility with WooCommerce Version 2.1 with backward compatibility to Version 2.0
* Feature - Added all required code so plugin can work with WooCommerce Version 2.1 refactored code.
* Tweak - Set priority to 31 for add_action( 'add_meta_boxes' , ... ) to override the gallery box of WooCommerce Version 2.1
* Tweak - Added description text to the top of each Pro Version yellow border section
* Tweak - All switch text to show as Uppercase.
* Tweak - Tested for compatibility with WordPress version 3.8.1
* Tweak - Full WP_DEBUG ran, all uncaught exceptions, errors, warnings, notices and php strict standard notices fixed.

= 1.2.5.6 - 2013/12/18 =
* Feature - a3rev Plugin Framework admin interface upgraded to 100% Compatibility with WordPress v3.8.0 with backward compatibility.
* Feature - a3rev Plugin framework admin interface 100% mobile and tablet responsive. Portrait and landscape viewing and use in any device.
* Tweak - Upgraded dashboard switch and slider to Vector based display that shows when WordPress version 3.8.0 is activated.
* Tweak - Upgraded all plugin .jpg icons and images to Vector based display for full compatibility with new WordPress version.
* Tweak - Yellow sidebar on Pro Version Menus dose not show in Mobile screens to optimize admin panel screen space.
* Tweak - Tested 100% compatible with WP 3.8.0

= 1.2.5.5 - 2013/12/10 =
* Tweak - Removed fixed height setting that shows on admin when Gallery Dimension - Responsive is selected. (Pro Version settings)
* Fix - Upgraded array_textareas type for Padding, Margin settings on the a3rev plugin framework

= 1.2.5.4 - 2013/11/23 =
* Fix - remove class WC_Dynamic_Gallery that is not found when upgrade direct from older versions to v1.2.5.2 and cause a Fatal Error.
* Fix - Single Image Thumbnail ON | OFF switch not displaying properly when first turn thumbnails ON.

= 1.2.5.3 - 2013/11/21 =
* Fix - added admin-init.php file which failed to upload in version 1.2.5.3 SVN commit.

= 1.2.5.2 - 2013/11/20 =
* Feature - Upgraded the plugin to the newly developed a3rev admin Framework with app style interface.
* Feature - New admin UI features check boxes replaced by switches, some dropdowns replaced by sliders.
* Feature - Added intuitive triggers for admin panel settings. When selected corresponding feature settings appear.
* Tweak - Moved admin from WooCommerce settings tab onto the WooCommerce Nav bar, menu item Dynamic Gallery.
* Tweak - Dynamic Gallery menu broken up into tabs - Setting, Gallery Style, Image Thumbnails.

= 1.2.5.1 - 2013/10/17 =
* Tweak - Plugin scripts checked for full compatibility with new WooCommerce Version 2.0.16

= 1.2.5 - 2013/09/14 =
* Fix - Use browser protocol http or https on page load fix in v1.2.4 caused sites that use Minify plugins to crash on update. Updated style url and script url to fix Minify conflict.
* Credit - Thanks to Roy Vella (USA) for reporting the issue and the wp-admin and ftp access to his site to find and fix the bug.

= 1.2.4 - 2013/09/11 =
* Tweak - Added 'View Docs' link from the top of each admin panel to that menus section on the plugins docs.
* Fix - Gallery images not showing in Chrome with SSL on product pages. Stripped http// and https// protocols so browser will use the protocol that the page was loaded with.
* Fix - Plugins admin script and style not loading in Firefox with SSL on admin. Stripped http// and https// protocols so browser will use the protocol that the page was loaded with.

= 1.2.3 - 2013/08/22 =
* Fix - Gallery images can't show on some bespoke themes that have #aside img { visibility: hidden; added  visibility: visible !important; to over ride the themes code and gallery images can show.
* Credit - Thanks to Hernan Bettello for reporting the issue and access to his site to find and fix the issue with his theme and the gallery.

= 1.2.2 - 2013/08/03 =
* Tweak - Plugin in code tested fully compatible with WordPress v3.6.0
* Fix - Added Product Gallery Class attribute box-sizing:content-box for compatibility with new WordPress Twenty Thirteen default theme.

= 1.2.1 - 2013/07/02 =
* Tweak - Replaced all global option keys with plugin registered prefix wc_dynamic to prevent other plugins conflict with input options.
* Tweak - Complete review and tidy up of the source code. Tidied up namespacing.
* Tweak - Ran WP_DEBUG All Uncaught exceptions errors and warnings fixed.
* Tweak - Added PHP Public Static to functions in Class. Done so that Public Static warnings don't show in DE_BUG mode.
* Fix - IE fix in v1.1.9 gallery preload function error, images don't show on first load, but do after refresh. Edited jquery.a3-dgallery.js lib to fix.
* Fix - Not divisible by zero error message that showed when 0 value entered or <empty> for thumbnail wide and tall. Updated feature help text.
* Fix - Updated all JavaScript functions so that the plugin is compatible with jQuery Version1.9 and backwards to version 1.6. WordPress still uses jQuery version 1.8.3. Themes that use Google js Library instead of the WordPress jQuery are using the latest jQuery version 1.9. There are a number of functions in jQuery Version 1.9 that have been depreciated which was causing errors with the jQuery function in the plugin.

= 1.2.0 - 2013/07/01 =
* Tweak - Activated House Keeping feature setting in plugins Global Settings sub tab.
* Tweak - Updated House Keeping help text with clearer instructions and a clear Warning for those upgrading to the Pro Version.

= 1.1.9 - 2013/06/29 =
* Feature - Added - Show featured image for product grid view extracts but don't show it in the product page gallery. Check feature image exclude from Gallery to achieve this effect.
* Feature - Added House keeping function to settings. Clean up on Deletion.  Option - Choose if you ever delete this plugin it will completely remove all tables and data it created, leaving no trace it was ever here. Added to Global Settings sub tab.
* Tweak - Updated the plugins support links to the new plugins WordPress support forum.

= 1.1.8 - 2013/04/26 =
* Feature - Reduction in memory used when loading images to the gallery in the edit product page Dynamic Gallery image uploader. We have made several tweaks to the output buffering function to achieve this. Particularly useful for those with servers running low on or operating on low memory resources.
* Tweak - Added when install and activate plugin link redirects to WooCommerce Dynamic Gallery admin panel instead of the wp-plugins dashboard.

= 1.1.7 - 2013/04/10 =
* Fix - WooCommerce Reviews form opening in duplicate popup tools, PrettyPhoto and Fancybox caused by our old WooCommerce v1.6 fancybox lib.

= 1.1.6 - 2013/04/04 =
* Fix - Long standing issue with Gallery main image not showing in bespoke themes in Windows 7 and Widows 8 with IE browsers 8.0, 9.0, 10.0 and 10.0 Desktop. Many thanks to Nemanja from the Art Binaire Team for providing the solution.
* Tweak - The above fixed allowed us to complete full Gallery Optimization in Windows XP, IE 7, IE8, Windows 7, IE8 and IE9 and Windows 8, IE10 and IE10 Desktop.
* Tweak - Full Gallery test and optimization for  all 3 Windows operating systems - for these legacy browsers - Firefox, Safari, Chrome and Opera.
* Tweak - Fully Gallery test and optimization for Apple OS X operating systems. Snow leopard, Lion and Mountain Lion using these legacy Browsers - Firefox, Safari, Chrome and Opera
* Tweak - Full Gallery test and optimization for Apple IOS Mobile Safari in iPhones and all iPads.
* Tweak - Fully Gallery test and optimization for Android Browser on all models of these manufacturers tablets that use the Android operating system - Amazon Kindle Fire, Google Nexus 7, Samsung Galaxy Note, Samsung Galaxy Tab 2
* Tweak - Fully Gallery test and optimization for Android Browser on all models of these manufacturers phone that use the Android operating system (to many to list)  mobile phones that support - Samsung Galaxy, Motorola, HTC, Sony and LG
* Tweak - Full Gallery test and optimization for Opera Mobile - Samsung Galaxy Tablet and Mobiles HTC Wildfire. Nokia 5800, Samsung Galaxy S II, Motorola Droid X and Motorola Atrix 4G

= 1.1.5 - 2013/03/25 =
* Fix - Lightbox pop-up script bug. When using the Lightbox tool for the image pop-up the current image did not show - instead showed first image in the gallery. Could never resolve this so we have replaced the old Lightbox pop-up script with new Colorbox script. This fixes this long standing issue.
* Fix - Bug for users who have https: (SSL) on their sites wp-admin but have http on sites front end. This was causing a -1 to show in the Gallery Container instead of the current image because wp-admin with SSL applied only allows https:, but the url of admin-ajax.php is http: and it is denied hence returning the ajax -1 error. Fixed by writing a filter to recognize when https is configured on wp-admin and parsing correctly. If you do not have this configuration nothing changes for you, if you do have https on your wp-admin (or install it in the future) and http on the front end then Dynamic Gallery will automatically detect that and works as it should.

= 1.1.4 - 2013/03/09 =
* Feature - UI Enhancement. Complete rework of the admin dashboard.
* Tweak - Admin panel content broken up into sub nav tabs for ease of feature management. Gallery | Global Settings | Caption text | Nav Bar | Lazy-load scroll | Image Thumbnails
* Tweak - Added WooCommerce Chosen script for dropdowns and options.
* Fix - Undefined PrettyPhoto script include. Defined script to load from footer after jQuery script. In some sites this was causing the image Zoom not to work.
* Fix - Conflict with Chrome browser add on AdBlocker. Chrome extension Adblocker was hiding the gallery class name a3dg-images which was causing the main gallery images not to show. Edited style so now gallery shows with that add-on activated.
* Docs - Updated plugins wiki documentation to show the new admin UI and features

= 1.1.3 - 2013/03/04 =
* Feature - Updated all plugin code to be 100% compatible with WooCommerce V2.0 and backwards.
* Feature - Added new WordPress and WooCommerce PrettyPhoto tool and made it the default pop up tool for the gallery. NOTE: You must have upgraded WordPress to Version 3.5+ for the PrettyPhoto pop-up to work. If you have not upgraded to WordPress 3.5 do not install this plugin upgrade until you do or the image pop-up won't work for you. Note WooCommerce 2.0 requires WordPress 3.5.
* Feature - On install Dynamic Gallery can now show product feature images that have been created from the WordPress Media Library. Previously the gallery could not find these images and would show no image.
* Feature - Added delete WordPress Media Library Featured image from the Dynamic Gallery Product Page Meta. The Media Library thumbnail has a Red X on it and pop up on hover text to explain why users should delete the image and upload it to the Dynamic gallery.
* Feature - Added option to Admin dashboard to set 'Gallery Activation Default'. From the dashboard you can Activate or Deactivate the Dynamic Gallery for all Product Pages excluding Product Pages that have a custom gallery activation setting.
* Feature - Added option to Admin Panel to 'Reset Activation to default', This option allows you to rest all Gallery Activation settings to the default you have set.
* Tweak - Jumped version from 1.0.9 to 1.1.3 to keep in synch with Pro License Version.

= 1.0.9 - 2013/01/23 =
* Feature - Massive 2 times improvement in gallery image load times. Reworked the way that the Gallery image thumbnails are loaded with a resulting 50% reduction in gallery load speed.
* Tweak - Tested gallery on WooCanvas theme for 100% compatibility in Fire Fox, Google Chrome, Safari, IE8  , IE9, ios5, ios6 and Android.
* Tweak - Added Thumbnail help text on admin panel, warning not to set the Thumbnail width and height to '0' empty as it causes a .php error 'not divisible by zero'  message to show on product pages instead of the Gallery.

= 1.0.8 - 2013/01/09 =
* Tweak - Updated Support and Pro Version link URL's on wordpress.org description, plugins and plugins dashboard. Links were returning 404 errors since the launch of the all new a3rev.com mobile responsive site as the base e-commerce permalinks is changed.

= 1.0.7 - 2012/11/23 =
* Tweak - Dynamic Gallery now only recognizes image formats .jpg, .jpeg, .gif, .png. It won't recognize another file and won't show in gallery, or on Image gallery manager meta box. Mean that files like PDF's can be uploaded and the gallery does not show them or on the Pro version create variations for them in the pop up image manager.
* Tweak - Added link to Dynamic gallery Admin tab for our New WordPress version of WooCommerce Product Widget Slideshow plugin.
* Tweak - Added 'Apply to All' option on Gallery Image manager pop-up - this feature allows PRO Version user to Apply all variations in a set to the selected image with one click - Thanks to Shawn for the feedback and the idea.

= 1.0.6 - 2012/10/31 =
* Tweak - Upgraded code with new PRO Version Variation Products Image manager to allow for seamless upgrade to Pro version.

= 1.0.5 - 2012/10/26 =
* Fix - Stopped Lazy load scrolling on Gallery initial load for auto start (Lite and Pro Versions) and when Auto Start not activated on Pro Version. Now the Lazy load scroll only starts when transition to second image in the Gallery starts.
* Fix - Lazy Load scroll duration now sync with and set by the transition effect speed setting (Lite and Pro Versions).
* Fix - Caption text pop-up now sync with and set by the Time between transitions settings (Lite and Pro Versions).
* Fix - Make center for image in gallery frame

= 1.0.4 - 2012/10/01 =
* Fix - Single image click zoom function. The current image now opens when Zoom or the image is clicked.
* Tweak - Added display:inline-block !important; into css file for image class
* Tweak - Update dashboard to show new Pro version features - responsive setting and include product variation images.
* Tweak - Added Pro Version check box features for deactivate gallery and variation images to product page gallery manager.

= 1.0.3 - 2012/09/03 =
* Feature - Add fancybox script to plugin so that if the theme does not support fancybox or it is disabled in the admin panel then the gallery image zoom can still work.
* Fix - Gallery preview not working on sites that do not have wp_enqueue_script( 'thickbox' ) by default. Added call to wp_enqueue_script( 'thickbox' ) if it does not exist so that preview window can open.
* Fix - Updated depreciated php function ereg() with stristr() so that Pro version auto plugin auto upgrade feature work without error for WordPress 3.4.0 and later
* Tweak - Enqueue plugin script into footer use wp_enqueue_script so that now it is only loaded when needed rather than site-wide and has zero impact on page load speeds.
* Tweak - Enqueue plugin style into header use wp_enqueue_style so that now it is only loaded when needed rather than site-wide and has zero impact on page load speeds.
* Tweak - Add plugin Documentation and Support links to the wp plugins dashboard description.
* Tweak - Add plugin description to wp plugins dashboard.
* Tweak - Change localization file path from actual to base path

= 1.0.2 - 2012/07/18 =
* Fix - Edit Javascript to fix Image Scaling Issue.

= 1.0.1 - 2012/07/17 =
* Fix - Set Gallery z index to a low number so that theme Nav bar dropdowns don't show behind the gallery.
* Fix - Remove gallery script that makes wide of block class to 100% which was causing some themes footer widgets to show 100% wide.

= 1.0 - 2012/07/14 =
* Initial release.


== Upgrade Notice ==

= 3.5.3 =
This release has various tweaks for compatibility with WordPress 6.6 and WooCommerce 8.9.3

= 3.5.2 =
This maintenance release has plugin framework updates for compatibility with PHP 8.1 onwards, plus a bug fix and backward compatibility updated to WooCommerce 6.0.

= 3.5.1 =
This maintenance release has a Code Tweak for compatibility with WordPress 6.4 and WooCommerce 8.2

= 3.5.0 =
This feature release adds a "Dynamic Gallery" Block for use with Gutenberg templates. Also compatibility with WooCommerce 8.0.3 and WordPress 6.3

= 3.4.3 =
This maintenance release has 2 bug fixes for compatibility with WordPress 6.2.2 or higher.

= 3.4.2 =
This maintenance release fixes a conflict with WooCommerce 7.9 and the single block template.

= 3.4.1 =
This maintenace release has 2 performance / SEO tweaks and compatibility with WooCommerce 7.8.2

= 3.4.0 =
This feature release adds insert Dynamic Gallery by 2 new shortcodes. Works with New WC Single Product Page Bock Template and page builders like Elementor.

= 3.3.0 =
This release has compatibility with WordPress 6.2.0, WooCommerce 7.6.0 plus declared compatibility with WooCommerce HPOS.

= 3.2.0 =
This Core web vitals performance improving release removes the fontawesome lib, replacing font icons with SVGs, changes Gallery Thumbnail sizes to WooCommerce default (smaller and faster loading), plus checks for compatibility with WooCommerce 7.2

= 3.1.1 =
This maintenance release has a bug fix for some missing Webp filter args.

= 3.1.0 =
This feature release adds Default font control and support for Webp images converted by popular plugins, Webp Express and Imagify.

= 3.0.3 =
This maintenance release has 1 bug fix and compatibility with WooCommerce 7.1

= 3.0.2 =
This maintenance release has a security vulnerability patch, plus compatibility with WordPress major version 6.1.0 and WooCommerce version 7.0

= 3.0.1 =
This release fixes a bug with the just released version 3.0.0

= 3.0.0 =
This release is for compatibility with WordPress major version 6.0 and WooCommerce version 6.5.1. It and includes various code tweaks and tweaks to harden security.

= 2.9.0 =
This release has a new Google Fonts API Validation feature plus compatibility with WordPress 5.9 and WooCommerce 6.1.1

= 2.8.13 =
This maintenance release has check for compatibility with PHP version 8.x and WooCommerce 5.9

= 2.8.12 =
This maintenance release has code tweaks for compatibility with WordPress Major version 5.8, WooCommerce version 5.5.1 and some Security Hardening.

= 2.8.11 =
This small maintenance release contains a security patch

= 2.8.9 =
This maintenance release updates 23 deprecated jQuery functions for compatibility with the latest version of jQuery in WordPress 5.7

= 2.8.8 =
This maintenance release is for compatibility with WordPress 5.7

= 2.8.7 =
This maintenance release is for compatibility with WooCommerce major version 4.9.0

= 2.8.6 =
This is an important maintenance release that updates our scripts for compatibility with the latest version of jQuery released in WordPress 5.6

= 2.8.5 =
This maintenance release has fixes for compatibility issues with the latest version of jQuery in WordPress 5.6

= 2.8.4 =
* This maintenance release is for compatibility with WooCommerce 4.8.0

= 2.8.3 =
This maintenance release has tweaks and a fix for compatibility with WordPress major version 5.6, WooCommerce 4.7.1 and PHP 7.4.8

= 2.8.2 =
This maintenance release is for compatibility with WordPress major version 5.5 and WooCommerce 4.3.1.

= 2.8.1 =
This maintenance release is for compatibility with WooCommerce 4.0.1, WordPress 5.4, introducing Travis CI unit testing for full compliance with WordPress code standards for PHP versions 7.0 to 7.4

= 2.8.0 =
This feature release completes the full refactor (frontend and backend) of the plugins PHP to Composer plus compatibility with WooCommerce 3.8.1 and WordPress 5.3.

= 2.7.1=
This maintenance release is for WordPress 5.3 and WooCommerce 3.8.1 compatibility with a full security review of the plugins code.

= 2.7.0 =
This feature upgrade is for the upgrade of the plugin to Composer PHP dependency manager for cleaner and faster PHP code plus compatibility with WooCommerce 3.7.1 and WordPress 5.2.3

= 2.6.0 =
This major feature upgrade adds a Dynamic Gallery Widget & Shortcode plus Full compatibility with Elementor Premium Template Builder.

= 2.5.8 =
This maintenance upgrade is to fix a style conflict with fontawesome icons

= 2.5.7 =
This is a maintenance upgrade to fix a potentially fatal error conflict with sites running PHP 7.3 plus compatibility with WordPress v 5.2.2 and WooCommerce 3.6.4

= 2.5.6 =
This maintenance update has tweaks for compatibility with WordPress 5.2.0 and WooCommerce 3.6.0 major new versions whilst maintaining backward compatibility

= 2.5.5 =
This maintenance adds a code tweak and fix for the Gallery display and function in mobile devices. plus compatibility with WooCommerce 3.5.4 and WordPress 5.1

= 2.5.4 =
This maintenance update is for compatibility with WordPress 5.0.2, WooCommerce 3.5.2 and PHP 7.3. It also includes performance updates to the plugin framework.

= 2.5.3 =
Maintenance Update. Compatibility with WooCommerce 3.4.0, WordPress 4.9.6 and the new GDPR compliance requirements for users in the EU

= 2.5.2 =
Maintenance Update. This version updates the Plugin Framework to v 2.0.2, adds full compatibility with a3rev Dashboard, WordPress v 4.9.4 and WooCoomerce v 3.3.1

= 2.5.1 = 
Maintenance Update. 1 Teak and 1 bug fix for full compatibility with WordPress 4.9

= 2.5.0 =
Feature Upgrade. In this release we add the ability to define where images are sourced from for the Gallery, either all images uploaded to the post or just the images that have been uploaded to Product Image gallery.

= 2.4.1 =
Maintenance Upgrade. Tweaks for compatibility with WooCommerce 3.2.0 and WordPress 4.8.2

= 2.4.0 =
Maintenance Update. 2 new features plus 2 code tweaks for compatibility with WordPress major version 4.8.0 and launch on Github public repo

= 2.3.5 =
Minor Maintenance Update. Tested for Compatibility with WooCommerce 3.0.7 and WordPress 4.7.5

= 2.3.4 =
Maintenance Update. Code tweaks for full compatibility with WooCommerce V 3.0.1 and backwards to V 2.6.0 and WordPress V 4.7.3

= 2.3.3 =
Maintenance Update. 3 tweaks for full compatibility with WordPress 4.7.1, WooCommerce 2.6.12 and PHP 7.0

= 2.3.2 =
Minor Maintenance Update. Tweaked for full compatibility with WooCommerce version 2.6.6 and WordPress version 4.6.1

= 2.3.1 =
Maintenance Update. Full compatibility with WordPress version 4.6.0

= 2.3.0 =
Major Feature Upgrade. 10 new features and 5 code tweaks. Please encourage us to keep improving this plugin for you by giving it a 5 star review and or support ongoing development of it by upgrading to the Premium Version 

= 2.2.7 =
Maintenance Update. 1 Teak and 1 bug fix for full compatibility with WooCommerce 2.6.2 and WordPress 4.5.3

= 2.2.6 =
Maintenance Update. 1 Bug Fixes for full compatibility with WooCommerce version 2.6.1

= 2.2.5 =
Maintenance Update. 4 Tweaks to convert plugin to use the WooCommerce Single Product Image settings including Hard Crop Option.

= 2.2.4 =
Maintenance Update. 1 bug fix for PHP invalid argument warning

= 2.2.3 =
Maintenance Update. 1 Tweak to change the default WooCommerce Gallery image issue of showing an image twice in the gallery if uploaded to the gallery and to the Product Image (featured image)

= 2.2.2 =
Maintenance Update. 1 Tweak so that Dynamic Gallery can show featured image as first image in Gallery when it is not uploaded to the Gallery

= 2.2.1 =
Maintenance Update. 2 tweaks for full compatibility with upcoming WordPress major version 4.5.0

= 2.2.0 =
Feature Upgrade. Added full Gallery Responsive width settings that were previously only available in the Premium version. Also includes 1 bug fix and 2 major code tweaks.

= 2.1.0 =
Major Feature Upgrade. Dynamic Gallery features and functions now applied to the WooCommerce Product Gallery - completes the full integration with WooCommerce. 4 new features, 7 major code tweaks and 3 bug fixes

= 2.0.3 =
Maintenance Update. 1 Tweak for gallery thumbnails delete action.

= 2.0.2 =
Maintenance Update. 1 code tweak for full compatibility with WooCommerce 2.5.2 and WordPress 4.4.2

= 2.0.1 =
Maintenance update with a Gallery images bug fix for full compatibility with WooCommerce version 2.5.1

= 2.0.0 =
Feature Upgrade. 4 New Features - after upgrade be sure to visit Dynamic Gallery admin panel to check them out. Full compatibility with WooCommerce Major Version 2.5.0 

= 1.8.2 =
Maintenance Update. 1 Gallery image size display bug fix plus 2 code tweaks for full compatibility with WordPress Version 4.4.1

= 1.8.1 =
Maintenance Update. This upgrade includes 2 new features that were missed in yesterday's Version 1.8.0 new feature upgrade - Oops sorry about that.

= 1.8.0 =
Feature Upgrade. 7 new Gallery Thumbnail features. Complete rebuild of Gallery Thumbnails slider with full integration with WooCommerce Product Thumbnails.

= 1.7.0 =
Major Feature Upgrade. 6 new features including massive admin panel UI and UX upgrade plus a3 Dynamic gallery meta moved into WooCommerce Product Data menu

= 1.6.0 =
Major Feature Upgrade. 5 new features including use media library images plus 5 major code tweaks.

= 1.5.0 =
Feature Upgrade. 5 new features plus 6 code tweaks and 2 bug fixes for full compatibility with WordPress v 4.4 and WooCommerce v 2.4.12

= 1.4.4 =
Maintenance Upgrade. 2 code Tweak and 2 bug fixes for full compatibility with WooCommerce version 2.4.6

= 1.4.3 =
Major Maintenance Upgrade. 5 Code Tweaks plus 1 bug fixes for full compatibility with WordPress v 4.3.0 and WooCommerce v 2.4.4

= 1.4.2 =
Important Maintenance Upgrade. 2 x major a3rev Plugin Framework Security Hardening Tweaks plus full compatibility with WooCommerce 2.3.10

= 1.4.1 =
Maintenance Upgrade. 1 bug fix for dynamic stylesheets loaded over secure https protocol.

= 1.4.0 =
Feature Upgrade. Added full compatibility with the Enhanced Media Library plugin plus 2 security Tweaks and full compatibility with WordPress 4.2.2 and WooCommerce 2.3.9

= 1.3.5 =
Maintenance Update. 1 Bug fix for full compatibility with PHP caching plugins with 2 Image Alt and Caption text tweaks and full compatibility with WordPress version 4.2.1

= 1.3.4 =
Maintenance upgrade. Code tweaks for full compatibility with WordPress 4.2.0 and WooCommerce 2.3.8 plus 2 bug fixes.

= 1.3.3 =
Upgrade now for full compatibility with WooCommerce Version 2.3.7 and WordPress version 4.1.1

= 1.3.2 =
Upgrade now for full compatibility with WooCommerce major version release 2.3.0 with backward compatibility to WooCommerce v 2.2.0

= 1.3.1 =
Upgrade now for full compatibility with WooCommerce 2.2.10 and WordPress 4.1 plus 1 bug fix

= 1.3.0 =
Major Version upgrade! Upgrade now for full conversion of Dynamic Gallery to Sass #dynamic {stylesheets} on front end and Sass on admin panel.

= 1.2.6.6 =
Upgrade your plugin now for full compatibility with WordPress Version 4.0 and WooCommerce Version 2.2.2

= 1.2.6.5 =
Upgrade now for full compatibility with soon to be released WooCommerce Version 2.2 backwards to version 2.1

= 1.2.6.4 =
Upgrade your plugin now for 2 new bug fixes.

= 1.2.6.3 =
Upgrade your plugin now for 1 framework code tweak that makes the plugin fully compatible with WooCommerce Version 2.1.11 and backwards.

= 1.2.6.2 =
Upgrade your plugin now for 2 new feature, 3 Framework code Tweaks and full compatibility with WooCommerce version 2.1.9 and WordPress version 3.9.1

= 1.2.6.1 =
Upgrade now for wpMandrill plugin conflict bug fix plus 2 Framework Tweaks.

= 1.2.6 =
Upgrade now for full compatibility with WooCommerce Version 2.1 and WordPress version 3.8.1. Includes full backward compatibly with WooCommerce versions 2.0 to 2.0.20 plus 4 Tweaks.

= 1.2.5.6 =
Upgrade now for full a3rev Plugin Framework compatibility with WordPress version 3.8.0 and backwards. New admin interface full mobile and tablet responsive display.

= 1.2.5.5 =
Upgrade your plugin now for admin panel Tweak and bug fix.

= 1.2.5.4 =
Upgrade your plugin now for 2 new bug fixes.

= 1.2.5.3 =
Important bug fix for yesterday v1.2.5.2 release. Please upgrade your plugin now.

= 1.2.5.2 =
Upgrade your plugin now to the all new a3rev plugin framework with app style admin interface and full compatibility with WordPress 3.7.1

= 1.2.5.1 =
Upgrade now for full compatibility with new WooCommerce Version 2.0.16 - Upgrade is version 2.0.16 and backward compatible

= 1.2.5 =
Upgrade now for very important conflict with Minify bug fix.

= 1.2.4 =
Upgrade now for great new 'Help' feature - links from each admin page straight to that section of the docs. Plus 2 SSL Bug Fixes.

= 1.2.3 =
Upgrade now for 1 new bug fix.

= 1.2.2 =
Upgrade your plugin now for an image variation bug fix and full compatibility with WordPress 3.6.0

= 1.2.1 =
Upgrade your plugin now to fix a bug that showed with version 1.1.9 plus a full and comprehensive core code review and overhaul.

= 1.1.9 =
Update you plugin now for 2 new features and a tweak.

= 1.1.8 =
Install this upgrade for a reduction in memory used when uploading images via the Dynamic Gallery image uploader.