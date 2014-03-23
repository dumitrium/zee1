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
			'foreignKey' => '',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>