<?php 
/* SVN FILE: $Id$ */
/* IngredientAlergen Fixture generated on: 2009-06-18 15:06:03 : 1245327183*/

class IngredientAlergenFixture extends CakeTestFixture {
	var $name = 'IngredientAlergen';
	var $table = 'ingredient_alergens';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'ingredient_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'index'),
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
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'PRODUS_ID' => array('column' => 'ingredient_id', 'unique' => 0), 'product_id' => array('column' => 'ingredient_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'ingredient_id'  => 1,
		'date'  => '2009-06-18',
		'created'  => '2009-06-18 15:13:03',
		'modified'  => '2009-06-18 15:13:03',
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