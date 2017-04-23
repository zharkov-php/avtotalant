<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="admin-default-index">
    <div class="page-header">
        <h1><center>ПАНЕЛЬ АДМИНИСТРАТОРА:</center> </h1>
    </div>

    <ul class="thumbnails">

        <li class="span4">Автошкола на м.Святошин / м.Нивки
            <?= Html::a(Html::img('http://placehold.it/300x200') , Url::to(['schedule-svyatoshino-1/index']), ['class' => 'thumbnail'])?>



        </li>
        <li class="span4">Автошкола на м.Левобережная
            <?= Html::a(Html::img('http://placehold.it/300x200') , Url::to(['schedule-levoberezhnaya-1/index']), ['class' => 'thumbnail'])?>

        </li>

        <li class="span4">
            <a href="#" class="thumbnail">
                <img src="http://placehold.it/300x200" alt="">
            </a>
        </li>
    </ul>

</div>
