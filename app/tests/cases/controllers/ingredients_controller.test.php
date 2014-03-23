<?php 
/* SVN FILE: $Id$ */
/* IngredientsController Test cases generated on: 2009-06-12 22:06:05 : 1244834765*/
App::import('Controller', 'Ingredients');

class TestIngredients extends IngredientsController {
	var $autoRender = false;
}

class IngredientsControllerTest extends CakeTestCase {
	var $Ingredients = null;

	function startTest() {
		$this->Ingredients = new TestIngredients();
		$this->Ingredients->constructClasses();
	}

	function testIngredientsControllerInstance() {
		$this->assertTrue(is_a($this->Ingredients, 'IngredientsController'));
	}

	function endTest() {
		unset($this->Ingredients);
	}
}
?>