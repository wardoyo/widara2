<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbSlide */

$this->title = 'Update Tb Slide: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_slide, 'url' => ['view', 'id' => $model->id_slide]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-slide-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
