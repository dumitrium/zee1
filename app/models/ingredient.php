<?php
class Ingredient extends AppModel {

	var $name = 'Ingredient';
	var $actsAs = array('Logable' => array(
		'userModel' => 'User', 
		'userKey' => 'user_id', 
		'change' => 'full', // options are 'list' or 'full'
		'description_ids' => FALSE, // options are TRUE or FALSE
		
		));
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
/*,
		'ProductReteta' => array(
			'className' => 'ProductReteta',
			'foreignKey' => 'ingredient_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
				)*/


	var $hasOne = array(
		'IngredientAlergen' => array(
			'className' => 'IngredientAlergen',
			'foreignKey' => 'ingredient_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
			'IngredientCaracteristic' => array(
			'className' => 'IngredientCaracteristic',
			'foreignKey' => 'ingredient_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'IngredientGeneticModification' => array(
			'className' => 'IngredientGeneticModification',
			'foreignKey' => 'ingredient_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'IngredientStandard' => array(
			'className' => 'IngredientStandard',
			'foreignKey' => 'ingredient_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		
	);

var $hasMany = array(
	'IngredientComp' => array(
			'className' => 'IngredientComp',
			'foreignKey' => 'ingred_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => 'IngredientComp.procent DESC'
				),
		'ProductReteta' => array(
			'className' => 'ProductReteta',
			'foreignKey' => 'ingredient_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
				)
	);


	
	var $hasAndBelongsToMany = array(
			'Product' => array(
			'className' => 'Product',
			'joinTable' => 'products_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'product_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
			'User' => array(
			'className' => 'User',
			'joinTable' => 'ingredients_users',
			'foreignKey' => 'ingredient_id',
			'associationForeignKey' => 'user_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
			);

}
?>