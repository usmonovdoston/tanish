<?php

namespace app\components;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
class BoshqaController extends Controller{
    public $layout = 'admin.php';
    
    public function __construct($id,$module,$config=[]){
        parent::__construct($id,$module,$config);
    }
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','admin','view','update','delete','index'],
                'rules' => [
                    [
                        'actions' => ['logout','admin','view','update','delete','index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // [
                    //     'actions' => ['reg'],
                    //     'allow' => true,
                    //     'roles' => ['?'],
                    // ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
}
