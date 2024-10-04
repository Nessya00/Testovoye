<?php
session_start();
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];
$number = $_POST['numb'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email) || empty($number)) {
    echo "Заполните все поля";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадают";
    } else {
        $check_sql = "SELECT * FROM users WHERE login = '$login' OR email = '$email' OR num = '$number'";
        $result = $conn->query($check_sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row['login'] == $login) {
                    echo "Этот логин уже используется.";
                }
                if ($row['email'] == $email) {
                    echo "Этот email уже зарегистрирован.";
                }
                if ($row['num'] == $number) {
                    echo "Этот номер телефона уже используется.";
                }
            }
        } else {
            $sql = "INSERT INTO users (login, pass, email, num) VALUES ('$login', '$pass', '$email', '$number')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['user'] = [
                    'login' => $login,
                    'email' => $email,
                    'num' => $number,
                    'pass' => $pass
                ];
                header('Location: hello.php');
                exit();
            } else {
                echo "Ошибка регистрации: " . $conn->error;
            }
        }
    }
}
?>