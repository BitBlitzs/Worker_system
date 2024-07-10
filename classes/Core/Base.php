<?php

namespace Kiss\Core;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;

//Base : 邏輯層的最基本類別, 提供資料庫和日誌功能

abstract class Base
{
    protected $logger;
    protected $db;    
    
    public function __construct()
    {
        static $sLog = null;
        static $sDB = null;

        if ($sLog == null) $sLog = $this->getLogger(LOG_FILE);
        $this->logger = $sLog;
        if ($sDB == null) $sDB = $this->getDbConnection(MYSQL_DSN);
        $this->db = $sDB;
    }
    
    //取得 Monolog 日誌紀錄元
    public function getLogger($file)
    {
        $logger = new Logger('kiss');
        $stream_handler = new StreamHandler($file, Logger::DEBUG);
        $output = "%level_name% | %datetime% > %message% | %context% %extra%\n";
        $dateFormat = 'Y-m-d H:i:s';
        $formatter = new LineFormatter($output, $dateFormat);
        $stream_handler->setFormatter($formatter);
        $logger->pushHandler($stream_handler);

        return $logger;
    }
    
    //取得 MySQL 資料庫連線
    public function getDbConnection($dsn)
    {
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        ];
        try {
            $pdo = new \PDO(MYSQL_DSN, MYSQL_USERNAME, MYSQL_PASSWORD, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }

        return $pdo;
    }
    
    //查詢資料, 並且以陣列方式送回全部結果
    public function getAll($sql)
    {
        if (SQL_DEBUG_MODE) {
            $this->logger->debug($sql);
        }

        try {        
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
        } catch (\PDOException $e) {
            throw new \Exception("查詢失敗");
        }        

        return $result;
    }

    //查詢資料, 並且以陣列方式只送回第一筆資料
    public function getRow($sql)
    {
        if (SQL_DEBUG_MODE) {
            $this->logger->debug($sql);
        }

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch();
        } catch (\PDOException $e) {
            throw new \Exception("查詢失敗");
        }

        return $row;
    }
    
    //執行 insert/update/delete 的SQL指令, 送回影響筆數
    public function execSQL($sql)
    {
        if (SQL_DEBUG_MODE) {
            $this->logger->debug($sql);
        }

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \Exception("執行失敗");
        }

        return $stmt->rowCount();
    }

    public function __destruct()
    {

    }
}