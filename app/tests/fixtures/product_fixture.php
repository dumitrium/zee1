<?php 
/* SVN FILE: $Id$ */
/* Product Fixture generated on: 2009-06-12 22:06:09 : 1244834169*/

class ProductFixture extends CakeTestFixture {
	var $name = 'Product';
	var $table = 'products';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modificare' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'furnizor' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'producator' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'taraOrigine' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'grupaProdusului' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'descriere' => array('type'=>'text', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'posibileAplicatii' => array('type'=>'text', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'stadiulAutorizarii' => array('type'=>'boolean', 'null' => false, 'default' => NULL),
		'observatii' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ID' => array('column' => array('id', 'name'), 'unique' => 0), 'NAME' => array('column' => array('name', 'furnizor', 'producator', 'taraOrigine', 'grupaProdusului'), 'unique' => 0), 'DESCRIERE' => array('column' => 'descriere', 'unique' => 0), 'POSIBILE_APLICATII' => array('column' => 'posibileAplicatii', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>