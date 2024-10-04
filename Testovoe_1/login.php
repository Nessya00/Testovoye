<?php
session_start();
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
if (empty($login) || empty($pass)) {
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM users WHERE (login = '$login' OR email = '$login' OR num = '$login') AND pass = '$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = [
            'login' => $user['login'],
            'num' => $user['num'],
            'email' => $user['email'],
            'pass' => $user['pass'] // В идеале, здесь должен быть хэш пароля
        ];
        header('Location: hello.php');
        exit();
    } else {
        echo "Неверный логин или пароль";
    }
}
?>


