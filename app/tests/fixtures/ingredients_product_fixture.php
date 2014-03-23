<?php 
/* SVN FILE: $Id$ */
/* IngredientsProduct Fixture generated on: 2009-09-06 01:09:37 : 1252191217*/

class IngredientsProductFixture extends CakeTestFixture {
	var $name = 'IngredientsProduct';
	var $table = 'ingredients_products';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ingredient_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'product_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'ingredient_id'  => 1,
		'product_id'  => 1
	));
}
?>