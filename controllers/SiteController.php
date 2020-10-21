<?php

namespace app\controllers;

use app\models\Post;
use app\models\Users;
use app\models\UsersInfo;
use Yii;
use yii\filters\AccessControl;
use app\components\SaytController;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class SiteController extends SaytController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index',[
            'post' => Post::getPost(15)
        ]);
    }
    public function actionAbout()
    {
        return $this->render('about',[
        ]);
    }
    public function actionFriends()
    {
        return $this->render('friends',[
        ]);
    }
    public function actionProfile()
    {
        return $this->render('profile',[
        ]);
    }
    public function actionPhotos()
    {
        return $this->render('photos',[
        ]);
    }
    public function actionSignUp()
    {
        return $this->render('sign-up',[
        ]);
    }
    public function actionView()
    {
        if(Yii::$app->request->isAjax){
            $son = $_POST["page"];
            $mod = \app\models\Yangilik::findOne($son);
            $mod->updateCounters(['view'=>1]);
            $mod->save();
        }
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $users = new Users();
        $users->scenario = $users::SCENARIO_CREATE;
        $user_info  = new UsersInfo();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        if ($users->load(Yii::$app->request->post())) {
            $transaction = Yii::$app->db->beginTransaction();
            $saved = false;
            try {
                if($users->save()){
                    if($user_info->load(Yii::$app->request->post())){
                        $user_info->users_id = $users->id;
                        if($user_info->save()){
                            $saved = true;
                        }else{
                            $saved = false;
                        }
                    }
                }
                if($saved) {
                    $transaction->commit();
                }else{
                    $transaction->rollBack();
                }
            } catch (\Exception $e) {
                Yii::info('Not saved' . $e, 'save');
                $transaction->rollBack();
            }
        }
        return $this->render('login', [
            'model' => $model,
            'users' => $users,
            'user_info' => $user_info,
        ]);
    }
    public function actionSettings()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $user_id = Yii::$app->user->id;
        $users = Users::findOne($user_id);
        $users->scenario = $users::SCENARIO_UPDATE;
        $user_info  = UsersInfo::findOne(['users_id'=>$users->id]) ?? new UsersInfo();
        $users->password = '';
        if ($users->load(Yii::$app->request->post())) {
            $transaction = Yii::$app->db->beginTransaction();
            $saved = false;
            try {
                if($users->save()){
                    if($user_info->load(Yii::$app->request->post())){
                        $user_info->users_id = $users->id;
                        $old_attributes = $user_info->oldAttributes;
                        if($user_info->save()){
                            $image = UploadedFile::getInstance($user_info, 'image');
                            $image_path = $user_info->upload($image,$user_id);
                            if($image_path){
                                $user_info->image = $image_path;
                            }else{
                                $user_info->image = $old_attributes['image'];
                            }
                            $avatar = UploadedFile::getInstance($user_info, 'avatar');
                            $avatar_path = $user_info->upload($avatar,$user_id);
                            if($avatar_path){
                                $user_info->avatar = $avatar_path;
                            }else{
                                $user_info->avatar = $old_attributes['avatar'];
                            }
                            $user_info->save(false);
                            $saved = true;
                        }else{
                            $saved = false;
                        }
                    }
                }else{
                    \yii\helpers\VarDumper::dump($users->getErrors(),10,true);
                }
                if($saved) {
                    $transaction->commit();
                    return $this->redirect('site/profile');
                }else{
                    $transaction->rollBack();
                }
            } catch (\Exception $e) {
                Yii::info('Not saved' . $e, 'save');
                $transaction->rollBack();
            }
        }
        return $this->render('settings', [
            'users' => $users,
            'user_info' => $user_info,
        ]);
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionChangeLang(){
        if(isset($_GET['lang'])){
            Yii::$app->language = $_GET['lang'];
            $cookie = new \yii\web\Cookie([
                'name' => 'lang',
                'value' => $_GET['lang']
            ]);
            Yii::$app->response->cookies->add($cookie);
        }
        return $this->redirect(Yii::$app->request->referrer);
    }
}
