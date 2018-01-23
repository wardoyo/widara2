<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbPesan */

$this->title = 'Update Tb Pesan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Pesans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pesan, 'url' => ['view', 'id' => $model->id_pesan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-pesan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
