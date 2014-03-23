<?php
class ProductsController extends AppController {

	var $name = 'Products';
	//var $uses = array('Ingredient'); 
var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
	        'delete' => array('admin','laborator'),
	        'view_pdf'=>'*');
	        
	        


	function index() {
	$this->Redirect->urlToNamed();
		$conditions = $this->searchConditionsProducts($this->params);
		if($this->Auth->user('id'))
		{$this->data['Product']['user_id']=$this->Auth->user('id');
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate('Product', $conditions));}
		$this->set('classPL',"1");

	
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Product.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Product->recursive = 2;
		
		$this->set('product', $this->Product->read(null, $id));
		
	}

	function add() {
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The Product has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Product could not be saved. Please, try again.', true));
			}
		}
		//$ingredients = $this->Ingredient->find('list');
		$users = $this->Product->User->find('list');
		$users = $this->Product->User->find('list');
		$this->set(compact('users', 'users'));
		$this->set('classPA',"1");
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Product', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The Product has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		//$ingredients = $this->Product->Ingredient->find('list');
		//$users = $this->Product->User->find('list');
		//$users = $this->Product->User->find('list');
		//$this->set(compact('ingredients','users','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->del($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

 function view_pdf($id = null)
	    { 
        if (!$id)
        {
            $this->Session->setFlash('Sorry, there was no property ID submitted.');
            $this->redirect(array('action'=>'index'), null, true);
        }
      $this->set('product', $this->Product->read(null, $id));
	   $this->set('productRetetas', $this->Product->ProductReteta->find('all',
			array(
			'conditions'=>array('ProductReteta.product_id'=>$id),
			'recursive'=>2,	
			'order'=>'ProductReteta.procent DESC'
				
			)
				)	);
	$this->set('id', $id);
       Configure::write('debug',0); // Otherwise we cannot use this method while developing

       $id = intval($id);
	  
	    
//$this->set('property', $this->view($id));
     //   $property = $this->__view($id); // here the data is pulled from the database and set for the view

    /*    if (empty($property))
        {
            $this->Session->setFlash('Sorry, there is no property with the submitted ID.');
            $this->redirect(array('action'=>'index'), null, true);
        }*/

        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }
	

}
?>