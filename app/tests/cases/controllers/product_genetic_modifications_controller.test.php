<?php 
/* SVN FILE: $Id$ */
/* ProductGeneticModificationsController Test cases generated on: 2009-07-27 15:07:58 : 1248698038*/
App::import('Controller', 'ProductGeneticModifications');

class TestProductGeneticModifications extends ProductGeneticModificationsController {
	var $autoRender = false;
}

class ProductGeneticModificationsControllerTest extends CakeTestCase {
	var $ProductGeneticModifications = null;

	function startTest() {
		$this->ProductGeneticModifications = new TestProductGeneticModifications();
		$this->ProductGeneticModifications->constructClasses();
	}

	function testProductGeneticModificationsControllerInstance() {
		$this->assertTrue(is_a($this->ProductGeneticModifications, 'ProductGeneticModificationsController'));
	}

	function endTest() {
		unset($this->ProductGeneticModifications);
	}
}
?>