<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbUser */

$this->title = 'Create Tb User';
$this->params['breadcrumbs'][] = ['label' => 'Tb Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
