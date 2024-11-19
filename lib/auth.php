<?php
    // $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    // $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    // $salt = '63s39_()d%#@#^Q*!';
    // $password = md5($salt . $password);

    // require "db.php";

    // $sql = 'SELECT user_id FROM users WHERE user_login = ? AND user_password = ?';
    // $query = $pdo->prepare($sql);
    // $query->execute([$login, $password]);

    // if($query->rowCount() == 0)
    //     echo "Неверный логин или пароль!";
    // else {
    //     setcookie('user', $login, time() + 3600 * 24 * 30, "/");
    //     setcookie('user_name', $user['user_name'], time() + 3600 * 24 * 30, "/");
    //     header('Location: /user.php');
    // }



// $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS)); 
// $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS)); 

// $salt = '63s39_()d%#@#^Q*!'; 
// $password = md5($salt . $password); 

// require "db.php"; 

// $sql = 'SELECT user_id, user_name FROM users WHERE user_login = ? AND user_password = ?'; 
// $query = $pdo->prepare($sql); 
// $query->execute([$login, $password]); 

// if($query->rowCount() == 0) {
//     echo "Неверный логин или пароль!"; 
// } else { 

//     setcookie('user', $login, time() + 3600 * 24 * 30, "/");
//     header('Location: /user.php'); 
//     exit(); 
// }


    
    
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));  
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));  

$salt = '63s39_()d%#@#^Q*!';  
$password = md5($salt . $password);  

require "db.php";  

// Изменяем SQL-запрос, чтобы выбрать все необходимые поля
$sql = 'SELECT user_id, user_name, user_surname, user_email FROM users WHERE user_login = ? AND user_password = ?';  
$query = $pdo->prepare($sql);  
$query->execute([$login, $password]);  

if($query->rowCount() == 0) { 
    echo "Неверный логин или пароль!";  
} else {  
    // Получаем данные пользователя
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // Устанавливаем куки с необходимыми данными
    setcookie('user', $login, time() + 3600 * 24 * 30, "/"); 
    setcookie('user_name', $user['user_name'], time() + 3600 * 24 * 30, "/");
    setcookie('user_surname', $user['user_surname'], time() + 3600 * 24 * 30, "/");
    setcookie('user_email', $user['user_email'], time() + 3600 * 24 * 30, "/");

    // Перенаправляем на страницу пользователя
    header('Location: /user.php');  
    exit();  
}

