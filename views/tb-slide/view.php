<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbSlide */

$this->title = $model->id_slide;
$this->params['breadcrumbs'][] = ['label' => 'Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-slide-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_slide], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_slide], [
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
            [
                'attribute' => 'gambar_slide',
                'value' => 'slides/'.$model->gambar_slide,
                'format' => ['image', ['width' => '100', 'height' => '100']],
            ],
            'prioritas',
        ],
    ]) ?>

</div>
