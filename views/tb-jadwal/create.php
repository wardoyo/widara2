<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbJadwal */

$this->title = 'Create Tb Jadwal';
$this->params['breadcrumbs'][] = ['label' => 'Tb Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-jadwal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
