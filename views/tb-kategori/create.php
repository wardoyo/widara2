<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbKategori */

$this->title = 'Create Tb Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Tb Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
