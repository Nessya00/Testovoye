<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование данных</title>
</head>
<body>
    <h1>Добро пожаловать, <?php echo htmlspecialchars($user['login']); ?>!</h1>
    <form action="update_profile.php" method="post">
        <p>Логин: <input type="text" name="login" value="<?php echo htmlspecialchars($user['login']); ?>"></p>
        <p>Номер телефона: <input type="text" name="num" value="<?php echo htmlspecialchars($user['num']); ?>"></p>
        <p>Email: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"></p>
        <p>Пароль: <input type="password" name="pass" value="<?php echo htmlspecialchars($user['pass']); ?>"></p>
        <button type="submit">Сохранить изменения</button>
    </form>
    <form action="logout.php" method="post">
        <button type="submit">Выйти</button>
    </form>
</body>
</html>
