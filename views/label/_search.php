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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'labcode') ?>

    <?= $form->field($model, 'labname') ?>

    <?= $form->field($model, 'filename') ?>

    <?= $form->field($model, 'fieldname') ?>

    <?php // echo $form->field($model, 'fieldlabel') ?>

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
