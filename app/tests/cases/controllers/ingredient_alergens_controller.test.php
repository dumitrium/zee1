<?php 
/* SVN FILE: $Id$ */
/* IngredientAlergensController Test cases generated on: 2009-06-18 15:06:36 : 1245327276*/
App::import('Controller', 'IngredientAlergens');

class TestIngredientAlergens extends IngredientAlergensController {
	var $autoRender = false;
}

class IngredientAlergensControllerTest extends CakeTestCase {
	var $IngredientAlergens = null;

	function startTest() {
		$this->IngredientAlergens = new TestIngredientAlergens();
		$this->IngredientAlergens->constructClasses();
	}

	function testIngredientAlergensControllerInstance() {
		$this->assertTrue(is_a($this->IngredientAlergens, 'IngredientAlergensController'));
	}

	function endTest() {
		unset($this->IngredientAlergens);
	}
}
?>