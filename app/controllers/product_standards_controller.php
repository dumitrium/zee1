<?php
class ProductStandardsController extends AppController {

	var $name = 'ProductStandards';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
	        'delete' => array('admin','laborator'));
	        
	        
	function index() {
		$this->pageTitle= 'Zee - Standarde Microbiologice';
		$this->ProductStandard->recursive = 0;
		$this->set('productStandards', $this->paginate());
	}

	function view($prod=null, $id = null) {
		$this->pageTitle= 'Zee 1.0 - Vizualizare Standarde Microbiologice';
		if (!$id) {
			$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introduse standardele acestui produs!', true));
			//$this->redirect(array('action'=>'index'));
		}else
			{	$this->set('productStandard', $this->ProductStandard->read(null, $id));
	$this->set('id', $id);}
		$this->set('prod', $prod);
	
		
	}



	function add($prod=null) {
		$this->pageTitle= 'Zee - Adaugare Standarde Microbiologice';
		if (!empty($this->data)) {
			$this->ProductStandard->create();
			if ($this->ProductStandard->save($this->data)) {
				$this->Session->setFlash(__('Standardele Microbiologice ale produsului au fost salvate', true));
				$this->redirect(array('controller'=>'products','action'=>'index'));
			} else {
				$this->Session->setFlash(__('Standardele Microbiologice nu au putut fi salvate.Incearca din nou..', true));
			}
		}
		$products = $this->ProductStandard->Product->find('list');
		$this->set(compact('products'));
		$this->set('prod', $prod);
	}

	function edit($prod=null,$id = null) {
		$this->pageTitle= 'Zee 1.0 - Editare Standarde Microbiologice';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina Incorecta', true));
			$this->redirect(array('action'=>'index'));
		}
		
		if (!empty($this->data)) {
			if ($this->ProductStandard->save($this->data)) {
				$this->Session->setFlash(__('Standardele Microbiologice au fost salvate', true));
				$this->redirect(array('controller'=>'product_standards','action'=>'view',$this->data['ProductStandard']['product_id'],$this->data['ProductStandard']['id']));
			} else {
				$this->Session->setFlash(__('Standardele nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductStandard->read(null, $id);
		}
		$products = $this->ProductStandard->Product->find('list');
		$this->set(compact('products'));
		$this->set('prod', $prod);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('ID Invalid', true));
			$this->redirect(array('controller'=>'products','action'=>'index'));
		}
		if ($this->ProductStandard->del($id)) {
			$this->Session->setFlash(__('Standardele Microbiologice ale produsului au fost sterse', true));
			$this->redirect(array('controller'=>'products','action'=>'index'));
		}
	}

}
?>