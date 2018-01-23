<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbJadwal */

$this->title = 'Update Tb Jadwal: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal, 'url' => ['view', 'id' => $model->id_jadwal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-jadwal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
