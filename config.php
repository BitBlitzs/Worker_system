<?php

  //環境配置
  ini_set('display_errors',  'on');    
  ini_set('date.timezone', 'Asia/Taipei'); 
  ini_set('session.cookie_lifetime', 0);     // 表示 Cookie 存活至關閉瀏覽器
  ini_set('session.gc_maxlifetime', 3600);   // 表示 Session 逾期時間為 60 分鐘
  
  //網站網址
  define('BASE_URI', 'http://127.0.0.1');  

  //網站文件目錄
  define('BASE_PATH', 'c:/xampp/htdocs');
  
  //SMARTY樣板引擎目錄
  define('SMARTY_TPL_DIR', 'c:/xampp/htdocs/tpl');  

  //資料庫參數
  define('MYSQL_DSN', 'mysql:host=127.0.0.1;dbname=test');
  define('MYSQL_USERNAME', 'root');
  define('MYSQL_PASSWORD', '');

  //日誌檔案
  define('LOG_FILE', 'website.log');

  //資料庫SQL語句記錄開關
  define('SQL_DEBUG_MODE', true);

?>