<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\TbBlog */
$this->title = 'Update Tb Blog: '.$model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Tb Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_blog, 'url' => ['view', 'id' => $model->id_blog]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-blog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>