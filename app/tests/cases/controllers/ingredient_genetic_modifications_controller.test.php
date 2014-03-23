<?php 
/* SVN FILE: $Id$ */
/* IngredientGeneticModificationsController Test cases generated on: 2009-06-18 15:06:58 : 1245327298*/
App::import('Controller', 'IngredientGeneticModifications');

class TestIngredientGeneticModifications extends IngredientGeneticModificationsController {
	var $autoRender = false;
}

class IngredientGeneticModificationsControllerTest extends CakeTestCase {
	var $IngredientGeneticModifications = null;

	function startTest() {
		$this->IngredientGeneticModifications = new TestIngredientGeneticModifications();
		$this->IngredientGeneticModifications->constructClasses();
	}

	function testIngredientGeneticModificationsControllerInstance() {
		$this->assertTrue(is_a($this->IngredientGeneticModifications, 'IngredientGeneticModificationsController'));
	}

	function endTest() {
		unset($this->IngredientGeneticModifications);
	}
}
?>