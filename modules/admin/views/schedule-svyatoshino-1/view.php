<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleSvyatoshino1 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Schedule Svyatoshino1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-svyatoshino1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_Lesson',
            'time_Lesson',
            'date_Lesson',
            'sale_Lesson',
            'google_map_Lesson',
            'status_color_Lesson',
            'active_Lesson',
        ],
    ]) ?>

</div>
