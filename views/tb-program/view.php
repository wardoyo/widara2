<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbProgram */

$this->title = $model->nama_program;
$this->params['breadcrumbs'][] = ['label' => 'Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-program-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_program], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_program], [
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
            'nama_program',
            'detail:ntext',
            [
                'attribute' => 'gambar_program',
                'value' => 'uploads/'.$model->gambar_program,
                'format' => ['image', ['width' => '100', 'height' => '100']],
            ]
        ],
    ]) ?>

</div>
