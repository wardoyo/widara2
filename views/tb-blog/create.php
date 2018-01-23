<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBlog */

$this->title = 'Create Tb Blog';
$this->params['breadcrumbs'][] = ['label' => 'Tb Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-blog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
