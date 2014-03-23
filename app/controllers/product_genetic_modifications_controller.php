<?php
class ProductGeneticModificationsController extends AppController {

	var $name = 'ProductGeneticModifications';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ProductGeneticModification->recursive = 0;
		$this->set('productGeneticModifications', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introduse modificarile genetice pentru acest produs!', true));
		}
		$this->set('productGeneticModification', $this->ProductGeneticModification->read(null, $id));
	$this->set('id', $id);
		
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductGeneticModification->create();
			if ($this->ProductGeneticModification->save($this->data)) {
				$this->Session->setFlash(__('The ProductGeneticModification has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductGeneticModification could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductGeneticModification->Product->find('list');
		$this->set(compact('products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductGeneticModification', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductGeneticModification->save($this->data)) {
				$this->Session->setFlash(__('The ProductGeneticModification has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductGeneticModification could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductGeneticModification->read(null, $id);
		}
		$products = $this->ProductGeneticModification->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductGeneticModification', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductGeneticModification->del($id)) {
			$this->Session->setFlash(__('ProductGeneticModification deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>