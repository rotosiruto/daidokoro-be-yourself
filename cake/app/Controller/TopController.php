<?php
App::uses('AppController', 'Controller');

class UserController extends AppController {
		public $autoLayout = false;
		public $name = 'User';
    function index(){
		//$result = $this->User>find('all');
		$this->set('result',$result);
	}

}