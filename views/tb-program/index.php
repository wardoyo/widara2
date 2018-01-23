<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbProgramSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Programs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-program-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Program', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_program',
            'nama_program',
            'detail:ntext',
            'gambar_program',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
