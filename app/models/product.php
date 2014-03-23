<?php
class Product extends AppModel {

	var $name = 'Product';
	var $actsAs = array('Logable' => array(
		'userModel' => 'User', 
		'userKey' => 'user_id', 
		'change' => 'full', // options are 'list' or 'full'
		'description_ids' => FALSE // options are TRUE or FALSE
	));
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	
		
	var $belongsTo = array(
		'Line' => array(
			'className' => 'line',
			'foreignKey' => 'line_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
	
	var $hasOne = array(
		'ProductAlergen' => array(
			'className' => 'ProductAlergen',
			'foreignKey' => 'product_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
		'ProductCaracteristic' => array(
			'className' => 'ProductCaracteristic',
			'foreignKey' => 'product_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProductGeneticModification' => array(
			'className' => 'ProductGeneticModification',
			'foreignKey' => 'product_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProductStandard' => array(
			'className' => 'ProductStandard',
			'foreignKey' => 'product_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProductNutritional' => array(
			'className' => 'ProductNutritional',
			'foreignKey' => 'product_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		));
		
		
		var $hasMany = array(
		'ProductReteta' => array(
			'className' => 'ProductReteta',
			'foreignKey' => 'product_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
				)
	);

	var $hasAndBelongsToMany = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'joinTable' => 'ingredients_users',
			'foreignKey' => 'user_id',
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
		),
		'User' => array(
			'className' => 'User',
			'joinTable' => 'products_users',
			'foreignKey' => 'product_id',
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