<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbPesan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-pesan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
