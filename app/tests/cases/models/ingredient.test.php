<?php 
/* SVN FILE: $Id$ */
/* Ingredient Test cases generated on: 2009-06-12 22:06:55 : 1244833435*/
App::import('Model', 'Ingredient');

class IngredientTestCase extends CakeTestCase {
	var $Ingredient = null;
	var $fixtures = array('app.ingredient', 'app.user', 'app.ingredient_alergen', 'app.ingredient_caracteristic', 'app.ingredient_genetic_modification', 'app.ingredient_standard');

	function startTest() {
		$this->Ingredient =& ClassRegistry::init('Ingredient');
	}

	function testIngredientInstance() {
		$this->assertTrue(is_a($this->Ingredient, 'Ingredient'));
	}

	function testIngredientFind() {
		$this->Ingredient->recursive = -1;
		$results = $this->Ingredient->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Ingredient' => array(
			'id'  => 1,
			'user_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'date'  => '2009-06-12',
			'created'  => '2009-06-12 22:03:55',
			'modified'  => '2009-06-12 22:03:55',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'furnizor'  => 'Lorem ipsum dolor sit amet',
			'producator'  => 'Lorem ipsum dolor sit amet',
			'taraOrigine'  => 'Lorem ipsum dolor sit amet',
			'grupaProdusului'  => 'Lorem ipsum dolor sit amet',
			'descriere'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'posibileAplicatii'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'stadiulAutorizarii'  => 1,
			'tip'  => 1,
			'observatii'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		));
		$this->assertEqual($results, $expected);
	}
}
?>