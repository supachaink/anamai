<?php
/* @var $this yii\web\View */
$this->title = 'สำนักส่งเสริมสุขภาพ กรมอนามัย กระทรวงสาธารณสุข';
?>
<?php
$route1=Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>"> ไปที่ Test1</a>;
<br>

<?php
$route2=Yii::$app->urlManager->createUrl(['test/test2','name'=>'supachai','lname'=>'naknikorn']);
?>
<a href="<?=$route2?>"> ไปที่ Test2</a>;
<br>

<?= 
\yii\helpers\Html::a('Link แบบที่ 3',['test/test1','a'=>'1']);
?>
<br>


<h1> Test Hello </h1>
<h2> Test </h2>
<h3> Test </h3>
<h4> Test </h4>
<h5> Test </h5>
<h6> Test </h6>
