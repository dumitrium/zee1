<?php 
/* SVN FILE: $Id$ */
/* ProductReteta Test cases generated on: 2009-08-21 01:08:22 : 1250805622*/
App::import('Model', 'ProductReteta');

class ProductRetetaTestCase extends CakeTestCase {
	var $ProductReteta = null;
	var $fixtures = array('app.product_reteta', 'app.product', 'app.ingredient', 'app.ingredient_alergen');

	function startTest() {
		$this->ProductReteta =& ClassRegistry::init('ProductReteta');
	}

	function testProductRetetaInstance() {
		$this->assertTrue(is_a($this->ProductReteta, 'ProductReteta'));
	}

	function testProductRetetaFind() {
		$this->ProductReteta->recursive = -1;
		$results = $this->ProductReteta->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ProductReteta' => array(
			'id'  => 1,
			'product_id'  => 1,
			'ingredient_id'  => 1,
			'procent'  => 1,
			'text'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-08-21 01:00:21',
			'modified'  => '2009-08-21 01:00:21'
		));
		$this->assertEqual($results, $expected);
	}
}
?>