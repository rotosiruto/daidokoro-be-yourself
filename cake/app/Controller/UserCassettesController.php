<?php
App::uses('AppController', 'Controller');

class UserCassettesController extends AppController {
	public $autoLayout = false;

  function upload()
 {
  if (!empty($this->data)) {
　　　　//アップロードするファイルの場所
  　$uploaddir = 'C:\Program Files\xampp\htdocs\cake\img\\';
  　$uploadfile = $uploaddir . basename($this->data['Wimage']['img_name']['name']);
　　　　　//画像をテンポラリーの場所から、上記で設定したアップロードファイルの置き場所へ移動
  　if (move_uploaded_file($this->data['Wimage']['img_name']['tmp_name'], $uploadfile)){
　　　　　//成功したら、Successを表示
  　　　print "Success";
  　　}else{
　　　　　//失敗したら、errorを表示
  　　　print "error";
  　　}
 　　　}
 　}
}