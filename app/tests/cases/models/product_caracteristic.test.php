<?php 
/* SVN FILE: $Id$ */
/* ProductCaracteristic Test cases generated on: 2009-08-04 22:08:21 : 1249415721*/
App::import('Model', 'ProductCaracteristic');

class ProductCaracteristicTestCase extends CakeTestCase {
	var $ProductCaracteristic = null;
	var $fixtures = array('app.product_caracteristic', 'app.product');

	function startTest() {
		$this->ProductCaracteristic =& ClassRegistry::init('ProductCaracteristic');
	}

	function testProductCaracteristicInstance() {
		$this->assertTrue(is_a($this->ProductCaracteristic, 'ProductCaracteristic'));
	}

	function testProductCaracteristicFind() {
		$this->ProductCaracteristic->recursive = -1;
		$results = $this->ProductCaracteristic->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ProductCaracteristic' => array(
			'id'  => 1,
			'product_id'  => 1,
			'date'  => '2009-08-04',
			'created'  => '2009-08-04 22:55:20',
			'modified'  => '2009-08-04 22:55:20',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'aspect'  => 'Lorem ipsum dolor sit amet',
			'culoare'  => 'Lorem ipsum dolor sit amet',
			'miros'  => 'Lorem ipsum dolor sit amet',
			'gust'  => 'Lorem ipsum dolor sit amet',
			'brix'  => 'Lorem ipsum dolor sit amet',
			'vascozitate'  => 'Lorem ipsum dolor sit amet',
			'ph'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>