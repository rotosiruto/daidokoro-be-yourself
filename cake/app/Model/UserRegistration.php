<?php
App::uses('AppModel', 'Model');

class UserRegistration extends AppModel {
  //入力チェック機能
  public $validate = array(
    'mail_address' => array(
      array(
        'rule' => 'isUnique', //重複禁止
        'message' => '既に使用されているメールアドレスです。'
      ),
      'rule'    => array('email', true),
        'message' => '適切なメールアドレスにしてください。'
    ),
    'password' => array(
      array(
        'rule' => 'alphaNumeric',
        'message' => 'パスワードは半角英数字にしてください。'
      ),
      array(
        'rule' => array('between', 8, 32),
        'message' => 'パスワードは8文字以上32文字以内にしてください。'
      )
    )
  );

  public function beforeSave($options = array()) {
    $this->data['UserRegistration']['password'] = AuthComponent::password($this->data['UserRegistration']['password']);
    return true;
  }
}