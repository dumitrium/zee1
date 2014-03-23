<?php 
/* SVN FILE: $Id$ */
/* IngredientsProduct Test cases generated on: 2009-09-06 01:09:37 : 1252191217*/
App::import('Model', 'IngredientsProduct');

class IngredientsProductTestCase extends CakeTestCase {
	var $IngredientsProduct = null;
	var $fixtures = array('app.ingredients_product', 'app.ingredient', 'app.product');

	function startTest() {
		$this->IngredientsProduct =& ClassRegistry::init('IngredientsProduct');
	}

	function testIngredientsProductInstance() {
		$this->assertTrue(is_a($this->IngredientsProduct, 'IngredientsProduct'));
	}

	function testIngredientsProductFind() {
		$this->IngredientsProduct->recursive = -1;
		$results = $this->IngredientsProduct->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('IngredientsProduct' => array(
			'id'  => 1,
			'ingredient_id'  => 1,
			'product_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>