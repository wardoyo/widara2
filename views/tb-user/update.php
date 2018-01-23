<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbUser */

$this->title = 'Update Tb User: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id' => $model->id_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
