<?php
/**
 * Class SampleTest
 *
 * @package Sample_Plugin
 */

/**
 * Sample test case.
 */
class a3Rev_Tests_DynamicGallery extends WP_UnitTestCase {

	function test_constants_defined() {
		$this->assertTrue( defined( 'WOO_DYNAMIC_GALLERY_KEY' ) );
		$this->assertTrue( defined( 'WOO_DYNAMIC_GALLERY_PREFIX' ) );
		$this->assertTrue( defined( 'WOO_DYNAMIC_GALLERY_VERSION' ) );
	}
}
