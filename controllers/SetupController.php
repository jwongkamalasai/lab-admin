<?php

namespace app\controllers;

use Yii;
use app\models\LabStd;
use app\models\LabStdSearch;
use app\models\Lab;
use app\models\LabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetupController implements the CRUD actions for LabStd model.
 */
class SetupController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all LabStd models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LabStdSearch();
        $query = Lab::find()->all();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LabStd model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new LabStd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Lab();
        $lab = LabStd::findOne($id);

        if($lab){
            $model->labcode = $lab->labcode;
            $model->labname = $lab->labname;
            $model->ptright = $lab->ptright;
            $model->cgd = $lab->cgd;
            $model->dbf = $lab->dbf;
            $model->dbfs = $lab->dbfs;
            $model->formi = $lab->formi;
            $model->forme = $lab->forme;
            $model->formh = $lab->formh;
            $model->laballow = $lab->laballow;
            $model->etype = $lab->etype;
            $model->formp = $lab->formp;
            $model->unit = $lab->unit;
            $model->pricelab = $lab->pricelab;
            $model->pricelabcgd = $lab->pricelabcgd;
            $model->tmlt = $lab->tmlt;
            $model->tmltname = $lab->tmltname;
            $model->loinc = $lab->loinc;
            $model->loincname = $lab->loincname;
            $model->save(false);
        }

        return $this->redirect(['view', 'id' => $model->labcode]);

    }

    /**
     * Updates an existing LabStd model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->labcode]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LabStd model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LabStd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return LabStd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lab::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
