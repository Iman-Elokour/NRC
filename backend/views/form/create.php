<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = 'Create Form';
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-create">

    <h1>Fill Form</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
