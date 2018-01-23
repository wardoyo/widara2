<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbKategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategori',
            'kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
