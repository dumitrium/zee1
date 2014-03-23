<?php 
/* SVN FILE: $Id$ */
/* ProductCaracteristic Fixture generated on: 2009-08-04 22:08:20 : 1249415720*/

class ProductCaracteristicFixture extends CakeTestFixture {
	var $name = 'ProductCaracteristic';
	var $table = 'product_caracteristics';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'product_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'date' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modificare' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'aspect' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'culoare' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'miros' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'gust' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'brix' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'vascozitate' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'ph' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '4,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ID' => array('column' => 'id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>