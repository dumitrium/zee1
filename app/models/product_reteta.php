<?php
class ProductReteta extends AppModel {

	var $name = 'ProductReteta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ingredient' => array(
			'className' => 'Ingredient',
			'foreignKey' => 'ingredient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
				
	));
	var $actsAs = array('Logable' => array(
		'userModel' => 'User', 
		'userKey' => 'user_id', 
		'change' => 'full', // options are 'list' or 'full'
		'description_ids' => FALSE, // options are TRUE or FALSE
	'foreignKey'=>'product_id'));
/*var $hasAndBelongsToMany = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'joinTable' => 'product_retetas',
			'foreignKey' => 'id',
			'associationForeignKey' => 'ingredient_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		));

/*var $belongsTo = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'foreignKey' => 'ingredient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
			);*/


	/*var $hasMany  = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'foreignKey' => 'ingredient_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
				));
				
				
				
				/*
		'IngredientAlergen' => array(
			'className' => 'IngredientAlergen',
			'foreignKey' => 'ingredient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
			);*/




}
?>