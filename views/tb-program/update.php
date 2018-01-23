<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbProgram */

$this->title = 'Update Tb Program: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_program, 'url' => ['view', 'id' => $model->id_program]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-program-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
