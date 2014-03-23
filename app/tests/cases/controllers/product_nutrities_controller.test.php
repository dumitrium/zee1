<?php 
/* SVN FILE: $Id$ */
/* ProductNutritiesController Test cases generated on: 2009-08-04 22:08:41 : 1249415801*/
App::import('Controller', 'ProductNutrities');

class TestProductNutrities extends ProductNutritiesController {
	var $autoRender = false;
}

class ProductNutritiesControllerTest extends CakeTestCase {
	var $ProductNutrities = null;

	function startTest() {
		$this->ProductNutrities = new TestProductNutrities();
		$this->ProductNutrities->constructClasses();
	}

	function testProductNutritiesControllerInstance() {
		$this->assertTrue(is_a($this->ProductNutrities, 'ProductNutritiesController'));
	}

	function endTest() {
		unset($this->ProductNutrities);
	}
}
?>