<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%users_subscribe}}".
 *
 * @property int $from_users_id
 * @property int $to_users_id
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Users $fromUsers
 * @property Users $toUsers
 */
class UsersSubscribe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users_subscribe}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['from_users_id', 'to_users_id'], 'required'],
            [['from_users_id', 'to_users_id', 'created_at', 'updated_at'], 'integer'],
            [['from_users_id', 'to_users_id'], 'unique', 'targetAttribute' => ['from_users_id', 'to_users_id']],
            [['from_users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['from_users_id' => 'id']],
            [['to_users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['to_users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'from_users_id' => Yii::t('app', 'From Users ID'),
            'to_users_id' => Yii::t('app', 'To Users ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[FromUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFromUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'from_users_id']);
    }

    /**
     * Gets query for [[ToUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getToUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'to_users_id']);
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }
}
