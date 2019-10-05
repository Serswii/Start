<?php
/**
 * @var $cats \app\models\Raspisanie[]
 * @var $cat \app\models\Raspisanie
 */
use yii\helpers\VarDumper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Profile';
?>
    <h1>Active Profile</h1>
<?php
//debug($cats);
//echo count($cats->races);
VarDumper::dump($cats,10,true);
?>

<? foreach ($cats as $cat): ?>
    <?= $cat->id_race ?>
<? endforeach; ?>
<?php ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<?//= $form->field($model, 'id_raspisanie') ?>
<?//= $form->field($model, 'id_race') ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>