Yii2 виджет для работы с WEB камерой
================================
[Идея, взята здесь](https://myrusakov.ru/javascript-take-photos.html)

## Назначение виджета
Захват изображения с WEB камеры, сохраниение снимка в формате base64, для последующей передачи через input формы на сервер. 
Далее, на сервере, изображение можно либо преобразовать в файл с последуюшим сохранением в файловой системе,
либо непосредственно записать в базу данных в формате base64.

## Системные требования
Yii2 с установленным расширением "yiisoft/yii2-bootstrap" (входит в пакет установки Yii2 по умолчанию yiisoft/yii2-app-basic и yii2-app-advanced)
Виджет, тестировался в браузерах:
- Google Chrome v. 53.0.2785.116
- Firefox v. 48.0.2

## Установка
Добавить в секцию "require" файла composer.json:
``` json
{
    "require": {
        "dostonusmonov/yii2-snap-shoot": "dev-master"
    }
}
```
После редактирования файла выполнить команду `composer update`

## Использование
В представлении, где будет использоваться yii2-snap-shoot, подключить:
``` php
use dostonusmonov\widgets\WebcamShoot;
```
Вывести виджет:
``` php
echo WebcamShoot::widget([
    'targetInputID' => 'textimg',
    'targetImgID' => 'textphoto',
]);
```

Важную роль, играют свойства 'targetInputID' и 'targetImgID'...

На сервере, изображение в формате base64, можно обратотать, например так:
``` php
define('UPLOAD_DIR', 'img/');
$img = $_POST['textimage']; //Атрибут инпута с name = textimage
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR .  uniqid() . '.png';
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
```
OR

``` php
public function actionCreate()
{
    $model = new Model();
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        $imgType = Yii::$app->request->post('img-type');
        if ($imgType=='file') {
            if ($file = UploadedFile::getInstance($model, 'image')) {
                $model->image = $model->upload($model->ism . $model->familiya . "(" . $model->birthday . ")", $file);
            }
        }elseif ($imgType=='camera'){
            $model->image = $model->uploadBase64($model->ism . $model->familiya . "(" . $model->birthday . ")", $model->image);
        }
        if($model->save()){
            return $this->redirect(['view', 'id' => $model->id]);
        }
    }

    return $this->render('create', [
        'model' => $model
    ]);
}
// Model
public function upload($folder,$imageFile)
    {
        $session = explode('.', $imageFile->name);
        $session = $session[0];
        $directory = 'uploads' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR;
        if (!is_dir($directory)) {
            \yii\helpers\FileHelper::createDirectory($directory);
        }

        if ($imageFile) {
            $uid = date("Y-m-d-H-i-s")."-".$session;
            $fileName = $uid . '.' . $imageFile->extension;
            $filePath = $directory . $fileName;
            if ($imageFile->saveAs($filePath)) {
                $path = 'uploads/upload/'.$folder.'/'.$fileName;
                return $path;
            }
        }

        return false;
    }
    public function uploadBase64($folder,$imageFile)
    {
        if ($imageFile) {
            $img = $imageFile;
            $img = str_replace('data:image/png;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);

            $session = explode('.', $data->name);
            $session = $session[0];
            $directory = 'uploads/upload/' . $folder;
            if (!is_dir($directory)) {
                \yii\helpers\FileHelper::createDirectory($directory);
            }
            $uid = date("Y-m-d-H-i-s") . "-" . $session;
            $fileName = $uid . '.png';
            $filePath = $directory . '/' . $fileName;
            $success = file_put_contents($filePath, $data);
            if ($success) {
                $path = 'uploads/upload/' . $folder . '/' . $fileName;
                return $path;
            }
        }

        return false;
    }