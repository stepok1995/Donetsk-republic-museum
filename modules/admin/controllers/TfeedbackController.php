<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\TFeedback;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadFormHistory;
use yii\web\UploadedFile;
use yii\data\Pagination;

/**
 * ThistoryController implements the CRUD actions for THistory model.
 */
class TfeedbackController extends Controller
{
    /**
     * @inheritdoc
     */
	 	 public $layout="adminmain.php";
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
     * Lists all THistory models.
     * @return mixed
     */
    public function actionIndex()
    {
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model=TFeedback::find();
        $pagination = new Pagination([
            'defaultPageSize'=>10,
            'totalCount'=>$model->count()
            ]);
                $model=$model->offset($pagination->offset)
            ->limit($pagination->limit)
            ->orderBy(['date' => SORT_DESC])
		->all();
        return $this->render('index', [
			'model'=>$model, 'pagination'=>$pagination
        ]);
    }

     /**
     * Displays a single THistory model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    /**
     * Creates a new THistory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /**
     * Updates an existing THistory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
     public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return 'yes';     
            return $this->redirect(['index']);
          }
	
       
        

        return $this->render('update', ['model' => $model]);
    }

    /**
     * Deletes an existing THistory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the THistory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return THistory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TFeedback::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
