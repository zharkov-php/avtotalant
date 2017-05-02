<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleLevoberezhnaya1 */

$this->title = 'Update Schedule Levoberezhnaya1: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Schedule Levoberezhnaya1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schedule-levoberezhnaya1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
