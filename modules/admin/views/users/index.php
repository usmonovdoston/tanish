<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фойдаланувчилар';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Фойдаланувчи қўшиш', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model->status == 'nofaol')
                return [
                    'class' => 'danger'
                ];
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'label' => 'Rasm',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Yii::$app->urlManager->createUrl($data->image),['style'=>'width:100px']);
                }
            ], 
            'login',
            'parol',
            'ism',
            'familiya',
            'vaqt',
            // 'image',
            'jins',
            'status',
            // 'authKey',
            // 'accessToken',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {faollashtir}',
                'buttons' => [
                    'view' => function($url,$model){
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',$url,['title'=>'Ko`rish']);
                    },
                    'faollashtir' => function($url,$model,$key){
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>',$url,['title'=>'Faollashtirish']);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
