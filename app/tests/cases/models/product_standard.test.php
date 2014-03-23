<?php 
/* SVN FILE: $Id$ */
/* ProductStandard Test cases generated on: 2009-07-27 15:07:43 : 1248697903*/
App::import('Model', 'ProductStandard');

class ProductStandardTestCase extends CakeTestCase {
	var $ProductStandard = null;
	var $fixtures = array('app.product_standard', 'app.product');

	function startTest() {
		$this->ProductStandard =& ClassRegistry::init('ProductStandard');
	}

	function testProductStandardInstance() {
		$this->assertTrue(is_a($this->ProductStandard, 'ProductStandard'));
	}

	function testProductStandardFind() {
		$this->ProductStandard->recursive = -1;
		$results = $this->ProductStandard->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ProductStandard' => array(
			'Id'  => 1,
			'product_id'  => 1,
			'date'  => '2009-07-27',
			'created'  => '2009-07-27 15:31:43',
			'modified'  => '2009-07-27 15:31:43',
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