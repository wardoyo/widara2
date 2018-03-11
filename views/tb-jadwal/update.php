<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbJadwal */

$this->title = 'Update Jadwal: '.$model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Tb Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->judul, 'url' => ['view', 'id' => $model->id_jadwal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-jadwal-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
