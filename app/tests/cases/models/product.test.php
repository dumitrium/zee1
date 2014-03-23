<?php 
/* SVN FILE: $Id$ */
/* Product Test cases generated on: 2009-06-12 22:06:09 : 1244834169*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $Product = null;
	var $fixtures = array('app.product', 'app.user', 'app.product_alergen', 'app.product_caracteristic', 'app.product_genetic_modification', 'app.product_standard');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function testProductInstance() {
		$this->assertTrue(is_a($this->Product, 'Product'));
	}

	function testProductFind() {
		$this->Product->recursive = -1;
		$results = $this->Product->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Product' => array(
			'id'  => 1,
			'user_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'date'  => '2009-06-12',
			'created'  => '2009-06-12 22:16:09',
			'modified'  => '2009-06-12 22:16:09',
			'modificare'  => 'Lorem ipsum dolor sit amet',
			'furnizor'  => 'Lorem ipsum dolor sit amet',
			'producator'  => 'Lorem ipsum dolor sit amet',
			'taraOrigine'  => 'Lorem ipsum dolor sit amet',
			'grupaProdusului'  => 'Lorem ipsum dolor sit amet',
			'descriere'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'posibileAplicatii'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'stadiulAutorizarii'  => 1,
			'observatii'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		));
		$this->assertEqual($results, $expected);
	}
}
?>