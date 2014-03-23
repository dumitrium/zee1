<?php
class IngredientCaracteristicsController extends AppController {

	var $name = 'IngredientCaracteristics';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
           );
	

	function index() {
		$this->pageTitle= 'Zee 1.0 - Caracteristici Ingredient';
		$this->IngredientCaracteristic->recursive = 0;
		$this->set('ingredientCaracteristics', $this->paginate());
	}

	function view($ingred=null, $id = null) {
		$this->pageTitle= 'Zee 1.0 - Vizualizare Caracteristici Ingredient';
		if (!$id) {
			$this->Session->setFlash(__('Pagina incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introduse caracteristicile acestui ingredient!', true));
			//$this->redirect(array('action'=>'view'));
		}else{
			$this->set('ingredientCaracteristic', $this->IngredientCaracteristic->read(null, $id));
	    $this->set('id', $id);
		}
		$this->set('ingred', $ingred);
		
		
	}






	function add($ingred=null) {
		$this->pageTitle= 'Zee 1.0 - Adauga Caracteristici Ingredient';
		if (!empty($this->data)) {
			$this->IngredientCaracteristic->create();
			if ($this->IngredientCaracteristic->save($this->data)) {
				$this->Session->setFlash(__('Caracteristicile ingredientului su fost salvate', true));
				$this->redirect(array('controller'=>'ingredients','action'=>'view',$this->data['IngredientCaracteristic']['ingredient_id']));
			} else {
				$this->Session->setFlash(__('Caracteristicile ingredientului nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		$ingredients = $this->IngredientCaracteristic->Ingredient->find('list');
		$this->set(compact('ingredients'));
		$this->set('ingred',$ingred);
	}

	function edit($ingred=null,$id = null) {
		$this->pageTitle= 'Zee 1.0 - Editare Caracteristici Ingredient';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IngredientCaracteristic->save($this->data)) {
				$this->Session->setFlash(__('Caracteristicile ingredientului su fost salvate', true));
				$this->redirect(array('controller'=>'ingredient_caracteristics','action'=>'view',$this->data['IngredientCaracteristic']['ingredient_id'],$this->data['IngredientCaracteristic']['id']));
			} else {
				$this->Session->setFlash(__('Caracteristicile ingredientului nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IngredientCaracteristic->read(null, $id);
		}
		$ingredients = $this->IngredientCaracteristic->Ingredient->find('list');
		$this->set(compact('ingredients'));
		$this->set('ingred',$ingred);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('ID incorect pentru aceasta pagina', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		if ($this->IngredientCaracteristic->del($id)) {
			$this->Session->setFlash(__('Caracteristile ingredientului au fost sterse', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
	}


	

}
?>