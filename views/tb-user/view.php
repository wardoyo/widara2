<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbUser */

$this->title = $model->id_user;
$this->params['breadcrumbs'][] = ['label' => 'Tb Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_user], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_user], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_user',
            'username',
            'level',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
