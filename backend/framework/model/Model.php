<?php

require locate('/framework/database/ConnectionPool.php');
require locate('/framework/helpers/string_literals.php');

class Model {

    private static function get_base_table() {
        $class_name = get_called_class();
        $instance = new $class_name();

        return $instance->base_table ?? class_to_table_name($class_name);
    }

    public static function all() {
        $pdo = ConnectionPool::instance()->getConnection();
        $base_table = self::get_base_table();

        $stmt = $pdo->prepare("SELECT * FROM $base_table");

        $stmt->execute();

        // Fetch results
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public static function create(Array $arr) {
        $pdo = ConnectionPool::instance()->getConnection();
        $base_table = self::get_base_table();

        $keys = array_keys($arr);
        $str_keys = implode(', ', $keys);

        $params = [];

        foreach($keys as $param) {
            $params[] = ':' . $param;
        }
        $str_params = implode(', ', $params);

        $stmt = $pdo->prepare("INSERT INTO $base_table ($str_keys) VALUES ($str_params)");

        foreach($arr as $key => $value) {
            $stmt->bindParam(":$key", $value, PDO::PARAM_STR);
        }

        if($stmt->execute()) {
            $lastInsertId = $pdo->lastInsertId();

            $stmt = $pdo->prepare("SELECT * FROM $base_table WHERE id = :id");
            $stmt->bindParam(':id', $lastInsertId);
            $stmt->execute();

            $recentRecord = $stmt->fetch(PDO::FETCH_ASSOC);
            

            return $recentRecord;
        }

        return null;
    }

    static function find($param) {
        $pdo = ConnectionPool::instance()->getConnection();
        $base_table = self::get_base_table();

        $stmt = $pdo->prepare("SELECT * FROM $base_table WHERE id = :id LIMIT 1");
        $stmt->bindParam(":id", $param, PDO::PARAM_INT);

        if($stmt->execute()) {
            $recentRecord = $stmt->fetch(PDO::FETCH_ASSOC);
            return $recentRecord;
        }

        return null;
    }
}