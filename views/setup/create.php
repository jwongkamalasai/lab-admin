<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LabStd */

$this->title = 'Create Lab Std';
$this->params['breadcrumbs'][] = ['label' => 'Lab Stds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-std-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
