<?php
$conn = new mysqli("localhost", "root", "", "loftHouse");
if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}


//create
$sql1 = "CREATE TABLE customer (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    customerName VARCHAR(30), 
    phoneNumber VARCHAR(30)
    )";
if ($conn->query($sql1)) {
    echo '<br>' .  "Таблица customer успешно создана";
} else {
    echo '<br>' . "Ошибка: " . $conn->error;
}

