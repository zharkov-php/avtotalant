<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScheduleSvyatoshino1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расписание групп на Святошин - Нивки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-svyatoshino1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать группу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_Lesson',
            'time_Lesson',
            'date_Lesson',
            'sale_Lesson',
            // 'google_map_Lesson',
             'status_color_Lesson',
             'active_Lesson',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
