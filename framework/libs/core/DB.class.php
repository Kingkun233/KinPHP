<?php

class DB
{

    public static $db;

    public static function init($dbtype, $config)
    {
        self::$db = $dbtype::getInstance($config);
    }

    public static function select($table, $field, $arr)
    {
        return self::$db->select($table, $field, $arr);
    }

    public static function add($table, $arr)
    {
        return self::$db->add($table, $arr);
    }

    public static function update($table, $where, $arr)
    {
        return self::$db->update($table, $where, $arr);
    }

    public static function del($table, $where)
    {
        return self::$db->del($table, $where);
    }

}

?>