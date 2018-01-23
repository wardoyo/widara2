<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-blog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_blog',
            'judul',
            'isi:ntext',
            'gambar_blog',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
