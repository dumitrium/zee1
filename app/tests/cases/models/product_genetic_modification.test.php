<?php 
/* SVN FILE: $Id$ */
/* ProductGeneticModification Test cases generated on: 2009-07-27 15:07:22 : 1248697822*/
App::import('Model', 'ProductGeneticModification');

class ProductGeneticModificationTestCase extends CakeTestCase {
	var $ProductGeneticModification = null;
	var $fixtures = array('app.product_genetic_modification', 'app.product');

	function startTest() {
		$this->ProductGeneticModification =& ClassRegistry::init('ProductGeneticModification');
	}

	function testProductGeneticModificationInstance() {
		$this->assertTrue(is_a($this->ProductGeneticModification, 'ProductGeneticModification'));
	}

	function testProductGeneticModificationFind() {
		$this->ProductGeneticModification->recursive = -1;
		$results = $this->ProductGeneticModification->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ProductGeneticModification' => array(
			'id'  => 1,
			'product_id'  => 1,
			'date'  => '2009-07-27',
			'created'  => '2009-07-27 15:30:22',
			'modified'  => '2009-07-27 15:30:22',
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