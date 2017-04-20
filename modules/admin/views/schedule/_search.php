<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nameDate') ?>

    <?= $form->field($model, 'timeDate') ?>

    <?= $form->field($model, 'weekDate') ?>

    <?= $form->field($model, 'lengthDate') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'on') ?>

    <?php // echo $form->field($model, 'filial_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
