<?php
class IngredientStandardsController extends AppController {

	var $name = 'IngredientStandards';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
	           );
	
	function index() {
		$this->pageTitle= 'Zee - Standarde Microbiologice';
		$this->IngredientStandard->recursive = 0;
		$this->set('ingredientStandards', $this->paginate());
	}

	function view($ingred=null, $id = null) {
		$this->pageTitle= 'Zee 1.0 - Vizualizare Standarde Microbiologice';
		if (!$id) {
			$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introduse standardele acestui ingredient!', true));
			//$this->redirect(array('action'=>'index'));
		}else{
			$this->set('ingredientStandard', $this->IngredientStandard->read(null, $id));
	$this->set('id', $id);
		
		}
		$this->set('ingred', $ingred);
		
	}



	function add($ingred=null) {
		$this->pageTitle= 'Zee 1.0 - Adaugare Standarde Microbiologice';
		if (!empty($this->data)) {
			$this->IngredientStandard->create();
			if ($this->IngredientStandard->save($this->data)) {
				$this->Session->setFlash(__('Standardele Microbiologice ale ingredientului au fost salvate', true));
				$this->redirect(array('controller'=>'ingredients','action'=>'view',$this->data['IngredientStandard']['ingredient_id']));
			} else {
				$this->Session->setFlash(__('Standardele Microbiologice nu au putut fi salvate.Incearca din nou..', true));
			}
		}
		$ingredients = $this->IngredientStandard->Ingredient->find('list');
		$this->set(compact('ingredients'));
		$this->set('ingred', $ingred);
	}

	function edit($ingred=null,$id = null) {
		$this->pageTitle= 'Zee 1.0 - Editare Standarde Microbiologice';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina Incorecta', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		
		if (!empty($this->data)) {
			if ($this->IngredientStandard->save($this->data)) {
				$this->Session->setFlash(__('Standardele Microbiologice au fost salvate', true));
				$this->redirect(array('controller'=>'ingredient_standards','action'=>'view',$this->data['IngredientStandard']['ingredient_id'],$this->data['IngredientStandard']['id']));
			} else {
				$this->Session->setFlash(__('Standardele nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IngredientStandard->read(null, $id);
		}
		$ingredients = $this->IngredientStandard->Ingredient->find('list');
		$this->set(compact('ingredients'));
		$this->set('ingred', $ingred);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('ID Invalid', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		if ($this->IngredientStandard->del($id)) {
			$this->Session->setFlash(__('Standardele Microbiologice ale ingredientului au fost sterse', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
	}

}
?>