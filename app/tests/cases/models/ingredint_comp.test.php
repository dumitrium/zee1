<?php 
/* SVN FILE: $Id$ */
/* IngredintComp Test cases generated on: 2009-08-22 20:08:04 : 1250961724*/
App::import('Model', 'IngredintComp');

class IngredintCompTestCase extends CakeTestCase {
	var $IngredintComp = null;
	var $fixtures = array('app.ingredint_comp', 'app.ingredient');

	function startTest() {
		$this->IngredintComp =& ClassRegistry::init('IngredintComp');
	}

	function testIngredintCompInstance() {
		$this->assertTrue(is_a($this->IngredintComp, 'IngredintComp'));
	}

	function testIngredintCompFind() {
		$this->IngredintComp->recursive = -1;
		$results = $this->IngredintComp->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('IngredintComp' => array(
			'id'  => 1,
			'ingred_id'  => 1,
			'ingredient_id'  => 1,
			'procent'  => 1,
			'text'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-08-22 20:22:04',
			'modified'  => '2009-08-22 20:22:04'
		));
		$this->assertEqual($results, $expected);
	}
}
?>