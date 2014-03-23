<?php
class LogsController extends AppController {

	var $name = 'Logs';
	var $permissions = array( 
        'logs' => array('admin','laborator') 
	           );
//	var $helpers = array('Html', 'Form');


	function logs($i=null,$p=null)
	
		{		
			if (!empty($this->data)) { 
				$i=$this->data['Log']['ingredient_id'];
				$p=$this->data['Log']['product_id'];
			//	pr($this->data);
				$this->redirect(array('controller'=> 'logs', 'action'=>'logs',$i,$p));
			} 
		
			
			
			App::import('Model','Ingredient'); 
			$qry= new Ingredient(); 
			$ingredient=$qry->find('list',array('order'=>'Ingredient.name ASC'));
			
			App::import('Model','Product'); 
			$qry1= new Product(); 
			$product=$qry1->find('list',array('order'=>'Product.name ASC'));
			
		//$ingredient=				
		if($i>0){
		$lg=$this->Log->find('all',array(
			'conditions'=>array('Log.title' => $i),
			'order' => array('Log.created DESC')));
			$this->set('qry',$lg);
		}
		elseif ($p>0){
		$lg=$this->Log->find('all',array(
			'conditions'=>array('Log.title' => $p),
			'order' => array('Log.created DESC')));
			$this->set('qry',$lg);
		}else{$this->set('qry',null);}
		
		//$data = $this->Ingredient->findLog(array('order' => 'id DESC'));
		
		$this->set('ingredients',$ingredient);
		$this->set('products',$product);
		$this->set('classIS',"current");
		
  /*      $this->SearchIndex->searchModels(array('Log'));        
           $this->paginate = array('limit' => 10,
           'conditions' =>  "MATCH(SearchIndex.data) AGAINST('$q' IN BOOLEAN MODE)");        
           $this->set('results', $this->paginate('SearchIndex'));*/
	}
	
	
function searchConditions($params = null)
	{
		$conditions=array();
		if (isset($params['named']['q']))
			{
				$conditions[]=array("MATCH(Log.title, Ingredient.name2, Ingredient.namee, Ingredient.descriere, Ingredient.observatii, Ingredient.furnizor, Ingredient.cod, Ingredient.grupaProdusului, Ingredient.producator, Ingredient.certificari, Ingredient.taraOrigine, Ingredient.id_ingred, Ingredient.stadiulAutorizarii) AGAINST ('".$params['named']['q']."')");
				//$conditions["MATCH(Ingredient.name, Ingredient.name2, Ingredient.namee) AGAINST(? IN BOOLEAN MODE)"] = $params['named']['q'];
			}
		return $conditions;
			
		}
	
		function searchConditionsProducts($params = null)
	{
		$conditions=array();
		if (isset($params['named']['q']))
			{
				$conditions[]=array("MATCH(Product.name, Product.cod, Product.grupaProdusului, Product.subgrupa, Product.descriere, Product.observatii) AGAINST ('".$params['named']['q']."')");
				//$conditions["MATCH(Ingredient.name, Ingredient.name2, Ingredient.namee) AGAINST(? IN BOOLEAN MODE)"] = $params['named']['q'];
			}
		return $conditions;
			
		}

   


}
?>