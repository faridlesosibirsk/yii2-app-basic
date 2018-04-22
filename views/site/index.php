<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">
            You have successfully created your Yii-powered application.</p>

        <a class="btn btn-lg btn-success" 
           href="http://www.yiiframework.com">
            Get started with Yii</a>
        <a class="btn btn-lg btn-success" 
           href="/web/index.php?r=site/say&message=Привет+мир">
            Говорим «Привет»</a>
        <a class="btn btn-lg btn-success" 
           href="/web/index.php?r=site%2Fentry">
            Работа с формами</a>
        <a class="btn btn-lg btn-success" 
           href="/web/index.php?r=country%2Findex">
            Работа с базами данных</a> 
        <a class="btn btn-lg btn-success" 
           href="/web/index.php?r=gii">
            Генерация кода при помощи Gii</a>        
    </div>
</div>
