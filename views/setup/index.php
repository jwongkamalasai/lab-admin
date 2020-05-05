<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LabStdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lab Stds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-std-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //= Html::a('Create Lab Std', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'labcode',
            'labname',
            'lab.labcode',
            'lab.labname',
            //'ptright',
            //'dbf',
            //'dbfs',
            //'cgd',
            //'formi',
            //'forme',
            //'formh',
            //'laballow',
            //'etype',
            //'formp',
            //'unit',
            //'tmlt',
            //'tmltname',
            //'loinc',
            //'loincname',
            [
                'class' => 'yii\grid\ActionColumn',
                'options'=>['style'=>'width:120px;'],
                'buttonOptions'=>['class'=>'btn btn-primary'],
                'template'=>'{create}',
                'buttons'=>[
                    'create' => function($url,$model,$key){
                      return Html::a('ADD',['setup/create','id'=>$model->labcode],['class' => 'btn btn-success']);
                    }
                ]
             ],
             [
                'class' => 'yii\grid\ActionColumn',
                'options'=>['style'=>'width:120px;'],
                'buttonOptions'=>['class'=>'btn btn-primary'],
                'template'=>'{update}',
                'buttons'=>[
                    'update' => function($url,$model,$key){
                      return Html::a('Update',['setup/update','id'=>$model->labcode],['class' => 'btn btn-warning']);
                    }
                ]
             ],
        ],
    ]); ?>


</div>
