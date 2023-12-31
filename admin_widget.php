<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Виджеты Регистрации и Авторизации</title>
    <link rel="stylesheet" href="/style1.css" type="text/css" />
</head>
<body style="color:#483D8B; background-color:#DCDCDC">
<!-- Виджет Регистрации -->
<div id="registration-widget"><center>
    <h2>Виджет Регистрации</h2>
    <form id="registration-form">
        <label for="username">Логин:</label><br>
        <input type="text" id="username" required><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" required><br>
        <button id="but_1" style="background-color: aquamarine;border-color: #9370DB ; padding: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        margin:10px" type="button" onclick="register()">Зарегистрироваться</button>
        <button id="but_1" style="background-color: aquamarine;border-color: #9370DB ; padding: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        margin:10px" type="button" onclick="showLoginWidget()">Перейти к Авторизации</button></center>
        <div>
            <center>

                <a style="float: right;padding:450px 20px 0 0;" href='start_screen.html'>на стартовую страницу</a></center>
        </div>
    </form>
</div>

<!-- Виджет Авторизации -->
<div id="login-widget" style="display: none;"><center>
    <h2>Виджет Авторизации</h2>
    <form id="login-form">
        <label  for="login-username">Логин:</label><br>
        <input type="text" id="login-username" required><br>
        <label for="login-password">Пароль:</label><br>
        <input type="password" id="login-password" required><br>
        <button id="but_2" style="background-color: aquamarine;border-color: #9370DB ; padding: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        margin:10px" type="button" onclick="login()">Войти в систему</button>
        <button id="but_2" style="background-color: aquamarine;border-color: #9370DB ; padding: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        margin:10px" type="button"  onclick="showRegistrationWidget()">Перейти к Регистрации</button></center>
        <div>
            <center>

                <a style="float: right;padding:450px 20px 0 0;" href='start_screen.html'>на стартовую страницу</a></center>
        </div>
    </form>
</div>

<!-- Виджет перехода между Регистрацией и Авторизацией -->


<script>
    // Переменные для хранения данных о зарегистрированных пользователях
    const registeredUsers = {
        "admin": "admin",
    };

    // Функция регистрации
    function register() {
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        registeredUsers[username] = password;
        if (password==="" || username==="")alert("Ошибка регистрации. Попробуйте еще раз.Введите логин и пароль.")
        // Сохраняем данные пользователя (здесь только имитация)
        else{ showLoginWidget();}
        // Переход к виджету Авторизации

    }
    // Функция авторизации
    function login() {

        const loginUsername = document.getElementById("login-username").value;
        const loginPassword = document.getElementById("login-password").value;
        if (loginUsername==="" || loginPassword==="")alert("Ошибка авторизации.Попробуйте еще раз.Введите логин и пароль.")
        // Проверяем, существует ли пользователь и пароль совпадает
        else if (registeredUsers[loginUsername] !== loginPassword )  {alert("Ошибка авторизации.Попробуйте еще раз.Введите логин и пароль.")}
        else if (registeredUsers[loginUsername] === loginPassword )  {
                alert("Авторизация успешна!");
                document.getElementById("but_2").onclick=function (){
                    location.href='admin_widget_start_screen.html';
                }
                // Здесь можно перейти к четвертому виджету, если необходимо
            }
    }

    // Функции для отображения виджетов
    function showRegistrationWidget() {
        document.getElementById("registration-widget").style.display = "block";
        document.getElementById("login-widget").style.display = "none";
        document.getElementById("transition-widget").style.display = "none";
    }

    function showLoginWidget() {
        document.getElementById("registration-widget").style.display = "none";
        document.getElementById("login-widget").style.display = "block";
        document.getElementById("transition-widget").style.display = "none";
    }

</script>
</body>
</html>