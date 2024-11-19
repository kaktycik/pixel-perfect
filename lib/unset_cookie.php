<?php
    if (isset($_COOKIE['user'])) {
        // Устанавливаем куки с тем же именем и временем истечения в прошлом
        setcookie('user', '', time() - 3600 * 24 * 30, "/"); 
        setcookie('user_name', '', time() - 3600 * 24 * 30, "/");
        setcookie('user_surname', '', time() - 3600 * 24 * 30, "/");
        setcookie('user_email', '', time() - 3600 * 24 * 30, "/");} 
