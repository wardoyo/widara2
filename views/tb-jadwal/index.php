<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbJadwalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Jadwals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-jadwal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Jadwal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'judul',
            'detail:ntext',
            [
                'value' => 'kategori.kategori',
                'label' => 'kategori'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
