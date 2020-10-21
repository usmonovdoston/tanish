<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "adda_country".
 *
 * @property int $id
 * @property string|null $iso
 * @property string|null $name
 * @property string|null $nicename
 * @property string|null $iso3
 * @property int|null $numcode
 * @property int|null $phonecode
 * @property int|null $status
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adda_country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numcode', 'phonecode', 'status'], 'integer'],
            [['iso'], 'string', 'max' => 2],
            [['name', 'nicename'], 'string', 'max' => 80],
            [['iso3'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'iso' => Yii::t('app', 'Iso'),
            'name' => Yii::t('app', 'Name'),
            'nicename' => Yii::t('app', 'Nicename'),
            'iso3' => Yii::t('app', 'Iso3'),
            'numcode' => Yii::t('app', 'Numcode'),
            'phonecode' => Yii::t('app', 'Phonecode'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public static function getList()
    {
        $list = self::find()->select('id,nicename')->asArray()->all();
        return ArrayHelper::map($list, 'id', 'nicename');
    }
}
