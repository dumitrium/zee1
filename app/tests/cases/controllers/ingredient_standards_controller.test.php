<?php 
/* SVN FILE: $Id$ */
/* IngredientStandardsController Test cases generated on: 2009-06-29 20:06:13 : 1246295893*/
App::import('Controller', 'IngredientStandards');

class TestIngredientStandards extends IngredientStandardsController {
	var $autoRender = false;
}

class IngredientStandardsControllerTest extends CakeTestCase {
	var $IngredientStandards = null;

	function startTest() {
		$this->IngredientStandards = new TestIngredientStandards();
		$this->IngredientStandards->constructClasses();
	}

	function testIngredientStandardsControllerInstance() {
		$this->assertTrue(is_a($this->IngredientStandards, 'IngredientStandardsController'));
	}

	function endTest() {
		unset($this->IngredientStandards);
	}
}
?>