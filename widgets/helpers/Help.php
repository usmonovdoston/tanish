<?php


namespace app\widgets\helpers;


use Yii;

class Help
{
    public static function getAvatar($avatar)
    {
        if(file_exists($avatar)){
            return $avatar;
        }
        return 'dist/images/icons/no-image.png';
    }
    public static function getDate($data){
        $formatted_data = (time() - $data < (60 * 60 * 24)) ? Yii::$app->formatter->format(date($data), 'relativeTime') : date('d.m.Y H:i', $data);
        return $formatted_data;
    }
}