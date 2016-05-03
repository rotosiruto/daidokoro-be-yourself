<?php
App::uses('AppController', 'Controller');
App::uses('UserRegistrations', 'Controller');

class UsersController extends AppController {
	public $autoLayout = false;
	public function beforeFilter() {
      parent::beforeFilter(); // 明示的に親の関数を実行
      /* FooControllerにおいてbar()より前に処理される */
    }
    public function index(){
    	$this->set('userRegistration', $this->Auth->user());
    }
    public function mypage(){
    	$this->set('userRegistration', $this->Auth->user());
    }
  }