<?php 
/* SVN FILE: $Id$ */
/* ProductNutrity Fixture generated on: 2009-08-04 22:08:57 : 1249415697*/

class ProductNutrityFixture extends CakeTestFixture {
	var $name = 'ProductNutrity';
	var $table = 'product_nutrities';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'product_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'date' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modificare' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'valKj' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'valKcal' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'proteine' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'proteineVegetale' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'proteineAnimale' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'carbohidrati' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'carboxidratiZahar' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'carbohidratiPolioli' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'carbohidratiAmidon' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'grasimi' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'grasimiSaturate' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'grasimiMonoNesaturate' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'grasimiPoliNesaturate' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'grasimiPoliNesaturateVegetale' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'grasimiPoliNesaturateAnimale' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'fibredietetice' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'minerale' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'mineraleSodiu' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'umiditate' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'alcool' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,4'),
		'aux1' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'aux2' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'aux3' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ID' => array('column' => 'id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>