<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title>ゆる～り シンプル 自然な台所</title>
<meta name="description" content="食べ物で家族を守る学び場 『こまちの台所』 神奈川県 海老名市 県央地区 管理栄養士 こまち あや">
<meta name="keywords" content="食べ物,デトックス,健康,栄養">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
echo $this->Html->meta('icon') ."\n";
echo $this->Html->css('daidokoro-be-yourself_common.css')."\n";
?>
</head>
<body>

<div id="container">
<?php
foreach ($files[1] as $key => $value) {
	echo '<div class="item"><img src="img/masonry/'.$value.'"  alt="">
    </div>';
}
?>
  </div>

<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php
    echo $this->Html->script('masonry.pkgd.min.js')."\n";
    echo $this->Html->script('imagesloaded.pkgd.min.js')."\n";
?>
<script>
jQuery(function($){
    var $container = $('#container');　
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.item',　
        isFitWidth: true,　
        columnWidth: 180
      });
    });
});
</script>
</body>
</html>