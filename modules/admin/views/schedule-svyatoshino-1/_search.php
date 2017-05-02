<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleSvyatoshino1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-svyatoshino1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_Lesson') ?>

    <?= $form->field($model, 'time_Lesson') ?>

    <?= $form->field($model, 'date_Lesson') ?>

    <?= $form->field($model, 'sale_Lesson') ?>

    <?php // echo $form->field($model, 'google_map_Lesson') ?>

    <?php // echo $form->field($model, 'status_color_Lesson') ?>

    <?php // echo $form->field($model, 'active_Lesson') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
