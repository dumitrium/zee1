<?php 
/* SVN FILE: $Id$ */
/* ProductAlergen Fixture generated on: 2009-08-20 16:08:22 : 1250774542*/

class ProductAlergenFixture extends CakeTestFixture {
	var $name = 'ProductAlergen';
	var $table = 'product_alergens';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'product_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'index'),
		'date' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modificare' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'data' => array('type'=>'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'erealeGluten' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'crustacee' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'oua' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'peste' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'alune' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'soia' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'lapte' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'nuci' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'telina' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'mustar' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'susan' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'dioxidSulf' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'PRODUS_ID' => array('column' => 'product_id', 'unique' => 0), 'product_id' => array('column' => 'product_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'product_id'  => 1,
		'date'  => '2009-08-20',
		'created'  => '2009-08-20 16:22:22',
		'modified'  => '2009-08-20 16:22:22',
		'modificare'  => 'Lorem ipsum dolor sit amet',
		'data'  => 'Lorem ipsum dolor sit amet',
		'erealeGluten'  => 1,
		'crustacee'  => 1,
		'oua'  => 1,
		'peste'  => 1,
		'alune'  => 1,
		'soia'  => 1,
		'lapte'  => 1,
		'nuci'  => 1,
		'telina'  => 1,
		'mustar'  => 1,
		'susan'  => 1,
		'dioxidSulf'  => 1
	));
}
?>