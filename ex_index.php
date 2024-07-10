<?php
//Model, View and Controller(MVC) Framework

use Kiss\Core\Presenter;

require 'vendor/autoload.php';
require_once('config.php');

$module = (isset($_GET['module'])) ? $_GET['module'] : 'index';
$class = (isset($_GET['class'])) ? $_GET['class'] : $module;

$classFile = BASE_PATH . '/modules/' . $module . '/' . $class . '.php';
if (file_exists($classFile)) {
    require_once($classFile);
    if (class_exists($class)) {
        try {
            $instance = new $class($module);
            if ($instance->authenticate()) {
                try {
                    $instance->entry_point();
                    $presenter = Presenter::factory($instance);
                    $presenter->display();
                } catch (Exception $error) {
                    // Model 或 View 執行發生問題
                    die($error->getMessage());
                }
            } else {
                die('尚未登入系統, 無法瀏覽會員專屬網頁');
            }
        } catch (Exception $error) {
            // MVC 框架啟動發生問題
            die($error->getMessage());
        }
    } else {
        die("$class : 呼叫程式不正確");
    }
} else {
    die("$classFile : 呼叫程式不存在");
}