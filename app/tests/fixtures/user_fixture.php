<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2009-06-12 21:06:40 : 1244832940*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $table = 'users';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'login' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index'),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'password' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 46),
		'level' => array('type'=>'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'active' => array('type'=>'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'lastLogin' => array('type'=>'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'registrationDate' => array('type'=>'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('ID' => array('column' => 'id', 'unique' => 0), 'LOGIN' => array('column' => array('login', 'name', 'password'), 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'login'  => 'Lorem ipsum dolor ',
		'name'  => 'Lorem ipsum dolor sit amet',
		'password'  => 'Lorem ipsum dolor sit amet',
		'level'  => 1,
		'active'  => 1,
		'lastLogin'  => 1,
		'registrationDate'  => '2009-06-12 21:55:40'
	));
}
?>