<?php 
/* SVN FILE: $Id$ */
/* ProductRetetasController Test cases generated on: 2009-08-13 20:08:12 : 1250184012*/
App::import('Controller', 'ProductRetetas');

class TestProductRetetas extends ProductRetetasController {
	var $autoRender = false;
}

class ProductRetetasControllerTest extends CakeTestCase {
	var $ProductRetetas = null;

	function startTest() {
		$this->ProductRetetas = new TestProductRetetas();
		$this->ProductRetetas->constructClasses();
	}

	function testProductRetetasControllerInstance() {
		$this->assertTrue(is_a($this->ProductRetetas, 'ProductRetetasController'));
	}

	function endTest() {
		unset($this->ProductRetetas);
	}
}
?>