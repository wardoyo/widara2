<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbProgram */

$this->title = 'Create Tb Program';
$this->params['breadcrumbs'][] = ['label' => 'Tb Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-program-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
