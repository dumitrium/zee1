<?php
class IngredientsController extends AppController {

	var $name = 'Ingredients';
	var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'),
        'view_pdf_gen'=>'*',
        'view_pdf_a'=>'*',
        'view_pdf_car'=>'*',
        'view_pdf_mic'=>'*',
        'view_pdf'=>'*', 
           );
		
	function index() {
		$this->Redirect->urlToNamed();
		$conditions = $this->searchConditions($this->params);
	//	if($this->Auth->user('id'))
	//	{$this->data['Ingredient']['user_id']=$this->Auth->user('id');
		$this->Ingredient->recursive = 0;
		$this->set('ingredients', $this->paginate('Ingredient', $conditions));

$this->set('classIL',"current");

		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ingredient incorect.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ingredient', $this->Ingredient->read(null, $id));
	$this->set('id', $id);
		
	}
	
			
		
	function detalii($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ingredient incorect.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ingredient', $this->Ingredient->read(
		'Ingredient.name, Ingredient.descriere, Ingredient.observatii, Ingredient.posibileAplicatii, 
		Ingredient.certificari, Ingredient.garantie',$id));
	$this->layout = 'blank';
		
	}

	

function add() {
			
		if (!empty($this->data)) {
			$this->Ingredient->create();
			if ($this->Ingredient->save($this->data)) {
				$this->Session->setFlash(__('Ingredientul a fost salvat', true));
			/*	if($this->data['Ingredient']['tip']='compus'){$this->redirect(array('controller'=> 'ingredient_comps', 'action'=>'add',$this->data['Ingredient']['id']));}
				else{*/$this->redirect(array('action'=>'view',$this->Ingredient->getLastInsertID()));/*}*/
			} else {
				$this->Session->setFlash(__('Ingredientul nu a putut fi salvat. Incearca din nou.', true));
			}
		}
		//$products = $this->Ingredient->Product->find('list');
		$users = $this->Ingredient->User->find('list');
		//$users = $this->Ingredient->User->find('list');
		//$this->set(compact('products', 'users'));
		$this->set('classIA',"1");
		//$this->set('ingred_id',$id);
       
	}




	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Ingredient incorect', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ingredient->save($this->data)) {
				$this->Session->setFlash(__('Ingredientul a fost salvat', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('Ingredientul nu a putut fi salvat. Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ingredient->read(null, $id);
			$this->set('ingredient', $this->Ingredient->read(
		'Ingredient.stadiulAutorizarii',$id));
		}
		//$products = $this->Ingredient->Product->find('list');
		//$users = $this->Ingredient->User->find('list');
		//$users = $this->Ingredient->User->find('list');
		//$this->set(compact('products','users'));
		//$stadiul=$this->Ingredient->read(null, $stadiulAutorizarii);
		//$this->set('stadiul',$stadiul);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('ID invalid pentru Ingredient', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ingredient->del($id)) {
			$this->Session->setFlash(__('Ingredientul a fost sters', true));
			$this->redirect(array('action'=>'index'));
		}
	}

function __view($id = null) { 
                if (!$id) { 
                        $this->Session->setFlash(__('Invalid Teacher.', true)); 
                        $this->redirect(array('action'=>'index')); 
                } 

                $this->set('ingredient', $this->Ingredient->read(null, $id)); 

        } 



 function view_pdf_gen($id = null)
	    { 
        if (!$id)
        {
            $this->Session->setFlash('Sorry, there was no property ID submitted.');
            $this->redirect(array('action'=>'index'), null, true);
        }
      $this->set('ingredient', $this->Ingredient->read(null, $id));
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









	function view_pdf_a($id = null)
	    { 
        if (!$id)
        {
            $this->Session->setFlash('Sorry, there was no property ID submitted.');
            $this->redirect(array('action'=>'index'), null, true);
        }
      $this->set('ingredient', $this->Ingredient->read(null, $id));
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
    
    
    function view_pdf_car($id = null)
	    { 
        if (!$id)
        {
            $this->Session->setFlash('Sorry, there was no property ID submitted.');
            $this->redirect(array('action'=>'index'), null, true);
        }
      $this->set('ingredient', $this->Ingredient->read(null, $id));
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


 function view_pdf_mic($id = null)
	    { 
        if (!$id)
        {
            $this->Session->setFlash('Sorry, there was no property ID submitted.');
            $this->redirect(array('action'=>'index'), null, true);
        }
      $this->set('ingredient', $this->Ingredient->read(null, $id));
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

function view_pdf($id = null)
	    { 
        if (!$id)
        {
            $this->Session->setFlash('Sorry, there was no property ID submitted.');
            $this->redirect(array('action'=>'index'), null, true);
        }
      $this->set('ingredient', $this->Ingredient->read(null, $id));
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

 /* $this->SearchIndex->searchModels(array('Log'));        
           $this->paginate = array('limit' => 10,
           'conditions' =>  "MATCH(SearchIndex.data) AGAINST('$q' IN BOOLEAN MODE)");        
           $this->set('results', $this->paginate('SearchIndex'));*/
}
?>