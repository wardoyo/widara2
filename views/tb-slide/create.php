<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbSlide */

$this->title = 'Create Tb Slide';
$this->params['breadcrumbs'][] = ['label' => 'Tb Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-slide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
