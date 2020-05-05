<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LabStd */

$this->title = 'Update Lab Std: ' . $model->labcode;
$this->params['breadcrumbs'][] = ['label' => 'Lab Stds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->labcode, 'url' => ['view', 'id' => $model->labcode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lab-std-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
