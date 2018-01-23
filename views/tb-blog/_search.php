<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBlogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-blog-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_blog') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'isi') ?>

    <?= $form->field($model, 'gambar_blog') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
