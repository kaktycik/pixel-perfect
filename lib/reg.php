<?php 
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $surname = trim(filter_var($_POST['surname'], FILTER_SANITIZE_SPECIAL_CHARS));
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if(strlen($login) < 4){
        echo "Логин короче 4 символов";
        exit;
    }

    if(strlen($password) < 6){
        echo "Пароль менее 6 символов";
        exit;
    }
    
    
    //password
    $salt = '63s39_()d%#@#^Q*!';
    $password = md5($salt . $password);

    

    // DB
    require "db.php";

    //check login and email
    $checkQuery = $pdo->prepare('SELECT * FROM users WHERE user_login = ? OR user_email = ?');
    $checkQuery->execute([$login, $email]);
    
    if ($checkQuery->rowCount() > 0) {
        echo "Пользователь с таким логином или почтой уже существует.";
        exit;
    }
    else{
    $sql = 'INSERT INTO users(user_login, user_surname, user_name, user_email, user_password) VALUES (?, ?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $surname, $name, $email, $password]);

    setcookie('user', $login, time() + 3600 * 24 * 30, "/");
    setcookie('user_name', $name, time() + 3600 * 24 * 30, "/"); 
    setcookie('user_surname', $surname, time() + 3600 * 24 * 30, "/");
    setcookie('user_email', $email, time() + 3600 * 24 * 30, "/");
    header('Location: /user.php');
    exit();
    }
    



