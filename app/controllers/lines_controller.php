<?php
class LinesController extends AppController {

	var $name = 'Lines';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
           );
	
	function index() {
		$this->pageTitle= 'Zee 1.0 - Alergeni cross contaminare - proces Zeelandia';
		$this->Line->recursive = 0;
		$this->set('Lines', $this->paginate());
	}

	function view($linie= null,$id = null) {
		if (!$id) {
		$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introdusi alergenii cross contaminare pentru aceasta linie de productie!', true));
		}else{
			$this->set('Line', $this->Line->read(null, $id));
	$this->set('id', $id);
		}
		$this->set('linie', $linie);
		
		
	}

	function add($linie=null) {
		if (!empty($this->data)) {
			$this->Line->create();
			if ($this->Line->save($this->data)) {
				$this->Session->setFlash(__('Alergenii cross contaminare pentru aceasta linie de productie au fost salvati', true));
			$this->redirect(array('controller'=>'product_retetas','action'=>'alergeni',$this->data['Line']['liniaProd']));
			} else {
				$this->Session->setFlash(__('Alergenii cross contaminare ai acestei linii de productie nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		$linii = $this->Line->Product->find('list');
		$this->set(compact('linii'));
		$this->set('linie', $linie);
	}

	function edit($id = null) {
			if (!empty($this->data)) {
			if ($this->Line->save($this->data)) {
				$this->Session->setFlash(__('Alergenii cross contaminare pentru aceasta linie de productie au fost salvati', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('Alergenii cross contaminare ai acestei linii de productie nu au putut fi salvati. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Line->read(null, $id);
		}
		
	}
	
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Line incorect', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Line->del($id)) {
			$this->Session->setFlash(__('Alergenii cross contaminare ai acestei linii au fost stersi', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	

}
?>