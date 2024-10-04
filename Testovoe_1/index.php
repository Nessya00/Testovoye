<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
            <form action="register.php" method="post">
                <input type="text" placeholder="login" name="login">
                <input type="text" placeholder="number" name="numb">
                <input type="password" placeholder="password" name="pass">
                <input type="password" placeholder="repeat your password" name="repeatpass">
                <input type="email" placeholder="email" name="email">
                <button type="submit">Зарегистрироваться</button>
            </form>

            <form action="login.php" method="post">
                <input type="text" placeholder="your email or number" name="login">
                <input type="text" placeholder="password" name="pass">
                <button type="submit">Войти</button>
            </form>

        <!-- Яндекс Смарткапча     -->
        <script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>
        <div
            id="captcha-container"
            class="smart-captcha"
            data-sitekey="ysc1_4GLGE7nkfe3PfBTHcap4Lt9mWJjNfAFzpC3LyXxv6c4ba2b1">
        </div>
    </body>
</html>
