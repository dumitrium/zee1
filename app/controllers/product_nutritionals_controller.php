<?php
class ProductNutritionalsController extends AppController {

	var $name = 'ProductNutritionals';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator') 
             );
    

	function index() {
		$this->ProductNutritional->recursive = 0;
		$this->set('productNutritionals', $this->paginate());
	}

	function view($prod=null,$id = null) {
	$this->ProductNutritional->recursive = 0;
			if (!$id) {
			$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introduse valorile nutritive pentru acest produs!', true));
		}
		$this->set('productNutritional', $this->ProductNutritional->read(null, $id));
	$this->set('prod', $prod);
	$this->set('id', $id);	
	}

	function add($prod=null) {
		if (!empty($this->data)) {
			$this->ProductNutritional->create();
			if ($this->ProductNutritional->save($this->data)) {
				$this->Session->setFlash(__('The ProductNutritional has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductNutritional could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductNutritional->Product->find('list');
		$this->set(compact('products'));
	$this->set('prod', $prod);
		
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductNutritional', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductNutritional->save($this->data)) {
				$this->Session->setFlash(__('The ProductNutritional has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductNutritional could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductNutritional->read(null, $id);
		}
		$products = $this->ProductNutritional->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductNutritional', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductNutritional->del($id)) {
			$this->Session->setFlash(__('ProductNutritional deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>