<?php
session_start(); // Инициализация сессии
session_unset(); // Очищение сессии
session_destroy(); // Уничтожение сессии
header('Location: index.php');
exit();
?>
