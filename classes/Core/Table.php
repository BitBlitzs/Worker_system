<?php

namespace Kiss\Core;

class Table extends Base
{
    protected $table;

    public function __construct($table)
    {
        parent::__construct();
        $this->table = $table;
    }

    //新增表格資料
    public function insertObject($fields)
    {
        //建立SQL指令
        $sql = 'INSERT INTO ' . $this->table . ' (';
        $data = '';
        $first = true;
        foreach ($fields as $name) {
            $this->$name = ($this->$name !== null) ? $this->db->quote($this->$name) : 'null';
            if ($first) {
                $sql .= $name;
                $data .= $this->$name;
                $first = false;
            } else {
                $sql .= ', ' . $name;
                $data .= ', ' . $this->$name;
            }
        }
        $sql .= ') VALUES (' . $data . ')';

        //執行SQL指令
        $affected = $this->execSQL($sql);

        return $affected;
    }

    //更新表格資料, 無法更新主鍵
    public function updateObject($fields, $primaryKeys)
    {
        //建立SQL指令
        $sql = 'UPDATE ' . $this->table . ' SET ';
        $first = true;
        foreach ($fields as $name) {
            if (!in_array($name, $primaryKeys)) {
                $this->$name = ($this->$name !== null) ? $this->db->quote($this->$name) : 'null';
                if ($first) {
                    $sql .= $name . ' = ' . $this->$name;
                    $first = false;
                } else {
                    $sql .= ', ' . $name . ' = ' . $this->$name;
                }
            }
        }
        $sql .= $this->getWhereClause($primaryKeys);

        //執行SQL指令
        $affected = $this->execSQL($sql);

        return $affected;
    }

    //刪除表格資料
    public function deleteObject($primaryKeys)
    {
        //建立SQL指令
        $sql = 'DELETE FROM ' . $this->table;
        $sql .= $this->getWhereClause($primaryKeys);

        //執行SQL指令
        $affected = $this->execSQL($sql);

        return $affected;
    }

    //查詢表格資料
    public function selectObject($fields, $whereValues, $isThrowError = true)
    {
        //建立SQL指令
        $sql = 'SELECT ' . implode(', ', $fields) . ' FROM ' . $this->table;
        $sql .= $this->getWhereClause($whereValues);

        if (SQL_DEBUG_MODE) {
            $this->logger->debug($sql);
        }

        $error = false;
        //執行SQL指令
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
            if (empty($result)) {
                $error = true;
            }
        } catch (\PDOException $e) {
            $error = true;
        }

        if ($error) {
            //決定是否要主動丟出異常處理到控制器? 
            //$isThrowError為false表示由呼叫層自行處理異常
            if ($isThrowError) {
                throw new \Exception("查詢失敗");
            } else {
                return false;
            }
        }

        //根據查詢結果, 設定各欄位同名物件變數和資料
        $this->setFrom($result);

        return true;
    }

    //計算符合條件的表格資料筆數
    public function countObject($whereValues = null)
    {
        // 建立SQL指令
        $sql = 'SELECT COUNT(*) AS count FROM ' . $this->table;
        $sql .= $this->getWhereClause($whereValues);

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

        return $row['count'];
    }

    //根據資料庫查詢結果, 設定各欄位同名物件變數和資料
    public function setFrom($data)
    {
        if (is_array($data) && count($data)) {
            foreach ($data as $var => $val) {
                $this->$var = $val;
            }
        }
    }

    //建立WHERE查詢語法
    public function getWhereClause($whereValues)
    {
        $sql = '';
        if ($whereValues == null)
            return $sql;

        if (count($whereValues) > 0) {
            $sql = ' WHERE ';
            $first = true;
            foreach ($whereValues as $key => $value) {
                if (!$first) {
                    $sql .= ' AND ';
                }
                $sql .= $key . ' = ' . $this->db->quote($value);
                $first = false;
            }
        }

        return $sql;
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}