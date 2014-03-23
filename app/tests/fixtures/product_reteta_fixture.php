<?php 
/* SVN FILE: $Id$ */
/* ProductReteta Fixture generated on: 2009-08-21 01:08:21 : 1250805621*/

class ProductRetetaFixture extends CakeTestFixture {
	var $name = 'ProductReteta';
	var $table = 'product_retetas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'product_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'ingredient_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'procent' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,2'),
		'text' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 512),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'product_id'  => 1,
		'ingredient_id'  => 1,
		'procent'  => 1,
		'text'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-08-21 01:00:21',
		'modified'  => '2009-08-21 01:00:21'
	));
}
?>