<?php 
/* SVN FILE: $Id$ */
/* ProductAlergen Test cases generated on: 2009-08-20 16:08:23 : 1250774543*/
App::import('Model', 'ProductAlergen');

class ProductAlergenTestCase extends CakeTestCase {
	var $ProductAlergen = null;
	var $fixtures = array('app.product_alergen', 'app.product', 'app.ingredient_alergen');

	function startTest() {
		$this->ProductAlergen =& ClassRegistry::init('ProductAlergen');
	}

	function testProductAlergenInstance() {
		$this->assertTrue(is_a($this->ProductAlergen, 'ProductAlergen'));
	}

	function testProductAlergenFind() {
		$this->ProductAlergen->recursive = -1;
		$results = $this->ProductAlergen->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ProductAlergen' => array(
			'id'  => 1,
			'product_id'  => 1,
			'date'  => '2009-08-20',
			'created'  => '2009-08-20 16:22:22',
			'modified'  => '2009-08-20 16:22:22',
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