<?php

namespace app\controllers;

use Yii;
use app\models\Problem;
use app\models\Category;
use app\models\Type;
use app\models\Search;
use app\models\ProblemSearch;
use app\models\ProblemCreate;
use app\models\ProblemDeny;
use app\models\ProblemClose;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProblemController implements the CRUD actions for Problem model.
 */
class ProblemController extends Controller
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
     * Lists all Problem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProblemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Problem model.
     * @param integer $id
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
     * Creates a new Problem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Problem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Problem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);



    }

    /**
     * Deletes an existing Problem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if($this->findModel($id)->status=='Новый'){
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', 'Заявка успешно удалена');
        }
        else{
            Yii::$app->session->setFlash('error', 'Удаление заявки невозможно');
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Problem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Problem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Problem::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDeny($id)
    {
        $model = ProblemDeny::findOne($id);

        if ($this->request->isPost && $model->load($this->request->post()
        )){
            $model->status='Отклонен';
            if($model->save()){ //???
                Yii::$app->session->setFlash('sucess', 'Заявка успешно отклонена');
            }
        
            else{
            Yii::$app->session->setFlash('error', 'Ошибка');
            }
        return $this->redirect(['index']);
        }
        
        return $this->render('deny', [
            'model' => $model,
        ]);
    
    }

    public function actionClose($id)
    {
        $model = ProblemClose::findOne($id);

        if ($this->request->isPost && $model->load($this->request->post()
        )){
            $model->status='Оформлен';


            if($model->save()){ //???
                Yii::$app->session->setFlash('sucess', 'Заявка успешно закрыта');
            }
        
            else{
            Yii::$app->session->setFlash('error', 'Ошибка');
            }
        return $this->redirect(['index']);
        }
        
        return $this->render('close', [
            'model' => $model,
        ]);
    
    }
}
