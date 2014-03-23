<?php
class ProductCaracteristicsController extends AppController {

	var $name = 'ProductCaracteristics';
	var $helpers = array('Html', 'Form');
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
        'view_pdf_car'=>'*'
	           );
	           

	function index() {
		$this->ProductCaracteristic->recursive = 0;
		$this->set('productCaracteristics', $this->paginate());
	}

	function view($prod=null, $id = null) {
		if (!$id) {
		$this->Session->setFlash(__('Pagina Incorecta.', true));
			$this->Session->setFlash(__('Deocamdata nu au fost introduse caracteristicile acestui produs!', true));
		}else{
			$this->set('productCaracteristic', $this->ProductCaracteristic->read(null, $id));
	$this->set('id', $id);
		}
		$this->set('prod', $prod);
		
		
	}

	function add($prod=null) {
		if (!empty($this->data)) {
			$this->ProductCaracteristic->create();
			if ($this->ProductCaracteristic->save($this->data)) {
				$this->Session->setFlash(__('Caracteristicile produsului au fost salvate', true));
			$this->redirect(array('controller'=>'products','action'=>'view',$this->data['ProductCaracteristic']['product_id']));
			} else {
				$this->Session->setFlash(__('Caracteristicile produslui nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		$products = $this->ProductCaracteristic->Product->find('list');
		$this->set(compact('products'));
		$this->set('prod', $prod);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductCaracteristic', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductCaracteristic->save($this->data)) {
				$this->Session->setFlash(__('Caracteristicile produsului au fost salvate', true));
				$this->redirect(array('controller'=>'products','action'=>'view',$this->data['ProductCaracteristic']['product_id']));
			} else {
				$this->Session->setFlash(__('Caracteristicile produslui nu au putut fi salvate. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductCaracteristic->read(null, $id);
		}
		$products = $this->ProductCaracteristic->Product->find('list');
		$this->set(compact('products'));
	}
	
	function view_pdf_car($prod = null, $id=null){
 		$this->set('prod', $prod);
       Configure::write('debug',0); // Otherwise we cannot use this method while developing
       $prod = intval($prod);
	$this->set('productCaracteristic', $this->ProductCaracteristic->read(null, $id));
		     $this->set('product', $this->ProductCaracteristic->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	    $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductCaracteristic', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductCaracteristic->del($id)) {
			$this->Session->setFlash(__('ProductCaracteristic deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>