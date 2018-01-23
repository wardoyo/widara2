<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbProfile */

$this->title = 'Create Tb Profile';
$this->params['breadcrumbs'][] = ['label' => 'Tb Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
