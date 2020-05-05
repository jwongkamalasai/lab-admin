<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LabStd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-std-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'labcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'labname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pricelab')->textInput() ?>

    <?= $form->field($model, 'pricelabcgd')->textInput() ?>

    <?= $form->field($model, 'ptright')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dbf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dbfs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cgd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laballow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'etype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmlt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmltname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loinc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loincname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
