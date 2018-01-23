<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbKategori */

$this->title = 'Update Tb Kategori: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
