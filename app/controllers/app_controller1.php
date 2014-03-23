<?php
class AppController extends Controller{
var $components=array('Auth','Cookie', 'Session','RequestHandler'/*,'DebugKit.Toolbar'*/);
var $helpers = array('Html', 'Form', 'Time','Javascript');
var $paginate = array('limit' => 10);



function beforeFilter(){
	$this->Auth->loginRedirect=array('controller'=>'ingredients','action'=>'index');
	$this->Auth->logoutRedirect=array('controller'=>'ingredients','action'=>'index');
	$this->Auth->allow('signup');
	$this->Auth->authorize='controller';
//	$this->Auth->userScope= array('User.confirmed' => '1');
	$this->set('loggedIn',$this->Auth->user('id'));
	$this->Auth->autoRedirect=false;
	$this->Cookie->name='zee';
	if(!$this->Auth->user('id'))
	{ $cookie=$this->Cookie->read('User');
	if($cookie){$this->Auth->login($cookie);}}
}
function isAuthorized(){return true;}
}
?>