<?php 
/* SVN FILE: $Id$ */
/* ProductCaracteristicsController Test cases generated on: 2009-08-04 22:08:51 : 1249415751*/
App::import('Controller', 'ProductCaracteristics');

class TestProductCaracteristics extends ProductCaracteristicsController {
	var $autoRender = false;
}

class ProductCaracteristicsControllerTest extends CakeTestCase {
	var $ProductCaracteristics = null;

	function startTest() {
		$this->ProductCaracteristics = new TestProductCaracteristics();
		$this->ProductCaracteristics->constructClasses();
	}

	function testProductCaracteristicsControllerInstance() {
		$this->assertTrue(is_a($this->ProductCaracteristics, 'ProductCaracteristicsController'));
	}

	function endTest() {
		unset($this->ProductCaracteristics);
	}
}
?>