<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbJadwal */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Tb Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-jadwal-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jadwal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jadwal], [
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
            'tanggal',
            'judul',
            'detail:ntext',
            [
                'attributes' => 'id_kategori',
                'value' => $model->kategori->kategori,
                'label' => 'kategori'
            ]
        ],
    ]) ?>

</div>
