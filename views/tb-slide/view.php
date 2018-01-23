<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbSlide */

$this->title = $model->id_slide;
$this->params['breadcrumbs'][] = ['label' => 'Tb Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-slide-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id_slide',
            'gambar_slide',
            'prioritas',
        ],
    ]) ?>

</div>
