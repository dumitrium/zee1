<?php
class ProductRetetasController extends AppController {

	var $name = 'ProductRetetas';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ProductReteta->recursive = 0;
		$this->set('productRetetas', $this->paginate());
	}

	function view($prod=null,$id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu a fost introdusa reteta acestui produs!', true));
			
		}
		$this->set('prod',$prod);
		$this->set('productReteta', $this->ProductReteta->read(null, $id));
		for($i=1;$i<21;$i++)
			{}}
		$ingredients = $this->ProductReteta->Ingredient->find('list');
	}

	function add($prod=null) {
		if (!empty($this->data)) {
			$this->ProductReteta->create();
			if ($this->ProductReteta->save($this->data)) {
				$this->Session->setFlash(__('Reteta produsului a fost salvata', true));
				$this->redirect(array('controller'=>'products','action'=>'index'));
			} else {
				$this->Session->setFlash(__('Reteta produsului nu a putut fi salvata. Incearca din nou.', true));
			}
		}
		$products = $this->ProductReteta->Product->find('list');
		$ingredients = $this->ProductReteta->Ingredient->find('list');
		$this->set(compact('products', 'ingredients'));
		$this->set('prod',$prod);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductReteta->save($this->data)) {
				$this->Session->setFlash(__('Reteta produsului a fost salvata', true));
				$this->redirect(array('controller'=>'products','action'=>'index'));
			} else {
				$this->Session->setFlash(__('Reteta produsului nu a putut fi salvata. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductReteta->read(null, $id);
		}
		$products = $this->ProductReteta->Product->find('list');
		$ingredients = $this->ProductReteta->Ingredient->find('list');
		$this->set(compact('products','ingredients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductReteta->del($id)) {
			$this->Session->setFlash(__('Reteta produslui a fost stearsa', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>