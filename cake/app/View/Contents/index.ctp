<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title><?php echo $contentsPage['Content']['title'];?></title>
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

<div id="wrapper">
    <div id="header">
        <div class="l_horizon">
            <p>食べ物で家族を守る学び場 『こまちの台所』</p>
            <ul class="md_vertical">
                <?php if (FULL_BASE_URL !== Router::url().Router::url( NULL, true )) {
                   echo '<li><a href="'.FULL_BASE_URL.'" class="a">トップページ</a></li>';
                }?>
                <li><a href="" class="a">お問い合わせ</a></li>
            </ul> 
        </div>        
        <div class="l_horizon">
            <h1 class=""><?php echo $contentsPage['Content']['title'];?></h1>
        </div>
        <?php
            if ($contentsPage['Content']['thumbnail']) {
                $thumbnail = $this->Html->webroot.'img/contentThumbnail/'.$contentsPage['Content']['thumbnail'];
                echo '<img src="'.$thumbnail.'" alt="'.$contentsPage['Content']['title'].'">';  
            }
        ?>
    </div>
    <section>
        <p><?php echo $contentsPage['Content']['contents'];?></p>
        <?php
            if ($contentsPage['Content']['performance_detail']) {
                echo $contentsPage['Content']['performance_detail'];        
            }
            ?>       
    </section>
</div>
<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php
    echo $this->Html->script('masonry.pkgd.min.js')."\n";
    echo $this->Html->script('imagesloaded.pkgd.min.js')."\n";
?>
<script>
$(function($){
    var $container = $('#js-container');　
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.item',　
        isFitWidth: true,　
        columnWidth: 130
      });
    });
    setTimeout(function(){
        $('body').addClass('fade');
    },500);
    
});
</script>
</body>
</html>