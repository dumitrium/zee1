<?php
class ProductAlergensController extends AppController {

	var $name = 'ProductAlergens';
	var $helpers = array('Html', 'Form');

	function index($prod=null) {
		//$this->ProductAlergen->recursive = 0;
		//$this->set('productAlergens', $this->paginate());

		
		
	}

	function view($prod = null,$id=null) {
		if (!$id) {
		$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introdusi agentii alergeni pentru acest produs!', true));
		}
		//$this->set('productAlergen', $this->ProductAlergen->read(null, $id));
	/*
		$productRetetas=$this->ProductReteta->find('list',array(
			'conditions'=>array('product_id'=>$prod),
				'fields'=>array('ingredient_id')));
		$this->set(compact('products', 'ingredients','productRetetas'));
		
		
		
		

		
		$this->set('id', $id);
		
	}
/*
	function add() {
		if (!empty($this->data)) {
			$this->ProductAlergen->create();
			if ($this->ProductAlergen->save($this->data)) {
				$this->Session->setFlash(__('The ProductAlergen has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductAlergen could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductAlergen->Product->find('list');
		$this->set(compact('products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductAlergen', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductAlergen->save($this->data)) {
				$this->Session->setFlash(__('The ProductAlergen has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductAlergen could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductAlergen->read(null, $id);
		}
		$products = $this->ProductAlergen->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductAlergen', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductAlergen->del($id)) {
			$this->Session->setFlash(__('ProductAlergen deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
*/
}
?>