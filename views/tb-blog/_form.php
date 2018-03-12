<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\TbBlog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?> -->
	<?= $form->field($model, 'isi')->widget(TinyMce::className(), [
	    'options' => ['rows' => 10],
	    'clientOptions' => [
	        'plugins' => [
	            "advlist autolink lists link charmap print preview anchor",
	            "searchreplace visualblocks code fullscreen",
	            "insertdatetime media table contextmenu paste"
	        ],
	        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	    ]
	]);?>

    <?= $form->field($model, 'gambar_blog')->widget(FileInput::classname(), [
    'options' => ['multiple' => true, 'accept' => 'image/*'],
    'pluginOptions' => ['previewFileType' => 'image', 
                        'showUpload' => true,
                        'initialPreview' => [
                            $model->gambar_blog ? Html::img('uploads/'.$model->gambar_blog, ['style'=>'width: 200px; height:200px']) : null, // checks the models to display the preview
                        ],
                        'initialCaption'=>$model->gambar_blog,
                        'overwriteInitial' => false,
                      ]
]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>