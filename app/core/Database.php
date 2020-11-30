<?php

class Database {

    

    private static function connect() {
        $pdo =  new PDO('mysql:host=mysql;dbname=aula', 'root', '12345');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public static function query($query, $params = array()) {
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }

    public static function add($sql, $params = array()){
        
        $stmt = self::connect()->prepare($sql);
        $stmt->execute($params);
        return true;
    }
}

?>