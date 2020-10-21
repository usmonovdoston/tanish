<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%attachments}}".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $size
 * @property string|null $extension
 * @property string|null $type
 * @property string|null $path
 * @property string|null $directory
 * @property string|null $model_name
 * @property int|null $is_main
 * @property int|null $item_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Attachments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%attachments}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size', 'is_main', 'item_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'path', 'directory', 'model_name'], 'string', 'max' => 255],
            [['extension'], 'string', 'max' => 20],
            [['type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'size' => Yii::t('app', 'Size'),
            'extension' => Yii::t('app', 'Extension'),
            'type' => Yii::t('app', 'Type'),
            'path' => Yii::t('app', 'Path'),
            'directory' => Yii::t('app', 'Directory'),
            'model_name' => Yii::t('app', 'Model Name'),
            'is_main' => Yii::t('app', 'Is Main'),
            'item_id' => Yii::t('app', 'Item ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
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
