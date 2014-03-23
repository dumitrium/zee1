<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form');
//	var $components = array('Auth');
var $permissions = array( 
        'logout' => '*',
        'signup' => 'admin',  
           ); 


function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', 

true));
			}
		}
		$ingredients = $this->User->Ingredient->find('list');
		$products = $this->User->Product->find('list');
		$this->set(compact('ingredients', 'products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', 

true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$ingredients = $this->User->Ingredient->find('list');
		$products = $this->User->Product->find('list');
		$this->set(compact('ingredients','products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for User', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}




function login(){
if ($this->Auth->user())
	{$this->Session->write('Auth.User.group',$this->User->Group->field('name',array('id'=>$this->Auth->user('group_id'))));
	$this->redirect($this->Auth->redirect());
}}

function logout(){
	$this->Session->setFlash('Logout');
	$this->redirect($this->Auth->logout());}

function signup(){
	if (!empty($this->data)){
		if(isset($this->data['User']['password2']))
		$this->data['User']['password2hashed']=$this->Auth->password($this->data['User']['password2']);
		$this->User->create();
		if($this->User->save($this->data))
		{ $this->Session->setFlash('felicitari, te-ai inregistrat');
		  $this->redirect(array('controller'=>'ingredients','action'=>'index'));}
		  else{
			  $this->Session-setFlash('S-a produs o eroare, te rog incearca din nou');
			$this->data=null;
		  }}}




function befoerFilter()
{$this->Auth->allow('signup');}}
?>