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
<div id="wrapper">
<div id="header">
<div class="l_horizon">
  <h1 class="">ゆる～り シンプル 自然な台所</h1>
  <ul>
    <li><a href="" class="a">お問い合わせ</a></li>
  </ul> 
</div>

<p>食べ物で家族を守る学び場 『こまちの台所』 食べ物で家族を守る学び場 『こまちの台所』<br>神奈川県 海老名市 県央地区 管理栄養士 こまち あや</p>
</div>
<div id="js-container" class="container">

<?php
shuffle($files[1]);
foreach ($files[1] as $key => $value) {
	echo '<div class="item"><img src="img/masonry/'.$value.'"  alt="">
    </div>';
}
?>
  </div>
<section>
  <h2>コンセプト</h2>
  <p>学び場『こまちの台所』 では ダイエットをして 健康になりたい、綺麗になりたい、 〇〇したい ということにとらわれて 食べ物を選ぶのではなく、食べ物の力や 体への影響を知ってもらい正しい物を選んで自然でシンプルな台所から家族を守る学び場になればと思います。管理栄養士として食の大切さが少しでも多くの皆様に伝わり幸せが広がりますように。
  <h2>プロフィール</h2>
  <p>１児の母。委託給食、老人ホーム、自然食品店、健診センターでの栄養相談、管理栄養士として色々な分野での経験をしました。そして家族の病 、自身の不妊、食を変え自然妊娠、奮闘した母乳育児卒業、3歳男の子の子育てに専念中です。</p>  
</section>
<section>
  <h2>こまちのコラム</h2>
<?php
$today = date('Y-m-d');
function day_diff($date1, $date2) {
 
    // 日付をUNIXタイムスタンプに変換
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
 
    // 何秒離れているかを計算
    $seconddiff = abs($timestamp2 - $timestamp1);
 
    // 日数に変換
    $daydiff = $seconddiff / (60 * 60 * 24);
 
    // 戻り値
    return $daydiff;
 
}
function tag_weekday_japanese_convert( $date ){
 $weekday = array( '日', '月', '火', '水', '木', '金', '土' );
 return $weekday[date( 'w',strtotime( $date ) )];
}
?>

<?php foreach ($contentsData as $key => $value):?>
<?php
  if($value['Content']['performance_day_start']){
    $performance_day_start = date_format(date_create($value['Content']['performance_day_start']), 'Y/m/d');
  }
  else {
    $performance_day_start = NULL;
  }

  if ($value['Content']['updated_at']) {
    $updated_at = date_format(date_create($value['Content']['updated_at']), 'Y/m/d');
  }
  else {
    $updated_at = NULL;
  }


  if ($value['Content']['thumbnail']) {
    $thumbnail = $this->Html->webroot.'img/contentThumbnail/'.$value['Content']['thumbnail'];
  }
  else {
    $thumbnail = $this->Html->webroot.'img/contentThumbnail/60490fd4a3ae114b77ff7f8ec54c14ac_m.jpg';
  }
?>

  <a class="md_readWrap l_horizon" href="contents?id=<?php echo $value['Content']['id'];?>">
    <div class="md_ratioBox ratio-1_1">
      <div class="inner">
        <div class="is_table">
          <img src="<?php echo $thumbnail;?>" alt="<?php echo $value['Content']['title']?>">   
        </div>
      </div>
    </div>     
    <div class="md_readMeta">
      <p class="md_readTitle">
        <?php
            if(day_diff($updated_at, $today) < 30) {
            echo '<span class="md_newRead">新着!</span>';
          }
          echo mb_strimwidth($value['Content']['title'], 0, 60, '・・・', 'UTF-8');
        ?>
        <span class="md_update">更新日:<?php echo $updated_at.'('.tag_weekday_japanese_convert($updated_at).')';?>
        </span>   
      </p>
      <p class="md_readContent">
        <?php            
          echo mb_strimwidth($value['Content']['contents'], 0, 200, '・・・', 'UTF-8');
        ?> 
      </p>      
    </div>
  </a>
<?php endforeach; ?>
  
  
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