<?php defined('SYSPATH') or die('No direct script access.');


class TestOfExample extends UnitTestCase {

	function testSimpletestController() {

		$this->assertEqual(1, 1);
		
		$this->assertNotEqual(10, 1);

		$this->assertTrue(TRUE);

		$this->assertFalse(FALSE);


	}
}