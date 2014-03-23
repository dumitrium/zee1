<?php
class Line extends AppModel {

	var $name = 'Line';
	

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'line_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
				)
	);
	
	var $hasAndBelongsToMany = array(
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
/*var $actsAs = array('Logable' => array(
		'userModel' => 'User', 
		'userKey' => 'user_id', 
		'change' => 'full', // options are 'list' or 'full'
		'description_ids' => FALSE, // options are TRUE or FALSE
	'foreignKey'=>'liniaProd_id'));*/
}
?>