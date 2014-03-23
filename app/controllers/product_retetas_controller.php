<?php
class ProductRetetasController extends AppController {

	var $name = 'ProductRetetas';
var $permissions = array( 
        'index' => '*',
        'view' => '*',
        'add' => array('admin','laborator'),
        'edit' => array('admin','laborator'),
        'delete' => array('admin','laborator'), 
        'ingredi'=>'*',
        'view_pdf_prod_genetic'=>'*',
        'view_pdf_prod_alergen'=>'*',
        'view_pdf_prod_micro'=>'*',
        'view_pdf_prod_ingredi'=>'*',
        'view_pdf_prod_nutri'=>'*',
        'genetic'=>'*',
        'nutritional'=>'*',
        'microb'=>'*',
        'alergeni'=>'*',
       'view_pdf_prod_reteta'=>'*'
           );




//var $uses = array('Ingredient');
	function index() {
		$this->ProductReteta->recursive = 0;
		$this->data=$this->ProductReteta->find('all',array(
			'fields'=>array(
				'ProductReteta.id',
				'ProductReteta.ingredient_id',
				'ProductReteta.product_id',
				'ProductReteta.procent')
			)
				)	;
		$this->set('productRetetas', $this->paginate());
	
		
		
	/*	$this->set('productRetetas', ));*/
		
	}


function view($prod=null) {
			
		$this->set('productReteta', $this->ProductReteta->find('all'));
	$this->set('prod', $prod);
	// $this->set('id', $id);	
	}

	




function add($prod=null) {
		if (!empty($this->data)) {
			$this->ProductReteta->create();
			if ($this->ProductReteta->save($this->data)) {
				$this->Session->setFlash(__('Ingredientul a fost adaugat la reteta', true));
				$this->redirect(array('controller'=> 'product_retetas', 'action'=>'add',$this->data['ProductReteta']['product_id']));
			} else {
				$this->Session->setFlash(__('Reteta nu a putut fi salvata. Incearca din nou.', true));
			}
		}
		$products = $this->ProductReteta->Product->find('list');
		$ingredients = $this->ProductReteta->Ingredient->find('list',array('order'=>'Ingredient.name ASC'));
		$this->set(compact('products', 'ingredients'));
	
		$this->ProductReteta->recursive = 0;
		
			$this->set('productRetetas', $this->ProductReteta->find('all',
			array(
			'conditions'=>array('ProductReteta.product_id'=>$prod),
			'fields'=>array('id',
				'Product.name',
				'Ingredient.name',
				'Ingredient.tip',
				'Ingredient.id',
				'ingredient_id',
				'procent',
				'functia',
				'faranume'),
			'order'=>'ProductReteta.procent DESC'
				
			)
				)	);
				$this->set('prod', $prod);
	 $this->set('pr', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	}







	function edit($prod=null,$id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductReteta->save($this->data)) {
				$this->Session->setFlash(__('Modificarea a fost salvata', true));
			$this->redirect(array('controller'=> 'product_retetas', 'action'=>'add',$this->data['ProductReteta']['product_id']));
			} else {
				$this->Session->setFlash(__('Editarea nu s-a putut efectua.Incearca din nou.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductReteta->read(null, $id);
		}
		$products = $this->ProductReteta->Product->read('name');
		$ingredients = $this->ProductReteta->Ingredient->find('list');
		$this->set(compact('products','ingredients'));
	$this->set('prod', $prod);
	$this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	
		
	}


function ingredi($prod=null)
	   {	$this->ProductReteta->recursive = 2;

	  $productRetetas = $this->ProductReteta->find('all',
			array(
		
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	;
		   $this->set('prod', $prod);
	 //  $this->set('ingredientComps', $ic);
	    $this->set('productRetetas', $productRetetas);
	    $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
  
   }

function view_pdf_prod_ingredi($prod = null){
 		$this->set('prod', $prod);
       Configure::write('debug',0); // Otherwise we cannot use this method while developing
       $prod = intval($prod);
	 $this->set('productRetetas', $this->ProductReteta->find('all',
			array(
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	);
	     $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	    $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }
    
   function view_pdf_prod_reteta($prod=null){	
		$this->set('prod', $prod);
	Configure::write('debug',0);
	 $prod = intval($prod);
	$this->set('productRetetas', $this->ProductReteta->find('all',
			array(
			'conditions'=>array('ProductReteta.product_id'=>$prod),
			'fields'=>array('id',
				'Product.name',
				'Product.cod',
				'Product.created',
				'Ingredient.name',
				'Ingredient.tip',
				'Ingredient.id',
				'ingredient_id',
				'procent',
				'functia',
				'faranume'),
			'order'=>'ProductReteta.procent DESC'
				
			)
				)	);
	      $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
   $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
   }

    
    
    
    
     
   function alergeni($prod=null){	
	   	$this->ProductReteta->recursive = 2;
		$this->ProductReteta->recursive = 1;	
	  $this->set('productRetetas', $this->ProductReteta->find('all',
			array(
		
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	);
	   
	   
	    $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created, Product.line_id', $prod));
	   $this->set('prod', $prod);
	}
	
	 function nutritional($prod=null) {	
	 	$this->ProductReteta->recursive = 2;
	$this->ProductReteta->recursive = 1;	
	  $this->set('productRetetas', $this->ProductReteta->find('all',
			array(
		
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	);
	      $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	   
	   $this->set('prod', $prod);
	}

 function microb($prod=null) {	
 	$this->ProductReteta->recursive = 2;
//	$this->ProductReteta->recursive = 1;	
	  $this->set('productRetetas', $this->ProductReteta->find('all',
			array(
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	);
	   $this->set('prod', $prod);
	   $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	}
	
	function genetic($prod=null) {	
		$this->ProductReteta->recursive = 2;
		$this->ProductReteta->recursive = 1;	
	  $this->set('productRetetas', $this->ProductReteta->find('all',
			array(
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	);
	    $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	   $this->set('prod', $prod);
	}



	function delete($prod=null,$id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Pagina incorecta', true));
			$this->redirect(array('controller'=> 'product_retetas', 'action'=>'add',$prod));
		}
		if ($this->ProductReteta->del($id)) {
			$this->Session->setFlash(__('Ingredientul a fost sters', true));
			$this->redirect(array('controller'=> 'product_retetas', 'action'=>'add',$prod));
		}
		$this->set('prod', $prod);
	}





function view_pdf_prod_alergen($prod = null){
 		$this->set('prod', $prod);
       Configure::write('debug',0); // Otherwise we cannot use this method while developing
       $prod = intval($prod);
	 $this->set('productRetetas', $this->ProductReteta->find('all',
			array(
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	);
	     $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	    $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }
    
    
    

function view_pdf_prod_micro($prod = null){
		 $this->ProductReteta->recursive = 2;
		$this->set('prod', $prod);
         Configure::write('debug',0); // Otherwise we cannot use this method while developing
		 $this->set('productRetetas', $this->ProductReteta->find('all',
			array(
				'conditions'=>array('ProductReteta.product_id'=>$prod),
				'recursive'=>2,				
			)
				)	);
	    $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
	    $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }
    
    function view_pdf_prod_genetic($prod = null){ 
       $this->ProductReteta->recursive = 2;
		$this->set('prod', $prod);
       Configure::write('debug',0); // Otherwise we cannot use this method while developing

       $prod = intval($prod);
	 $this->set('productRetetas', $this->ProductReteta->find('all',
			array(	'conditions'=>array('ProductReteta.product_id'=>$prod),
					'recursive'=>2,				
			)
				)	);
	   	 $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }
    
       function view_pdf_prod_nutri($prod = null){ 
       $this->ProductReteta->recursive = 2;
		$this->set('prod', $prod);
       Configure::write('debug',0); // Otherwise we cannot use this method while developing

       $prod = intval($prod);
	 $this->set('productRetetas', $this->ProductReteta->find('all',
			array(	'conditions'=>array('ProductReteta.product_id'=>$prod),
					'recursive'=>2,				
			)
				)	);
	   	 $this->set('product', $this->ProductReteta->Product->read(
		'Product.name, Product.cod, Product.created', $prod));
        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }



}
?>