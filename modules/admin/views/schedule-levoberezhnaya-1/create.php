<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ScheduleLevoberezhnaya1 */

$this->title = 'Cоздаем группу на м.Левобережная';
$this->params['breadcrumbs'][] = ['label' => 'Schedule Levoberezhnaya1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-levoberezhnaya1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
