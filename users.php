
<?php
include "apps/database/db.php";


$adds = selectALL('advertisement');

try {
    if (isset($_POST["name"])){
        $name = $_POST["name"];
        $description = $_POST["descr"];
        $username = $_POST["uname"];
        $cost = $_POST["price"];
        
        $post = [
                'name_of_service' => $name,
                'descr_of_service' => $description,
                'username' => $username,
                'cost' => $cost
            ];
        
            $id = insert('advertisement', $post);
            $last_row = selectOne('advertisement', ['id' => $id]);
    }
} catch (Exception $e) {
    // echo 'Caught exception: ',  $e->getMessage();
    echo 'Укажите стоимость услуги без пробелов и точек';
}