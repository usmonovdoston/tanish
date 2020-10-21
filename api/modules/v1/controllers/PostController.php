<?php

namespace app\api\modules\v1\controllers;

use app\models\Attachments;
use app\models\Post;
use yii\rest\ActiveController;
use yii\filters\VerbFilter;
use Yii;
/**
 * Country Controller API
 *
 * @author Omadbek Onorov <omadbek.onorov@gmail.com>
 */
class PostController extends ActiveController
{
    public $modelClass = 'app\api\modules\v1\models\Post';


//    public function behaviors()
//    {
//        return [
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'index' => ['get'],
//                    'view' => ['get'],
//                    'create' => ['post'],
//                    'update' => ['post'],
//                    'delete' => ['post'],
//                ],
//
//            ]
//        ];
//    }

    public function actionIndex(){
        return ['hello' => 'World'];
    }
    public function actionCreatePost()
    {
        $data = Yii::$app->request->post();
        $post = $data['Post'];
        $images = $data['image'];
        $response = [];
        $response['status'] = 0;
        $response['message'] = Yii::t('app', 'Error');
        $response['errors'] = [];
        if(empty($post['title'])){
            $response['message'] = Yii::t('app', '{title} cannot be blank.',[
                'title' => Yii::t('app', 'Title')
            ]);
            return $response;
        }
        if(empty($post['content'])){
            $response['message'] = Yii::t('app', '{content} cannot be blank.',[
                'content' => Yii::t('app', 'Content')
            ]);
            return $response;
        }
        $transaction = Yii::$app->db->beginTransaction();
        $saved = false;
        try {
            $model = new Post([
                'title' => $post['title'],
                'content' => $post['content']
            ]);
            if($model->save()){
                $saved = true;
                if(!empty($images)){
                    foreach ($images as $key => $image) {
                        $is_main = ($key==0)?true:false;
                        if(!$model->uploadBase64($image,$is_main)){
                            $saved = false;
                            break;
                        }
                    }
                }
            }else{
                $response['errors'] = $model->getErrors();
            }
            if($saved) {
                $transaction->commit();
                $response['status'] = 1;
                $response['message'] = Yii::t('app', 'Saved Successfully');
                $response['model'] = $model->toArray();
                $response['images'] = $model->getImages();
            }else{
                $transaction->rollBack();
            }
        } catch (\Exception $e) {
            Yii::info('Not saved' . $e, 'save');
            \yii\helpers\VarDumper::dump($e,10,true);
            $transaction->rollBack();
        }
        return $response;
    }
}


