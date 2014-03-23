<?php
class ProductAlergen extends AppModel {

	var $name = 'ProductAlergen';
	var $actsAs = array('Logable' => array(
		'userModel' => 'User', 
		'userKey' => 'user_id', 
		'change' => 'full', // options are 'list' or 'full'
		'description_ids' => FALSE, // options are TRUE or FALSE
	'foreignKey'=>'product_id'));

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
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
	);

}
?>