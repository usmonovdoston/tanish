<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adda_users".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $authKey
 * @property string|null $accessToken
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property UsersInfo[] $usersInfos
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $confirm_password;
    const SCENARIO_CREATE  = 'create';
    const SCENARIO_UPDATE  = 'update';
    const SCENARIO_DELETE  = 'delete';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adda_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['password','confirm_password'], 'required','on' =>self::SCENARIO_CREATE],
            ['confirm_password', 'required', 'when' => function ($model) {
                return !empty($model->password);
            }, 'whenClient' => "function (attribute, value) {
                return $('#users-password').val() !== '';
            }", 'on' => self::SCENARIO_UPDATE],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username'], 'unique'],
            ['confirm_password', 'compare', 'compareAttribute'=> 'password', 'message'=>Yii::t('app', "Passwords don't match")],
            [['username', 'email'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 20],
            [['authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'authKey' => Yii::t('app', 'Auth Key'),
            'accessToken' => Yii::t('app', 'Access Token'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function beforeSave($insert)
    {
        if(!empty($this->password)) {
            $this->setPassword($this->password);
        }else{
            $this->password = $this->oldAttributes['password'];
        }
        return true;
    }
    /**
     * Gets query for [[UsersInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersInfos()
    {
        return $this->hasMany(UsersInfo::className(), ['users_id' => 'id']);
    }

    public function getInfo()
    {
        $info = "SELECT ui.*,u.username,c.nicename country,u.email,u.phone FROM {{%users_info}} ui
                    LEFT JOIN {{%users}} u ON u.id = ui.users_id
                    LEFT JOIN {{%country}} c ON ui.country_id = c.id
                    WHERE ui.users_id = {$this->id}";
        $user_info = Yii::$app->db->createCommand($info)->queryOne();
        return $user_info;
    }
    public static function getAuthorInfo($id)
    {
        $info = "SELECT ui.*,u.username,c.nicename country,u.email,u.phone FROM {{%users_info}} ui
                    LEFT JOIN {{%users}} u ON u.id = ui.users_id
                    LEFT JOIN {{%country}} c ON ui.country_id = c.id
                    WHERE ui.users_id = {$id}";
        $user_info = Yii::$app->db->createCommand($info)->queryOne();
        return $user_info;
    }
    public function getFullName()
    {
        $user_info = $this->getInfo();
        return $user_info['name']." ".$user_info['lastname'];
    }
    public static function findIdentity($id){
        return static::findOne($id);
    }

    public static function findByUsername($login){
        return static::findOne(['username'=>$login]);
    }

    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->authKey;
    }

    public function validateAuthKey($authKey){
        return $this->authKey === $authKey;
    }

    public function validatePassword($password){
        return $this->password === md5($password);
    }
    public function setPassword($password)
    {
        $this->password = md5($password);
    }
    public static function findIdentityByAccessToken($token,$type=null){
        return static::findOne(['accessToken'=>$token]);
    }
}