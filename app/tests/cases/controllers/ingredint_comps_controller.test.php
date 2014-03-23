<?php 
/* SVN FILE: $Id$ */
/* IngredintCompsController Test cases generated on: 2009-08-22 20:08:27 : 1250961747*/
App::import('Controller', 'IngredintComps');

class TestIngredintComps extends IngredintCompsController {
	var $autoRender = false;
}

class IngredintCompsControllerTest extends CakeTestCase {
	var $IngredintComps = null;

	function startTest() {
		$this->IngredintComps = new TestIngredintComps();
		$this->IngredintComps->constructClasses();
	}

	function testIngredintCompsControllerInstance() {
		$this->assertTrue(is_a($this->IngredintComps, 'IngredintCompsController'));
	}

	function endTest() {
		unset($this->IngredintComps);
	}
}
?>