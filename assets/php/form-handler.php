<?php 
$conn = new mysqli("localhost", "root", "", "loftHouse");
// Проверка подключения к базе данных
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Обработка отправки данных формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Подготовка и выполнение SQL-запроса для вставки данных в базу данных
    $sql = "INSERT INTO customer (customerName, phoneNumber) VALUES ('$name', '$phone')";
    if ($conn->query($sql) === TRUE) {
        header("Location: /index.html");
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

// Закрытие соединения с базой данных
$conn->close();
?>