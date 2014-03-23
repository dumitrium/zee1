<?php 
/* SVN FILE: $Id$ */
/* IngredientStandard Test cases generated on: 2009-06-29 20:06:08 : 1246295828*/
App::import('Model', 'IngredientStandard');

class IngredientStandardTestCase extends CakeTestCase {
	var $IngredientStandard = null;
	var $fixtures = array('app.ingredient_standard', 'app.ingredient');

	function startTest() {
		$this->IngredientStandard =& ClassRegistry::init('IngredientStandard');
	}

	function testIngredientStandardInstance() {
		$this->assertTrue(is_a($this->IngredientStandard, 'IngredientStandard'));
	}

	function testIngredientStandardFind() {
		$this->IngredientStandard->recursive = -1;
		$results = $this->IngredientStandard->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('IngredientStandard' => array(
			'id'  => 1,
			'ingredient_id'  => 1,
			'date'  => '2009-06-29',
			'created'  => '2009-06-29 20:17:06',
			'modified'  => '2009-06-29 20:17:06',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'nrGermeni'  => 'Lorem ipsum dolor sit amet',
			'nrGermeniViz'  => 'Lorem ipsum dolor sit amet',
			'nrGermeniResp'  => 'Lorem ipsum dolor sit amet',
			'drojdiiViz'  => 'Lorem ipsum dolor sit amet',
			'drojdiiResp'  => 'Lorem ipsum dolor sit amet',
			'mucegaiViz'  => 'Lorem ipsum dolor sit amet',
			'mucegaiResp'  => 'Lorem ipsum dolor sit amet',
			'staphylococusViz'  => 'Lorem ipsum dolor sit amet',
			'staphylococusResp'  => 'Lorem ipsum dolor sit amet',
			'salmonellaViz'  => 'Lorem ipsum dolor sit amet',
			'salmonellaResp'  => 'Lorem ipsum dolor sit amet',
			'listeriaViz'  => 'Lorem ipsum dolor sit amet',
			'listeriaResp'  => 'Lorem ipsum dolor sit amet',
			'bacillusViz'  => 'Lorem ipsum dolor sit amet',
			'bacillusResp'  => 'Lorem ipsum dolor sit amet',
			'nustiuViz'  => 'Lorem ipsum dolor sit amet',
			'nustiuResp'  => 'Lorem ipsum dolor sit amet',
			'aux1Viz'  => 'Lorem ipsum dolor sit amet',
			'aux1Resp'  => 'Lorem ipsum dolor sit amet',
			'pb'  => 'Lorem ipsum dolor sit amet',
			'hg'  => 'Lorem ipsum dolor sit amet',
			'as'  => 'Lorem ipsum dolor sit amet',
			'zn'  => 'Lorem ipsum dolor sit amet',
			'cu'  => 'Lorem ipsum dolor sit amet',
			'valabilitateViz'  => 'Lorem ipsum dolor sit amet',
			'valabilitateResp'  => 'Lorem ipsum dolor sit amet',
			'dataVerificare'  => 'Lorem ipsum dolor sit amet',
			'aux1'  => 'Lorem ipsum dolor sit amet',
			'aux2'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>