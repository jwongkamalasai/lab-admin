<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LablabelStd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lablabel-std-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'labcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'labname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fieldname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fieldlabel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'normal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inputmask')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'crimin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'crimax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'critext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd10tm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmlt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loinc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
