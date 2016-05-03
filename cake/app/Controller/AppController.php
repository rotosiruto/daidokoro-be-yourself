<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	function beforeFilter()
        {
$User = ClassRegistry::init('User');
//$this ->set('User', $User ->find('first'));

  if (isset($_SERVER['HTTP_REFERER'])) {
  	$referer = $_SERVER['HTTP_REFERER'];
  }
  else {
  	$referer = null;
  	/*登録する値*/
  }
  $data = array('User' => array('ip_address' => $_SERVER["REMOTE_ADDR"], 'user_agent' => $_SERVER['HTTP_USER_AGENT'], 'referer' => $referer));
  /*登録するフィールド*/
  $fields = array('ip_address', 'user_agent', 'referer');
  /*更新*/
  $User ->save($data, false, $fields);
	}
  public $components = array(
            'Session',
            'Auth' => array(
                'authenticate' => array(
                    'Form' => array(
                        'userModel' => 'UserRegistration', //ユーザー情報のモデル
                        'fields' => array('username' => 'mail_address','password' => 'password'), //認証をusernameからemailカラムに変更

                    )
                ),
                'loginAction' => array('controller' => 'UserRegistrations','action' => 'login'), //ログインを行なうaction
                'logoutRedirect' => array('controller' => 'UserRegistrations', 'action' => 'login') //ログアウト後のページ
            )
        );
}
