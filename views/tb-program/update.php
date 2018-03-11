<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbProgram */

$this->title = 'Update Program: '.$model->nama_program;
$this->params['breadcrumbs'][] = ['label' => 'Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_program, 'url' => ['view', 'id' => $model->id_program]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-program-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
