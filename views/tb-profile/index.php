<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'no_telp',
            'tentang:ntext',
            'email:email',
            //'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
