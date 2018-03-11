<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\TbProgram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar_program')->widget(FileInput::classname(), [
    'options' => ['multiple' => true, 'accept' => 'image/*'],
    'pluginOptions' => ['previewFileType' => 'image',
                        'showUpload' => true,
                        'initialPreview' => [
                            $model->gambar_program ? Html::img('uploads/'.$model->gambar_program, ['style'=>'width: 200px; height:200px']) : null, // checks the models to display the preview

                        ],
                        'initialCaption'=>$model->gambar_program,
                        'overwriteInitial' => false,
                       ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
