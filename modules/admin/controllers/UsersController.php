<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\models\Users;
use app\modules\models\UsersSearch;
use app\components\BoshqaController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends BoshqaController
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

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        date_default_timezone_set("Asia/Tashkent");
        $model = new Users();
        if($model->load(Yii::$app->request->post())){
                $login = $model->login;
                $parol = $model->parol;
                $ism = $model->ism;
                $familiya = $model->familiya;
                $vaqt = $model->vaqt;
                if($model->image = \yii\web\UploadedFile::getInstance($model,'image')) {
                    $model->image = \yii\web\UploadedFile::getInstance($model,'image');
                    $model->image->saveAs('uzer/'.$ism.$login.'.'.$model->image->extension);
                $rasm = "uzer/".$ism.$login.'.'.$model->image->extension;
                }else{
                    $rasm = "dist/img/user2-160x160.jpg";
                }
                $jins = $model->jins;
                $bor = \app\models\Foydalanuvchi::find()->where(['login'=>$login])->all();
            if ($bor) {
                    $javob = "bor";
            }else{ 
                
                $yuser = new Users;
                $yuser->login = $login;
                $yuser->parol = md5($parol);
                $yuser->ism = $ism;
                $yuser->familiya = $familiya;
                $yuser->vaqt = date('Y-m-d H:i:s');
                $yuser->authKey = $ism.$parol;
                $yuser->accessToken = $familiya.$parol;
                $yuser->image = $rasm;
                $yuser->status = 'faol';
                $yuser->jins = $jins;
                $yuser->save();
            }
        }
        if ($model->load(Yii::$app->request->post()) && $yuser->save()) {
            return $this->redirect(['view', 'id' => $yuser->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if($model->load(Yii::$app->request->post())){
            $login = $model->login;
            $parol = $model->parol;
            $ism = $model->ism;
            $familiya = $model->familiya;
            // $vaqt = $model->vaqt;
            if($model->image = \yii\web\UploadedFile::getInstance($model,'image')) {
                 $model->image = \yii\web\UploadedFile::getInstance($model,'image');
                $model->image->saveAs('uzer/'.$ism.$login.'.'.$model->image->extension);
                $rasm = "uzer/".$ism.$login.'.'.$model->image->extension;
            }else{
                $rasm = Yii::$app->request->post("rasm");
            } 
            $jins = $model->jins;

            $yuser = $this->findModel($id);
            $yuser->login = $login;
            $yuser->parol = md5($parol);
            $yuser->ism = $ism;
            $yuser->familiya = $familiya;
            // $yuser->vaqt = date('Y-m-d H:i:s');
            $yuser->authKey = $ism.$parol;
            $yuser->accessToken = $familiya.$parol;
            $yuser->image = $rasm;
            $yuser->status = 'faol';
            $yuser->jins = $jins;
            $yuser->save();
        }
        if ($model->load(Yii::$app->request->post()) && $yuser->save()) {
            return $this->redirect(['view', 'id' => $yuser->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $massiv = explode('/', $this->findModel($id)->image);
        chdir($massiv[0]);
        unlink($massiv[1]);
        $this->findModel($id)->delete();

         return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
     public function actionFaollashtir($id){
        $article = Users::findOne($id);
        $article->status = ($article->status=='faol') ? 'nofaol' : 'faol';
        $article->save();
        return $this->redirect(['index']);
    }
}
