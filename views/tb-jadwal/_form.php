<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TbKategori;
use yii\jui\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\TbJadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->widget(\yii\jui\DatePicker::className(),[
        'language' => 'en',
        'dateFormat' => 'yyyy-MM-dd'
    ]) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_kategori')->dropDownList(ArrayHelper::map(TbKategori::find()->all(), 'id_kategori', 'kategori'),
    ['prompt'=>'--Select--']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
