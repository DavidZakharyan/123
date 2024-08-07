<?php

require 'connect.php';

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function dbCheckError($query){
    $errorInfo = $query->errorInfo();
    if ($errorInfo[0] !== PDO::ERR_NONE){
    echo $errorInfo[2];
    exit();
    }
    return true;
}

// Запрос на получение данных с одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}


// Запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

//Запись в таблицу БД
function insert($table, $params){
    global $pdo;
    $columns = '';
    $placeholders = '';
    $values = [];
    foreach ($params as $key => $value) {
        if ($columns == '') {
            $columns = "$key";
            $placeholders = ":$key";
        } else {
            $columns .= ", $key";
            $placeholders .= ", :$key";
        }
        $values[":$key"] = $value;
    }

    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

    $query = $pdo->prepare($sql);
    $query->execute($values);
    dbCheckError($query);
    return $pdo->lastInsertId();
}

// Обновление строки в таблице
function update($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value) {
        if ($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }else {
            $str = $str .", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);

}

// Удаление строки в таблице
function delete($table, $id){
    global $pdo;
    $sql = "DELETE FROM $table WHERE id =". $id;
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

}