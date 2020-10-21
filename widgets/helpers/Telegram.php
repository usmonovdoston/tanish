<?php
/**
 * Created By PhpStorm
 * User Doston Usmonov
 * Time: 20.06.20 23:42
 */

namespace app\widgets\helpers;

class Telegram
{
    public $token;
    public $text;
    public $id;
    public $module;
    public $controller;
    public function __construct($params = [
        'token' => '1253118922:AAH5C--THzVsGqNHhgWHM2OccsgXuTWRW7A',
        'id' => 376544097,
        'text' => 'Salom',
        'module' => 'Tikuv',
        'controller' => 'Tikuv',
        'send_content' => false
    ])
    {
        $this->token = $params['token'] ?? '1253118922:AAH5C--THzVsGqNHhgWHM2OccsgXuTWRW7A';
        $this->id = $params['id'] ?? 376544097;
        $this->text = $params['text'] ?? 'Text yozilmadi';
        $this->module = $params['module'] ?? 'Tikuv';
        $this->controller = $params['controller'] ?? 'TikuvGoodsDocPackController';
        if(empty($params['send_content'])){
            $this->sendMessage();
        }
    }

    public function sendMessage() {
        define('TELEGRAM_TOKEN', $this->token);
        $url = $_SERVER['HTTP_HOST'];
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => $this->id,
                    'text' => '#'.$url.' #'.$this->module.' '.'#'.$this->controller.' '.mb_convert_encoding($this->text, "UTF-8", "cp1251"),
                ),
            )
        );
        curl_exec($ch);
    }
    public function sendContent() {
        file_get_contents("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->id}&text=" . urlencode($this->text).'&parse_mode=Markdown');
    }
}