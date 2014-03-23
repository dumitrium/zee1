<?php
class User extends AppModel {

	var $name = 'User';
	var $displayField='username';
    var $validate=array(
					'username'=>array(
					   'rule'=>array('minLenght',1),
					   'required'=>true,
					   'allowEmpty'=>false,
					   'message'=>'Te rog introdu username'
					   ),
					'password'=>array(
						'rule'=>array('minLenght',1),
						'required'=>true,
						'allowEmpty'=>false,
						'message'=>'Introdu parola'
						),
					'passwordSimilar'=>array(
											 'rule'=>'checkPassword',
											 'message'=>'A introdus o parola diferita'),
					'unique'=>array(
						'rule'=>array('checkUnique','username'),
						'message'=>'Username deja existent, incearca un altul')
					);
									  
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Group'=>array(
			'className'=>'Group',
			'foreignKey'=>'group_id'
			)
				);
				
	var $hasMany = array(
			'Log' => array(
			'className' => 'Log',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Line' => array(
			'className' => 'Line',
			'foreignKey' => 'user_id',
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
		)
		
	);
/*function checkUnique($data,$fieldname){
	$valid=false;
	if(isset($fieldName) && $this->hasField($fieldName)){
		$valid=$this->isUnique(array($fieldName=>$data));
	}
	return valid;}
function checkPasswords($data)
{if ($data['password']=$this->data['User']['password2hashed'])
   return true;
   return false;
}*/

}
?>