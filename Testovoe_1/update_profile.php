<?php
session_start(); // Инициализация сессии
require_once('db.php'); // Подключение к базе данных

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}
$user = $_SESSION['user'];
$new_login = $_POST['login'];
$new_num = $_POST['num'];
$new_email = $_POST['email'];
$new_pass = $_POST['pass'];

if (empty($new_login) || empty($new_num) || empty($new_email) || empty($new_pass)) {
    echo "Заполните все поля";
} else {
    $sql = "UPDATE users SET login = '$new_login', num = '$new_num', email = '$new_email', pass = '$new_pass' WHERE login = '{$user['login']}'";
    if ($conn->query($sql) === TRUE) {
        // Обновляем данные в сессии
        $_SESSION['user'] = [
            'login' => $new_login,
            'num' => $new_num,
            'email' => $new_email,
            'pass' => $new_pass
        ];
        header('Location: hello.php');
        exit();
    } else {
        echo "Ошибка при обновлении данных: " . $conn->error;
    }
}
?>
