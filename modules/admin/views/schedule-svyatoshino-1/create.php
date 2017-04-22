<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ScheduleSvyatoshino1 */

$this->title = 'Cоздаем группу на Святошин - Нивки';
$this->params['breadcrumbs'][] = ['label' => 'Schedule Svyatoshino1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-svyatoshino1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
