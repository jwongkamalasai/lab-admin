<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LabStd */

$this->title = $model->labcode;
$this->params['breadcrumbs'][] = ['label' => 'Lab Stds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lab-std-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->labcode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->labcode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'labcode',
            'labname',
            'pricelab',
            'pricelabcgd',
            'ptright',
            'dbf',
            'dbfs',
            'cgd',
            'formi',
            'forme',
            'formh',
            'laballow',
            'etype',
            'formp',
            'unit',
            'tmlt',
            'tmltname',
            'loinc',
            'loincname',
        ],
    ]) ?>

</div>
