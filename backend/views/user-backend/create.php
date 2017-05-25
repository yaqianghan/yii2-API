<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserBackend */

$this->title = 'Create User Backend';
$this->params['breadcrumbs'][] = ['label' => 'User Backends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-backend-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
