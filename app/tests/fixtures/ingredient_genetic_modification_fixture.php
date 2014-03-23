<?php 
/* SVN FILE: $Id$ */
/* IngredientGeneticModification Fixture generated on: 2009-06-18 15:06:37 : 1245327217*/

class IngredientGeneticModificationFixture extends CakeTestFixture {
	var $name = 'IngredientGeneticModification';
	var $table = 'ingredient_genetic_modifications';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'ingredient_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'index'),
		'date' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modificare' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'nrProdus' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 8),
		'denumire' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'ultimaModificare' => array('type'=>'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'sursa' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'ingredient' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'origineMg' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'faraOrigine' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'sursaBotanica' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'taraOrgine' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'observatii' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'product_id' => array('column' => 'ingredient_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'ingredient_id'  => 1,
		'date'  => '2009-06-18',
		'created'  => '2009-06-18 15:13:37',
		'modified'  => '2009-06-18 15:13:37',
		'modificare'  => 'Lorem ipsum dolor sit amet',
		'nrProdus'  => 1,
		'denumire'  => 'Lorem ipsum dolor sit amet',
		'ultimaModificare'  => 'Lorem ipsum dolor sit amet',
		'sursa'  => 'Lorem ipsum dolor sit amet',
		'ingredient'  => 'Lorem ipsum dolor sit amet',
		'origineMg'  => 'Lorem ipsum dolor sit amet',
		'faraOrigine'  => 'Lorem ipsum dolor sit amet',
		'sursaBotanica'  => 'Lorem ipsum dolor sit amet',
		'taraOrgine'  => 'Lorem ipsum dolor sit amet',
		'observatii'  => 'Lorem ipsum dolor sit amet'
	));
}
?>