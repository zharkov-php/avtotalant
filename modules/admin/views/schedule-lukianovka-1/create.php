<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ScheduleLukianovka1 */

$this->title = 'Cоздаем группу на м.Лукьяновка';
$this->params['breadcrumbs'][] = ['label' => 'Schedule Lukianovka1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-lukianovka1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
