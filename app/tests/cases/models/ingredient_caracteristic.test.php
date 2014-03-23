<?php 
/* SVN FILE: $Id$ */
/* IngredientCaracteristic Test cases generated on: 2009-06-18 15:06:22 : 1245327202*/
App::import('Model', 'IngredientCaracteristic');

class IngredientCaracteristicTestCase extends CakeTestCase {
	var $IngredientCaracteristic = null;
	var $fixtures = array('app.ingredient_caracteristic', 'app.ingredient');

	function startTest() {
		$this->IngredientCaracteristic =& ClassRegistry::init('IngredientCaracteristic');
	}

	function testIngredientCaracteristicInstance() {
		$this->assertTrue(is_a($this->IngredientCaracteristic, 'IngredientCaracteristic'));
	}

	function testIngredientCaracteristicFind() {
		$this->IngredientCaracteristic->recursive = -1;
		$results = $this->IngredientCaracteristic->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('IngredientCaracteristic' => array(
			'id'  => 1,
			'ingredient_id'  => 1,
			'date'  => '2009-06-18',
			'created'  => '2009-06-18 15:13:22',
			'modified'  => '2009-06-18 15:13:22',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'aspect'  => 'Lorem ipsum dolor sit amet',
			'culoare'  => 'Lorem ipsum dolor sit amet',
			'miros'  => 'Lorem ipsum dolor sit amet',
			'gust'  => 'Lorem ipsum dolor sit amet',
			'brix'  => 'Lorem ipsum dolor sit amet',
			'vascozitate'  => 'Lorem ipsum dolor sit amet',
			'ph'  => 'Lorem ipsum dolor sit amet',
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