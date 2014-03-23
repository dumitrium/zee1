<?php
class AppController extends Controller{
var $components=array('Auth','Cookie', 'Session','Redirect','RequestHandler','DebugKit.Toolbar');
var $helpers = array('Html', 'Form', 'Time','Javascript');
var $paginate = array('limit' => 10);
var $permissions = array();



function beforeFilter(){
	if (sizeof($this->uses) && $this->{$this->modelClass}->Behaviors->attached('Logable')) {
    $this->{$this->modelClass}->setUserData($this->Auth->user());}
    
	$this->Auth->fields=array(
		'username'=>'username',
		'password'=>'password'
			);
	$this->Auth->authorize='controller';
	$this->Auth->autoRedirect=false;
	$this->auth->loginAction=array('controller'=>'users','action'=>'login');		
	$this->Auth->loginRedirect=array('controller'=>'ingredients','action'=>'index');
	$this->Auth->logoutRedirect=array('controller'=>'users','action'=>'login');
//	$this->Auth->allow('signup');
//	$this->Auth->userScope= array('User.confirmed' => '1');
	$this->set('loggedIn',$this->Auth->user('id'));

	
}
function isAuthorized(){
	if($this->Auth->user('group')=='admin')return true;
	if(!empty($this->permissions[$this->action]))
		{
			if($this->permissions[$this->action]=='*') return true;
			if(in_array($this->Auth->user('group'),$this->permissions[$this->action])) return true;
		}
		return false;
}


function searchConditions($params = null)
	{
		$conditions=array();
		if (isset($params['named']['q']))
			{
				$conditions[]=array("MATCH(Ingredient.name, Ingredient.name2, Ingredient.namee, Ingredient.descriere, Ingredient.observatii, Ingredient.furnizor, Ingredient.cod, Ingredient.grupaProdusului, Ingredient.producator, Ingredient.certificari, Ingredient.taraOrigine, Ingredient.id_ingred, Ingredient.stadiulAutorizarii) AGAINST ('".$params['named']['q']."')");
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