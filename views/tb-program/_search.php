<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbProgramSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-program-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_program') ?>

    <?= $form->field($model, 'nama_program') ?>

    <?= $form->field($model, 'detail') ?>

    <?= $form->field($model, 'gambar_program') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
