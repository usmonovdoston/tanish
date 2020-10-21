<?php
namespace app\components;
 
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
use yii\helpers\FileHelper;
class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $image;
 
    public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4,'checkExtensionByMimeType'=>false],
        ];
    }
     
    // public function upload($path)
    // {
    //      $directory = 'uploads' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR;
    //     if (!is_dir($directory)) {
    //         FileHelper::createDirectory($directory);
    //     }
    //     if ($this->validate()) { 
    //         foreach ($this->image as $file) {
    //             $filename=Yii::$app->getSecurity()->generateRandomString(15);
    //             // echo $filename;
    //             $file->saveAs('uploads/' . $filename . '.' . $file->extension);
    //         }
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    public function upload($path,$file)
    {
        $session = explode('/', $file->type);
        $session = $session[0];
        $directory = 'uploads' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $session . DIRECTORY_SEPARATOR;
        if (!is_dir($directory)) {
            FileHelper::createDirectory($directory);
        } 
        $filename=substr(md5($file->name),0,7).md5(date('dmyHis'));
        $save = $directory . $filename . '.' . $file->extension;
        $url = 'uploads/upload/'.$path.'/'.$session.'/'.$filename.'.'.$file->extension;
        $file->saveAs($save);
        return $url;
    }
    // public function upload($path,$imageFile)
    // {
        // $session = explode('/', $imageFile->type);
        // $session = $session[0];
    //     $directory = Yii::getAlias('@upload') . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $session . DIRECTORY_SEPARATOR;
    //     if (!is_dir($directory)) {
    //         \yii\helpers\FileHelper::createDirectory($directory);
    //     }

    //     if ($imageFile) {
    //         $uid = uniqid(time(), true);
    //         $fileName = $uid . '.' . $imageFile->extension;
    //         $filePath = $directory . $fileName;
    //         if ($imageFile->saveAs($filePath)) {
    //             $path = Yii::getAlias('@files').'/'. $path .'/'.$session.'/'.$fileName;
    //             return $path;
    //         }
    //     }

    //     return false;
    // }
    public function upload1()
    {
        if ($this->validate()) {
             $fileName = $this->imageFile->baseName . '.' . $this->imageFile->extension;
             $filePath = __DIR__ . '../../web/files/' . $fileName;
            $this->imageFile->saveAs($filePath);
            return $filePath;
        } else {
            return null;
        }
    }
    public function remove($path){
        foreach ($path as $key) {
            if($key!=''){
                if(file_exists($key)) {
                    unlink($key);
                }
            }
        }
    }
}