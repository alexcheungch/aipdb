<?php
$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$config['base_url'] = $root;

$config = array(
    'captcha' => array(
        'img_path' => './captcha/',//驗證碼圖片的保存路徑，需能web訪問
        'img_url' => $root.'captcha/',//驗證碼圖片的web訪問路徑，以 / 結尾
        'img_width' => 130,
        'img_height' => 30,
        'expiration' => 300,
        'word_length' => 6,
        'font_size' => 20,
        'img_id' => 'captcha_id',
        'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        'colors' => array(
            'background' => array(255, 255, 255),
            'border' => array(255, 255, 255),
            'text' => array(0, 0, 0),
            'grid' => array(255, 40, 40)
        )
    )
);