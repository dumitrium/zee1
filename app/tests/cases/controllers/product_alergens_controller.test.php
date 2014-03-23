<?php 
/* SVN FILE: $Id$ */
/* ProductAlergensController Test cases generated on: 2009-07-27 15:07:29 : 1248698009*/
App::import('Controller', 'ProductAlergens');

class TestProductAlergens extends ProductAlergensController {
	var $autoRender = false;
}

class ProductAlergensControllerTest extends CakeTestCase {
	var $ProductAlergens = null;

	function startTest() {
		$this->ProductAlergens = new TestProductAlergens();
		$this->ProductAlergens->constructClasses();
	}

	function testProductAlergensControllerInstance() {
		$this->assertTrue(is_a($this->ProductAlergens, 'ProductAlergensController'));
	}

	function endTest() {
		unset($this->ProductAlergens);
	}
}
?>