<?php
class IngredientCompsController extends AppController {

	var $name = 'IngredientComps';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IngredientComp->recursive = 0;
		$this->set('ingredientComps', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IngredientComp.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ingredintComp', $this->IngredientComp->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IngredientComp->create();
			if ($this->IngredientComp->save($this->data)) {
				$this->Session->setFlash(__('Subingredientul a fost adaugat', true));
				$this->redirect(array('controller'=> 'ingredient_comps', 'action'=>'add',$this->data['IngredientComp']['ingred_id']));
			} else {
				$this->Session->setFlash(__('Subingredientul nu a putut fi adaugat. Incearca din nou.', true));
			}
		}
		$ingredients = $this->IngredientComp->Ingredient->find('list');
		$this->ProductReteta->recursive = 0;
		$this->set(compact('ingredients'));
		
		$this->set('ingredientComps', $this->IngredientComp->find('all',
			array(
			'conditions'=>array('IngredientComp.ingred_id'=>2),
			'fields'=>array('id',
				'Ingredient.name',
				'Ingredient.id',
				'procent',
				'functia'),
			'order'=>'IngredientComp.procent DESC'
				
			)
				)	);
			//	$this->set('ingred', $ingred);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IngredintComp', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IngredientComp->save($this->data)) {
				$this->Session->setFlash(__('The IngredintComp has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IngredintComp could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IngredientComp->read(null, $id);
		}
		$ingredients = $this->IngredientComp->Ingredient->find('list');
		$this->set(compact('ingredients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IngredintComp', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IngredientComp->del($id)) {
			$this->Session->setFlash(__('IngredintComp deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>