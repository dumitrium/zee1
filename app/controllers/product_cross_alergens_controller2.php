<?php
class ProductCrossAlergensController extends AppController {

	var $name = 'ProductCrossAlergens';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
           );
	
	function index() {
		$this->pageTitle= 'Zee 1.0 - Alergeni cross contaminare - proces Zeelandia';
		$this->ProductCrossAlergen->recursive = 0;
		$this->set('productCrossAlergens', $this->paginate());
	}

	function view($prod= null,$id = null) {
		if (!$id) {
		$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introdusi alergenii cross contaminare ai acestui produs!', true));
		}else{
			$this->set('productCrossAlergen', $this->ProductCrossAlergen->read(null, $id));
	$this->set('id', $id);
		}
		$this->set('prod', $prod);
		
		
	}

	function add($prod=null) {
		if (!empty($this->data)) {
			$this->ProductCrossAlergen->create();
			if ($this->ProductCrossAlergen->save($this->data)) {
				$this->Session->setFlash(__('Alergenii cross contaminare ai produsului au fost salvati', true));
			$this->redirect(array('controller'=>'product_retetas','action'=>'alergeni',$this->data['ProductCrossAlergen']['product_id']));
			} else {
				$this->Session->setFlash(__('Alergenii cross contaminare ai produslui nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		$products = $this->ProductCrossAlergen->Product->find('list');
		$this->set(compact('products'));
		$this->set('prod', $prod);
	}

	function edit($prod=null, $id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('ProductCrossAlergen incorect', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductCrossAlergen->save($this->data)) {
				$this->Session->setFlash(__('Alergenii cross contaminare ai produsului au fost salvati', true));
				$this->redirect(array('controller'=>'product_retetas','action'=>'alergeni',$this->data['ProductCrossAlergen']['product_id']));
			} else {
				$this->Session->setFlash(__('Alergenii cross contaminare ai produslui nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductCrossAlergen->read(null, $id);
		}
		$products = $this->ProductCrossAlergen->Product->find('list');
		$this->set(compact('products'));
		$this->set('prod', $prod);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('ProductCrossAlergen incorect', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductCrossAlergen->del($id)) {
			$this->Session->setFlash(__('Alergenii cross contaminare ai produslui au fost stersi', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	

}
?>