<?php

namespace Kiss\Core;

//Module : 邏輯層的通用類別, 決定要使用的表現層和設置 session 功能
//邏輯層共用的函式或變數都可以放在這個類別

abstract class Module extends Base {
    public $moduleName;
    public $className;

    //Model 所使用的 View (預設使用 Smarty 樣板引擎)
    public $presenter = 'smarty';

    //儲存 Model 傳送到 View 的結構變數
    protected $data = array();

    //PHP 的 $_SESSION 變數封裝實體
    public $session;

    public function __construct($moduleName, $className) {
        parent::__construct();
        $this->moduleName = $moduleName;
        $this->className = $className;
        $this->session = Session::singleton();
        /* if (!is_numeric($this->session->UserID)) {
             $this->session->UserID = 0;
         }*/
        if(!isset($_SESSION["UserID"]))
            $this->session->UserID = 0;
        if(!isset($_SESSION["BrandID"]))
            $this->session->BrandID = 0;
    }

    //Model 用來將資料設定進結構變數
    public function set($var, $val) {
        $this->data[$var] = $val;
    }

    //View 用來讀取整個結構變數
    public function getData() {
        return $this->data;
    }

    public function __destruct() {
        parent::__destruct();
    }
}