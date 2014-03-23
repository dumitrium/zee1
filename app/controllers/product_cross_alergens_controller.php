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

	function view($linie= null,$id = null) {
		if (!$id) {
		$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introdusi alergenii cross contaminare pentru aceasta linie de productie!', true));
		}else{
			$this->set('productCrossAlergen', $this->ProductCrossAlergen->read(null, $id));
	$this->set('id', $id);
		}
		$this->set('linie', $linie);
		
		
	}

	function add($linie=null) {
		if (!empty($this->data)) {
			$this->ProductCrossAlergen->create();
			if ($this->ProductCrossAlergen->save($this->data)) {
				$this->Session->setFlash(__('Alergenii cross contaminare pentru aceasta linie de productie au fost salvati', true));
			$this->redirect(array('controller'=>'product_retetas','action'=>'alergeni',$this->data['ProductCrossAlergen']['liniaProd']));
			} else {
				$this->Session->setFlash(__('Alergenii cross contaminare ai acestei linii de productie nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		$linii = $this->ProductCrossAlergen->Product->find('list');
		$this->set(compact('linii'));
		$this->set('linie', $linie);
	}

	function edit($id = null) {
			if (!empty($this->data)) {
			if ($this->ProductCrossAlergen->save($this->data)) {
				$this->Session->setFlash(__('Alergenii cross contaminare pentru aceasta linie de productie au fost salvati', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('Alergenii cross contaminare ai acestei linii de productie nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductCrossAlergen->read(null, $id);
		}
		
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