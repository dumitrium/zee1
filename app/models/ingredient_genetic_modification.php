<?php
class IngredientGeneticModification extends AppModel {

	var $name = 'IngredientGeneticModification';
var $actsAs = array('Logable' => array(
		'userModel' => 'User', 
		'userKey' => 'user_id', 
		'change' => 'full', // options are 'list' or 'full'
		'description_ids' => FALSE, // options are TRUE or FALSE
	'foreignKey'=>'ingredient_id',
	'tip'=>'ingredient'
		));
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'foreignKey' => 'ingredient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>