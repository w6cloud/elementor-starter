<?php
/**
 * Test Case for the Plugin's PHP\Integration Tests.
 *
 * @package     W6\ElementorStarter\Tests\PHP\Integration
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/starter-plugin
 * @license     GNU-2.0+
 */

namespace W6\ElementorStarter\Tests\PHP\Integration;

use Brain\Monkey;
use W6\ElementorStarter\Tests\PHP\Test_Case_Trait;
use WP_UnitTestCase;

/**
 * Abstract Class Test_Case
 *
 * @package W6\ElementorStarter\Tests\PHP\Integration
 */
abstract class Test_Case extends WP_UnitTestCase {

	use Test_Case_Trait;

	/**
	 * Prepares the test environment before each test.
	 */
	public function setUp() {
		$this->test_root_dir = get_test_root_dir() . DIRECTORY_SEPARATOR;
		parent::setUp();
		Monkey\setUp();
	}

	/**
	 * Cleans up the test environment after each test.
	 */
	public function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}
}
