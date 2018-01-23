<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbSlide */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-slide-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gambar_slide')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prioritas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
