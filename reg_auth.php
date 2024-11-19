<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация/Регистрация</title>
    <link rel="stylesheet" href="/styles/shared.css">
    <link rel="stylesheet" href="/styles/forms_auth.css">
</head>
<body>
    <?php include "lib/unset_cookie.php"?>
    <?php require_once "blocks/header.php"; ?>

    <section class="registration">
        <div class="container">
            <div class="reg_prod">
                <div class="rec_products">
                        <h2>Рекомендованные товары</h2>
                </div>
                <div class="forms">
                    <form action="/lib/reg.php" method="post" id="reg_form">
                        <h2>Регистрация</h2>
                        <label for="surname">Фамилия:</label>
                        <input type="text" id="surname" name="surname" placeholder="Ваша фамилия.." required>
                        <label for="name">Имя:</label>
                        <input type="text" id="name" name="name" placeholder="Ваше имя.." required>

                        <label for="login">Логин:</label>
                        <input type="text" id="login" name="login" placeholder="Ваш логин.." required>

                        <label for="email">Почта:</label>
                        <input type="email" id="email" name="email" placeholder="Ваша почта.." required>

                        <label for="password">Пароль:</label>
                        <input type="password" id="password" name="password" placeholder="Ваш пароль.." required>

                        <button type="submit" class="btn_auth">Зарегистрироваться</button>
                        <button id="reg" class="change_auth">уже есть аккаунт? авторизироваться</button>
                    </form>
                    <form action="/lib/auth.php" method="post" id="login_form">
                        <h2>Авторизация</h2>
                        <label for="login">Логин:</label>
                        <input type="text" id="login" name="login" placeholder="Ваш логин.." required>

                        <label for="password">Пароль:</label>
                        <input type="password" id="password" name="password" placeholder="Ваш пароль.." required>

                        <button type="submit" class="btn_auth">Авторизироваться</button>
                        <button id="auth" class="change_auth">нет аккаунта? зарегистрироваться</button>
                    </form>
                </div>


            </div>
                
            
        </div>
        
    </section>

    <script>
        document.getElementById('reg').addEventListener('click', function() {
            document.getElementById('reg_form').style.display = 'none';
            document.getElementById('login_form').style.display = 'block';
        });

        document.getElementById('auth').addEventListener('click', function() {
            document.getElementById('login_form').style.display = 'none';
            document.getElementById('reg_form').style.display = 'block';
        });
    </script>

</body>
</html>