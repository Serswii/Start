<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <?php
        if (!\Yii::$app->user->can('updateOwnNews', ['news' => $newsModel])) {
       echo 'Access denied';
        } ?>
        <h1>Hello World!!!</h1>
    </div>
</div>
