<?php

try {

    $db = new PDO("mysql:host=localhost;dbname=your_db_name;charset=utf8", 'your_db_username', 'your_db_password');

} catch (PDOException $e) {

    echo $e->getMessage();

}










?>