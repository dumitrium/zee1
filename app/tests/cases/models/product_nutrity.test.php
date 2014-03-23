<?php 
/* SVN FILE: $Id$ */
/* ProductNutrity Test cases generated on: 2009-08-04 22:08:00 : 1249415700*/
App::import('Model', 'ProductNutrity');

class ProductNutrityTestCase extends CakeTestCase {
	var $ProductNutrity = null;
	var $fixtures = array('app.product_nutrity', 'app.product');

	function startTest() {
		$this->ProductNutrity =& ClassRegistry::init('ProductNutrity');
	}

	function testProductNutrityInstance() {
		$this->assertTrue(is_a($this->ProductNutrity, 'ProductNutrity'));
	}

	function testProductNutrityFind() {
		$this->ProductNutrity->recursive = -1;
		$results = $this->ProductNutrity->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ProductNutrity' => array(
			'id'  => 1,
			'product_id'  => 1,
			'date'  => '2009-08-04',
			'created'  => '2009-08-04 22:54:57',
			'modified'  => '2009-08-04 22:54:57',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'valKj'  => 'Lorem ipsum dolor sit amet',
			'valKcal'  => 'Lorem ipsum dolor sit amet',
			'proteine'  => 'Lorem ipsum dolor sit amet',
			'proteineVegetale'  => 'Lorem ipsum dolor sit amet',
			'proteineAnimale'  => 'Lorem ipsum dolor sit amet',
			'carbohidrati'  => 'Lorem ipsum dolor sit amet',
			'carboxidratiZahar'  => 'Lorem ipsum dolor sit amet',
			'carbohidratiPolioli'  => 'Lorem ipsum dolor sit amet',
			'carbohidratiAmidon'  => 'Lorem ipsum dolor sit amet',
			'grasimi'  => 'Lorem ipsum dolor sit amet',
			'grasimiSaturate'  => 'Lorem ipsum dolor sit amet',
			'grasimiMonoNesaturate'  => 'Lorem ipsum dolor sit amet',
			'grasimiPoliNesaturate'  => 'Lorem ipsum dolor sit amet',
			'grasimiPoliNesaturateVegetale'  => 'Lorem ipsum dolor sit amet',
			'grasimiPoliNesaturateAnimale'  => 'Lorem ipsum dolor sit amet',
			'fibredietetice'  => 'Lorem ipsum dolor sit amet',
			'minerale'  => 'Lorem ipsum dolor sit amet',
			'mineraleSodiu'  => 'Lorem ipsum dolor sit amet',
			'umiditate'  => 'Lorem ipsum dolor sit amet',
			'alcool'  => 'Lorem ipsum dolor sit amet',
			'aux1'  => 'Lorem ipsum dolor sit amet',
			'aux2'  => 'Lorem ipsum dolor sit amet',
			'aux3'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>