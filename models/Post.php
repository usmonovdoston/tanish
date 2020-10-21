<?php

namespace app\models;

use app\components\behaviors\CustomSluggableBehavior;
use app\components\behaviors\OurCustomBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "{{%post}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $excerpt
 * @property string|null $content
 * @property int|null $type
 * @property string|null $add_info
 * @property int|null $view
 * @property int|null $last_read
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%post}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'add_info'], 'string'],
            [['type', 'view', 'last_read', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['title', 'slug', 'excerpt'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'excerpt' => Yii::t('app', 'Excerpt'),
            'content' => Yii::t('app', 'Content'),
            'type' => Yii::t('app', 'Type'),
            'add_info' => Yii::t('app', 'Add Info'),
            'view' => Yii::t('app', 'View'),
            'last_read' => Yii::t('app', 'Last Read'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => OurCustomBehavior::className(),
                'updatedByAttribute' => 'updated_by',
            ],
            [
                'class' => TimestampBehavior::className(),
            ],
            [
                'class' => CustomSluggableBehavior::className(),
                'attribute' => 'title',
                'ensureUnique' => true
              // 'slugAttribute' => 'slug',
            ],
        ];
    }
    public static function getModelName()
    {
        return StringHelper::basename(get_class(new self()));
    }

    public function getImage()
    {
        return $this->hasMany(Attachments::className(), ['item_id' => 'id'])->select('item_id,model_name,path')->where(['model_name' => self::getModelName()]);
    }
    public function uploadBase64($imageFile,$is_main=false)
    {
        if ($imageFile) {
            $img = explode(',', $imageFile);
            $data = base64_decode($img[1]);
            $ini = substr($img[0], 11);
            $types = explode(';', $ini)[0];
            $data = $imageFile;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            switch ($types){
                case 'jpeg':
                    break;
                case 'gif':
                    break;
                case 'jpg':
                    break;
                case 'png':
                    break;
                case 'bmp':
                    break;
                case 'jfif':
                    break;
                default:
                    return false;
            }
            $base_url = Yii::getAlias('@uploads');
            $directory = 'uploads/attachments';
            if (!is_dir($base_url.'/attachments')) {
                \yii\helpers\FileHelper::createDirectory($base_url.'/attachments');
            }
            $uid = uniqid('a',time());
            $fileName = $uid . '.' . $types;
            $filePath = $directory . '/' . $fileName;
            if ($success = file_put_contents($base_url.'/attachments/'.$fileName, $data)) {
                if ($success) {
                    $attachments = new Attachments([
                        'name' => $fileName,
                        'extension' => $types,
                        'type' => 'image',
                        'size' => self::getBase64ImageSize($imageFile),
                        'path' => $filePath,
                        'item_id' => $this->id,
                        'model_name' => self::getModelName(),
                        'is_main' => $is_main ? 1 : 0
                    ]);
                    if ($attachments->save()){
                        return true;
                    }
                }
            }
        }
        return false;
    }
    public static function getBase64ImageSize($base64Image,$type='size_in_bytes'){ //return memory size in B, KB, MB
        try{
            $size_in_bytes = (int) (strlen(rtrim($base64Image, '=')) * 3 / 4);
            $size_in_kb    = $size_in_bytes / 1024;
            $size_in_mb    = $size_in_kb / 1024;
            return $$type;
        }
        catch(Exception $e){
            return $e;
        }
    }
    public function getImages(){
        $images = Attachments::find()->where(['model_name'=>self::getModelName(),'item_id'=>$this->id])->asArray()->orderBy(['is_main'=>SORT_DESC])->all();
        return $images;
    }

    public static function getPost($limit=15,$offset=0)
    {
        $post = self::find()->alias('p')->select('p.id,p.title,p.content,p.created_by,p.created_at')->joinWith('image')->orderBy(['id'=>SORT_DESC])->limit($limit)->offset($offset)->asArray()->all();
        return $post;
    }
    protected function folder_exist($folder)
    {
        // Get canonicalized absolute pathname
        $path = realpath($folder);

        // If it exist, check if it's a directory
        return ($path !== false AND is_dir($path)) ? $path : false;
    }
}
