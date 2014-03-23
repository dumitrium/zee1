<?php 
/* SVN FILE: $Id$ */
/* ProductStandardsController Test cases generated on: 2009-07-27 15:07:09 : 1248698109*/
App::import('Controller', 'ProductStandards');

class TestProductStandards extends ProductStandardsController {
	var $autoRender = false;
}

class ProductStandardsControllerTest extends CakeTestCase {
	var $ProductStandards = null;

	function startTest() {
		$this->ProductStandards = new TestProductStandards();
		$this->ProductStandards->constructClasses();
	}

	function testProductStandardsControllerInstance() {
		$this->assertTrue(is_a($this->ProductStandards, 'ProductStandardsController'));
	}

	function endTest() {
		unset($this->ProductStandards);
	}
}
?>