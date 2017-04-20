<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Filial */

$this->title = 'Update Filial: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Filials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
