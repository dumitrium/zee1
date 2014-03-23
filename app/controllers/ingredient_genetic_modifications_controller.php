<?php
class IngredientGeneticModificationsController extends AppController {

	var $name = 'IngredientGeneticModifications';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
	           );

	function index() {
		$this->pageTitle= 'Zee 1.0 - Modificari Genetice';
		$this->IngredientGeneticModification->recursive = 0;
		$this->set('ingredientGeneticModifications', $this->paginate());
	}

	function view($ingred=null, $id = null) {
		$this->pageTitle= 'Zee 1.0 - Vizualizeaza Modificari Genetice';
		if (!$id) {
			$this->Session->setFlash(__('PAgina incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introduse modificarile genetice pentru acest ingredient!', true));
			
			//$this->redirect(array('action'=>'index'));
		}else{
			
		$this->set('ingredientGeneticModification', $this->IngredientGeneticModification->read(null, $id));
	$this->set('id', $id);}
	$this->set('ingred', $ingred);
		}

	function add($ingred=null) {
		$this->pageTitle= 'Zee 1.0 - Adauga Modificari Genetice';
		if (!empty($this->data)) {
			$this->IngredientGeneticModification->create();
			if ($this->IngredientGeneticModification->save($this->data)) {
				$this->Session->setFlash(__('Modificarile Genetice au fost salvate', true));
				$this->redirect(array('controller'=>'ingredients','action'=>'view',$this->data['IngredientGeneticModification']['ingredient_id']));
			} else {
				$this->Session->setFlash(__('Modificarile genetice nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		$ingredients = $this->IngredientGeneticModification->Ingredient->find('list');
		$this->set(compact('ingredients'));
		$this->set('ingred', $ingred);
		$ingr = $this->IngredientGeneticModification->Ingredient->read(null, $ingred);
	$this->set('ingr',$ingr);
	}

	function edit($ingred=null,$id = null) {
		$this->pageTitle= 'Zee 1.0 - Editeaza Modificari Genetice';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IngredientGeneticModification->save($this->data)) {
				$this->Session->setFlash(__('Modificarile Genetice au fost salvate.', true));
				$this->redirect(array('controller'=>'ingredient_genetic_modifications','action'=>'view',$this->data['IngredientGeneticModification']['ingredient_id'],$this->data['IngredientGeneticModification']['id']));
			} else {
				$this->Session->setFlash(__('Modificarile genetice nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IngredientGeneticModification->read(null, $id);
		}
		$ingredients = $this->IngredientGeneticModification->Ingredient->find('list');
		$this->set(compact('ingredients'));
		$this->set('ingred', $ingred);
		$ingr = $this->IngredientGeneticModification->Ingredient->read(null, $ingred);
	$this->set('ingr',$ingr);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('ID invalid', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		if ($this->IngredientGeneticModification->del($id)) {
			$this->Session->setFlash(__('Modificarile genetice au fost sterse', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
	}
}

	