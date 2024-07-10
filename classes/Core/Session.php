<?php

namespace Kiss\Core;

//Session : 封裝PHP 的$_SESSION變數作為類別使用

class Session
{
    //session 的單體(singleton)模式實例
    private static $instance;

    //儲存 PHP 指派的 session ID
    public static $sessionID;

    private function __construct()
    {
        session_start();
        self::$sessionID = session_id();
    }

    //單體模式, 類別的統一呼叫入口
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    //銷毀所有 session
    public function destroy()
    {
        foreach ($_SESSION as $var => $val) {
            $_SESSION[$var] = null;
        }
        session_destroy();
    }

    //透過 PHP 多載(overloading)改寫 __get 和 __set, 可以使用 $session->var = $val 來操作 $_SESSION
    //取得session變數值
    public function __get($var)
    {
        return $_SESSION[$var];
    }
    
    //設定session變數值
    public function __set($var, $val)
    {
        return ($_SESSION[$var] = $val);
    }

    public function __destruct()
    {
        session_write_close();
    }
}