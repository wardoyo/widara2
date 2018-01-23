<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbProfile */

$this->title = 'Update Tb Profile: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
