<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LablabelStdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lablabel-std-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
    <div class="col-md-2 col-sm-4">
    <?= $form->field($model, 'labcode') ?>
    </div>
    <div class="col-md-2 col-sm-4">

    <?= $form->field($model, 'labname') ?>
    </div>
    <div class="col-md-2 col-sm-4">

    <?= $form->field($model, 'filename') ?>
    </div>
    <div class="col-md-2 col-sm-4">

    <?= $form->field($model, 'fieldname') ?>
    </div>
    <div class="col-md-2 col-sm-4">

    <?php echo $form->field($model, 'fieldlabel') ?>
    </div>
    </div>
    <?php // echo $form->field($model, 'normal') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'inputmask') ?>

    <?php // echo $form->field($model, 'crimin') ?>

    <?php // echo $form->field($model, 'crimax') ?>

    <?php // echo $form->field($model, 'critext') ?>

    <?php // echo $form->field($model, 'icd10tm') ?>

    <?php // echo $form->field($model, 'tmlt') ?>

    <?php // echo $form->field($model, 'loinc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
