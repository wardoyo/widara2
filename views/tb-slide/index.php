<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbSlideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Slides';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-slide-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Slide', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_slide',
            'gambar_slide',
            'prioritas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
