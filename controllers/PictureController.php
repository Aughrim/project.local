<?php

namespace app\controllers;

use Yii;
use app\models\Picture;
use app\models\PictureSearch;
use app\models\TestModel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadFile;
use yii\web\Session;
use yii\web\UploadedFile;
use yii\bootstrap\Modal;
use yii\base\Component;
use yii\base\Event;


/**
 * PictureController implements the CRUD actions for Picture model.
 */
class PictureController extends Controller
{
    /**
     * @inheritdoc
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    /**
     * Lists all Picture models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PictureSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);



    }

    /**
     * Displays a single Picture model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Picture model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $testmodel = new TestModel();
        $testmodel->namemodel = 'Вы забыли добавить картринку';
        $testmodel->property = \Yii::$app->request->post();

        //$testmodel->property = $_FILES;

        $model = new Picture();



        if ($model->load(Yii::$app->request->post()) && $model->save() && $model->getAttribute('link') ): {

            return $this->redirect(['view', 'id' => $model->id]);


        } elseif($model->load(Yii::$app->request->post()) && !$model->getAttribute('link')):{


            return $this->render('create', [
                'model' => $model,
                'testmodel' => $testmodel,



            ]);
        }else:{
            return $this->render('create', [
                'model' => $model,

            ]);

        }endif;

    }



    /**
     * Updates an existing Picture model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }



    }

    /**
     * Deletes an existing Picture model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Picture model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Picture the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Picture::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionUpload()
    {
        $model = new UploadFile();
        $testmodel = new TestModel();
        $testmodel->properoty = \Yii::$app->request->post();
        $fileName = 'file';

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstanceByName($fileName);
            //$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            //$model->upload();
            if ($model->upload()) {
                // file is uploaded successfully
                echo \yii\helpers\Json::encode($model->imageFile);
                //}
            }

            return false;
            //return $this->render('upload_old', ['model' => $model]);
        }
        return false;
    }



    public function actionUpload11()
    {
        $fileName = 'file';
        $uploadPath = 'uploads';


        if (isset($_FILES[$fileName])) {

            $file = \yii\web\UploadedFile::getInstanceByName($fileName);

            //Print file data
            //print_r($file);
            $file->saveAs($uploadPath . '/' . $file->name);
          // if ($file->saveAs($uploadPath . '/' . $file->name)) {
                //Now save file data to database
               //
               //
            //   echo \yii\helpers\Json::encode($file);
              // echo 'file send';

//               return $file->name;
  //         }


        }
        return false;

    }


    public function actionAbout()
    {
        $message = 'ПриветБроy';
        return $this->render('about', ['message' => $message]);
    }
}
