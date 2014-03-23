<?php
class IngredientCompsController extends AppController {

	var $name = 'IngredientComps';
	var $permissions = array( 
        'view' => '*',
        'view_pdf' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
           );
	

/*	function index() {
		$this->IngredientComp->recursive = 0;
		$this->set('ingredientComps', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IngredientComp.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ingredintComp', $this->IngredientComp->read(null, $id));
	}*/

	function add($ingred=null) {
		if (!empty($this->data)) {
			$this->IngredientComp->create();
			if ($this->IngredientComp->save($this->data)) {
				$this->Session->setFlash(__('Subingredientul a fost adaugat', true));
				$this->redirect(array('controller'=> 'ingredient_comps', 'action'=>'add',$this->data['IngredientComp']['ingredient_id']));
			} else {
				$this->Session->setFlash(__('Subingredientul nu a putut fi adaugat. Incearca din nou.', true));
			}
		}
		$ingredients = $this->IngredientComp->Ingredient->find('list',array('order'=>'Ingredient.name ASC'));
		$this->ProductReteta->recursive = 0;
		$this->set(compact('ingredients'));
		
		
				
				$this->set('ingredientComps',$this->IngredientComp->query("SELECT IngredientComp.id, IngredientComp.ingredient_id, IngredientComp.ingred_id, IngredientComp.procent, IngredientComp.functia, IngredientComp.eticheta, IngredientComp.faranume, Ingredient.id, Ingredient.name, Ingredient.tip FROM ingredient_comps AS IngredientComp LEFT JOIN ingredients AS Ingredient ON (IngredientComp.ingred_id = Ingredient.id) WHERE IngredientComp.ingredient_id = ".$ingred." ORDER BY IngredientComp.procent DESC "));
			//	$this->set('ingred', $ingred);
	$this->set('ingred', $ingred);
	$ingr = $this->IngredientComp->Ingredient->read(null, $ingred);
	$this->set('ingr',$ingr);
		
	
	
	
	
	
	
		
		}

	function edit($ingred=null, $id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('action'=>'add'));
		}
		if (!empty($this->data)) {
			if ($this->IngredientComp->save($this->data)) {
				$this->Session->setFlash(__('Subingredientul a fost salvat', true));
				$this->redirect(array('controller'=> 'ingredient_comps', 'action'=>'add',$this->data['IngredientComp']['ingredient_id']));
			} else {
				$this->Session->setFlash(__('Subingredientul nu a putut fi salvat.Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data=$this->IngredientComp->read(null, $id);
		}
		$ingredients = $this->IngredientComp->Ingredient->find('list');
		$ingr = $this->IngredientComp->read(null, $ingred);
		$this->set(compact('ingredients'));
		$this->set('ingred', $ingred);
		$ingr = $this->IngredientComp->read(null, $ingred);
	$this->set('ingr',$ingr);
	}

	function delete($ingred=null,$id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IngredintComp', true));
			$this->redirect(array('controller'=> 'ingredient_comps', 'action'=>'add',$ingred));
		}
		if ($this->IngredientComp->del($id)) {
			$this->Session->setFlash(__('IngredintComp deleted', true));
			$this->redirect(array('controller'=> 'ingredient_comps', 'action'=>'add',$ingred));
		}
	$this->set('ingred', $ingred);
		
	}

function view_pdf($ingred = null)
	    { 
       
   	$this->set('ingredientComps',$this->IngredientComp->query("SELECT IngredientComp.id, IngredientComp.ingredient_id, IngredientComp.ingred_id, IngredientComp.procent, IngredientComp.functia, IngredientComp.faranume, IngredientComp.eticheta, Ingredient.id, Ingredient.name, Ingredient.created, Ingredient.cod, Ingredient.tip FROM ingredient_comps AS IngredientComp LEFT JOIN ingredients AS Ingredient ON (IngredientComp.ingred_id = Ingredient.id) WHERE IngredientComp.ingredient_id = ".$ingred." ORDER BY IngredientComp.procent DESC "));
			//	$this->set('ingred', $ingred);
	$this->set('ingred', $ingred);
	$ingr = $this->IngredientComp->Ingredient->read(null, $ingred);
	$this->set('ingr',$ingr);
       Configure::write('debug',0); // Otherwise we cannot use this method while developing

       $ingred = intval($ingred);

        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }





}
?>