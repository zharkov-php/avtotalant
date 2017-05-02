<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleSvyatoshino1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-svyatoshino1-form">

    <?php $form = ActiveForm::begin(); ?>
Дата, старт группы:<br>
    ФОРМАТ(22.04.2017)
    <?= $form->field($model, 'name_Lesson')->textInput(['maxlength' => true]) ?>
Время, в какое время будут идти уроки:<br>
    ФОРМАТ(18.00 - 20.00)
    <?= $form->field($model, 'time_Lesson')->textInput(['maxlength' => true]) ?>
Дни недели, по каким дням недели будут проходить уроки, в этой группы:<br>
    ФОРМАТ(понедельник, среда, пятница)
    <?= $form->field($model, 'date_Lesson')->textInput(['maxlength' => true]) ?>
Скидки, акции!!!Какие скидки и акции мы предлагаем данной группе:<br>
    ФОРМАТ(Приведи друга - 50%скидка!!!)
    <?= $form->field($model, 'sale_Lesson')->textInput(['maxlength' => true]) ?>
Статус группы,(1-> набираем группу"цвет зеленый") (2-> Группа заполненна"цвет красный")<br>
    ФОРМАТ(1)( <font color="#90ee90"> success  - зеленый</font>)(  <font color="red">danger  - красный</font>)
    <?= $form->field($model, 'status_color_Lesson')->textInput(['maxlength' => true]) ?>
Включить или выключить группу!!!1 - выключить<br>
    ФОРМАТ()
    <?= $form->field($model, 'active_Lesson')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
