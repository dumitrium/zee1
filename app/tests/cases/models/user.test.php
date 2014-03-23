<?php 
/* SVN FILE: $Id$ */
/* User Test cases generated on: 2009-06-12 21:06:40 : 1244832940*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $User = null;
	var $fixtures = array('app.user', 'app.ingredient', 'app.log', 'app.product');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function testUserInstance() {
		$this->assertTrue(is_a($this->User, 'User'));
	}

	function testUserFind() {
		$this->User->recursive = -1;
		$results = $this->User->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('User' => array(
			'id'  => 1,
			'login'  => 'Lorem ipsum dolor ',
			'name'  => 'Lorem ipsum dolor sit amet',
			'password'  => 'Lorem ipsum dolor sit amet',
			'level'  => 1,
			'active'  => 1,
			'lastLogin'  => 1,
			'registrationDate'  => '2009-06-12 21:55:40'
		));
		$this->assertEqual($results, $expected);
	}
}
?>