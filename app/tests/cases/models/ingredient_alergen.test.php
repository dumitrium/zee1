<?php 
/* SVN FILE: $Id$ */
/* IngredientAlergen Test cases generated on: 2009-06-18 15:06:03 : 1245327183*/
App::import('Model', 'IngredientAlergen');

class IngredientAlergenTestCase extends CakeTestCase {
	var $IngredientAlergen = null;
	var $fixtures = array('app.ingredient_alergen', 'app.ingredient');

	function startTest() {
		$this->IngredientAlergen =& ClassRegistry::init('IngredientAlergen');
	}

	function testIngredientAlergenInstance() {
		$this->assertTrue(is_a($this->IngredientAlergen, 'IngredientAlergen'));
	}

	function testIngredientAlergenFind() {
		$this->IngredientAlergen->recursive = -1;
		$results = $this->IngredientAlergen->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('IngredientAlergen' => array(
			'id'  => 1,
			'ingredient_id'  => 1,
			'date'  => '2009-06-18',
			'created'  => '2009-06-18 15:13:03',
			'modified'  => '2009-06-18 15:13:03',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'data'  => 'Lorem ipsum dolor sit amet',
			'erealeGluten'  => 1,
			'crustacee'  => 1,
			'oua'  => 1,
			'peste'  => 1,
			'alune'  => 1,
			'soia'  => 1,
			'lapte'  => 1,
			'nuci'  => 1,
			'telina'  => 1,
			'mustar'  => 1,
			'susan'  => 1,
			'dioxidSulf'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>