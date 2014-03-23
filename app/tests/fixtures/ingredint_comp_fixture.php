<?php 
/* SVN FILE: $Id$ */
/* IngredintComp Fixture generated on: 2009-08-22 20:08:04 : 1250961724*/

class IngredintCompFixture extends CakeTestFixture {
	var $name = 'IngredintComp';
	var $table = 'ingredint_comps';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'ingred_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'ingredient_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'procent' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '7,2'),
		'text' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 512),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'ingred_id'  => 1,
		'ingredient_id'  => 1,
		'procent'  => 1,
		'text'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-08-22 20:22:04',
		'modified'  => '2009-08-22 20:22:04'
	));
}
?>