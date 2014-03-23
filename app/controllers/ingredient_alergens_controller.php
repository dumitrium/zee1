<?php
class IngredientAlergensController extends AppController {

	var $name = 'IngredientAlergens';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
           );
	
	function index() {
		$this->pageTitle= 'Zee 1.0 - Agenti Alergeni';
		$this->IngredientAlergen->recursive = 0;
		$this->set('ingredientAlergens', $this->paginate());
	}

	function view($ingred= null,$id = null) {
		
		$this->pageTitle= 'Zee 1.0 - Vizualizare Alergeni Ingredient';
		
		if (!$id) {
			$this->Session->setFlash(__('Pagina incorecta!', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introdusi alergenii pentru acest ingredient!', true));}else{
			//$this->redirect(array('action'=>'view'));
		$this->set('ingredientAlergen', $this->IngredientAlergen->read(null, $id));
		$this->set('id', $id);	
		}
		$this->set('ingred', $ingred);
						
	}

	function add($ingred= null) {
		$this->pageTitle= 'Zee 1.0 - Adauga Agenti Alergeni ai ingredientului';
		if (!empty($this->data)) {
			$this->IngredientAlergen->create();
			
			if ($this->IngredientAlergen->save($this->data)) {
				$this->Session->setFlash(__('Agentii alergeni au fost salvati', true));
				//$data1=$this->IngredientAlergen->find('first',array('conditions' => array('IngredientAlergen.ingredient_id' => $ingred)));
				//$this->redirect(array('action'=>'view',$ingred, $data1['id']));
				$this->redirect(array('controller'=>'ingredients','action'=>'view',$this->data['IngredientAlergen']['ingredient_id']));
				
			} else {
				$this->Session->setFlash(__('Agentii alergeni nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		$ingredients = $this->IngredientAlergen->Ingredient->find('list');
		
		$this->set(compact('ingredients'));
		$this->set('ingred',$ingred);
	//$this->set('ingredient', $this->IngredientAlergen->Ingredient->read(null, $ingred));
		
	}

	function edit($ingred=null, $id = null) {
		$this->pageTitle= 'Editare Agenti Alergeni';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		
		if (!empty($this->data)) {
				if ($this->IngredientAlergen->save($this->data)) {
				$this->Session->setFlash(__('Agentii alergeni au gost salvati', true));
				$this->redirect(array('controller'=>'ingredient_alergens', 'action'=>'view',$this->data['IngredientAlergen']['ingredient_id'],$this->data['IngredientAlergen']['id']));
			} else {
				$this->Session->setFlash(__('Agentii alergeni nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			
			$this->data = $this->IngredientAlergen->read(null, $id);
		}
		$ingredients = $this->IngredientAlergen->Ingredient->find('list');
		$this->set(compact('ingredients'));
		$this->set('ingred',$ingred);
	}

	




function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('ID incorect', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
		if ($this->IngredientAlergen->del($id)) {
			$this->Session->setFlash(__('Agentii Alergeni ai ingredientului au fost stersi', true));
			$this->redirect(array('controller'=>'ingredients','action'=>'index'));
		}
	}


	

}
?>