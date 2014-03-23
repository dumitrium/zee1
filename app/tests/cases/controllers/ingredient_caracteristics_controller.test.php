<?php 
/* SVN FILE: $Id$ */
/* IngredientCaracteristicsController Test cases generated on: 2009-06-18 15:06:47 : 1245327287*/
App::import('Controller', 'IngredientCaracteristics');

class TestIngredientCaracteristics extends IngredientCaracteristicsController {
	var $autoRender = false;
}

class IngredientCaracteristicsControllerTest extends CakeTestCase {
	var $IngredientCaracteristics = null;

	function startTest() {
		$this->IngredientCaracteristics = new TestIngredientCaracteristics();
		$this->IngredientCaracteristics->constructClasses();
	}

	function testIngredientCaracteristicsControllerInstance() {
		$this->assertTrue(is_a($this->IngredientCaracteristics, 'IngredientCaracteristicsController'));
	}

	function endTest() {
		unset($this->IngredientCaracteristics);
	}
}
?>