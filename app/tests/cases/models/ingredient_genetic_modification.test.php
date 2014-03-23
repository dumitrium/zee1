<?php 
/* SVN FILE: $Id$ */
/* IngredientGeneticModification Test cases generated on: 2009-06-18 15:06:37 : 1245327217*/
App::import('Model', 'IngredientGeneticModification');

class IngredientGeneticModificationTestCase extends CakeTestCase {
	var $IngredientGeneticModification = null;
	var $fixtures = array('app.ingredient_genetic_modification', 'app.ingredient');

	function startTest() {
		$this->IngredientGeneticModification =& ClassRegistry::init('IngredientGeneticModification');
	}

	function testIngredientGeneticModificationInstance() {
		$this->assertTrue(is_a($this->IngredientGeneticModification, 'IngredientGeneticModification'));
	}

	function testIngredientGeneticModificationFind() {
		$this->IngredientGeneticModification->recursive = -1;
		$results = $this->IngredientGeneticModification->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('IngredientGeneticModification' => array(
			'id'  => 1,
			'ingredient_id'  => 1,
			'date'  => '2009-06-18',
			'created'  => '2009-06-18 15:13:37',
			'modified'  => '2009-06-18 15:13:37',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'nrProdus'  => 1,
			'denumire'  => 'Lorem ipsum dolor sit amet',
			'ultimaModificare'  => 'Lorem ipsum dolor sit amet',
			'sursa'  => 'Lorem ipsum dolor sit amet',
			'ingredient'  => 'Lorem ipsum dolor sit amet',
			'origineMg'  => 'Lorem ipsum dolor sit amet',
			'faraOrigine'  => 'Lorem ipsum dolor sit amet',
			'sursaBotanica'  => 'Lorem ipsum dolor sit amet',
			'taraOrgine'  => 'Lorem ipsum dolor sit amet',
			'observatii'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>