<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property string $id
 * @property string $login
 * @property string $parol
 * @property string $ism
 * @property string $familiya
 * @property string $vaqt
 * @property string $image
 * @property string $jins
 * @property string $authKey
 * @property string $accessToken
 *
 * @property Maqola[] $maqolas
 * @property Maqolalar[] $maqolalars
 * @property Post[] $posts
 * @property Rukn[] $rukns
 * @property Yangilik[] $yangiliks
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'parol', 'ism', 'familiya', 'vaqt', 'jins'], 'required'],
            [['vaqt'], 'safe'],
            [['jins'], 'string'],
            [['login', 'ism', 'familiya', 'image', 'authKey', 'accessToken'], 'string', 'max' => 255],
            [['parol'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'parol' => 'Parol',
            'ism' => 'Ism',
            'familiya' => 'Familiya',
            'vaqt' => 'Vaqt',
            'image' => 'Image',
            'jins' => 'Jins',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaqolas()
    {
        return $this->hasMany(Maqola::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaqolalars()
    {
        return $this->hasMany(Maqolalar::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRukns()
    {
        return $this->hasMany(Rukn::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYangiliks()
    {
        return $this->hasMany(Yangilik::className(), ['user_id' => 'id']);
    }
}
