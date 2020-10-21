<?php

namespace app\models;

use app\components\Util;
use Yii;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "{{%users_info}}".
 *
 * @property int $users_id
 * @property string|null $name
 * @property string|null $lastname
 * @property string|null $adress
 * @property int|null $birthday
 * @property string|null $birthplace
 * @property string|null $hobby
 * @property int|null $gender
 * @property string|null $avatar
 * @property string|null $image
 * @property string|null $profession
 * @property int|null $type
 * @property string|null $add_info
 * @property int|null $country_id
 * @property int|null $status
 *
 * @property Users $users
 */
class UsersInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users_info}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthday',],'safe'],
            [['gender', 'type', 'country_id', 'status'], 'integer'],
            [['add_info'], 'string'],
            [['name', 'lastname', 'adress', 'birthplace', 'hobby', 'avatar', 'image', 'profession'], 'string', 'max' => 255],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'users_id' => Yii::t('app', 'Users ID'),
            'name' => Yii::t('app', 'Name'),
            'lastname' => Yii::t('app', 'Lastname'),
            'adress' => Yii::t('app', 'Adress'),
            'birthday' => Yii::t('app', 'Birthday'),
            'birthplace' => Yii::t('app', 'Birthplace'),
            'hobby' => Yii::t('app', 'Hobby'),
            'gender' => Yii::t('app', 'Gender'),
            'avatar' => Yii::t('app', 'Avatar'),
            'image' => Yii::t('app', 'Image'),
            'profession' => Yii::t('app', 'Profession'),
            'type' => Yii::t('app', 'Type'),
            'add_info' => Yii::t('app', 'Add Info'),
            'country_id' => Yii::t('app', 'Country ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            $this->birthday = strtotime($this->birthday);
            return true;
        }else{
            return false;
        }
    }
    public function afterFind()
    {
        parent::afterFind();
        $this->birthday = date('d.m.Y', $this->birthday);
    }
    public function upload($file,$dir=null)
    {
        if (true) {
            $directory = ($dir!=null)?'uploads' . "/" . $dir . "/":'uploads' . "/";
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }
            $path = $directory.Util::generateRandomString() . '.' . $file->extension;
            if($file){
                if($file->saveAs($path)){
                    return $path;
                }
            }
        }
        return false;
    }
}
