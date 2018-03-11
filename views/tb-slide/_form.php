<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\TbSlide */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-slide-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gambar_slide')->widget(FileInput::classname(), [
    'options' => ['multiple' => true, 'accept' => 'image/*'],
    'pluginOptions' => ['previewFileType' => 'image',
                        'showUpload' => true,
                        'initialPreview' => [
                            $model->gambar_slide ? Html::img('slides/'.$model->gambar_slide, ['style'=>'width: 200px; height:200px']) : null, // checks the models to display the preview

                        ],
                        'initialCaption'=>$model->gambar_slide,
                        'overwriteInitial' => false,
                        ]
    ]);?>

    <?= $form->field($model, 'prioritas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
