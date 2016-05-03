<?php
App::uses('AppController', 'Controller');

class UserRegistrationsController extends AppController {
	public $autoLayout = false;

  //読み込むコンポーネントの指定


  //どのアクションが呼ばれてもはじめに実行される関数
  public function beforeFilter()
  {
    parent::beforeFilter();
    //未ログインでアクセスできるアクションを指定
    //これ以外のアクションへのアクセスはloginにリダイレクトされる規約になっている
    $this->Auth->allow('register', 'login');
  }

  //ログイン後にリダイレクトされるアクション
  public function index(){
    $this->set('userRegistration', $this->Auth->user());
  }

  public function register(){
    //$this->requestにPOSTされたデータが入っている
    //POSTメソッドかつユーザ追加が成功したら
    if($this->request->is('post') && $this->UserRegistration->save($this->request->data)){
      //ログイン
      //$this->request->dataの値を使用してログインする規約になっている
      $this->Auth->login();
      $this->redirect(array('controller' => 'Users', 'action' => 'index'));
    }
  }

  public function login(){
    if($this->request->is('post')) {
      if($this->Auth->login())
        return $this->redirect(array('controller' => 'Users', 'action' => 'index'));
      else
        $this->Session->setFlash('ログイン失敗');
    }
  }

  public function logout(){
    $this->Auth->logout();
    $this->redirect('login');
  }
}