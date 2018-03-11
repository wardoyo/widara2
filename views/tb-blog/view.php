<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBlog */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Tb Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-blog-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_blog], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_blog], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'judul',
            'isi:ntext',
            [
                'attribute' => 'gambar_blog',
                'value' => 'uploads/'.$model->gambar_blog,
                'format' => ['image', ['width' => '100', 'height' => '100']],
            ]
        ],
    ]) ?>

</div>
