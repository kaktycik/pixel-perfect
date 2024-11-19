<?php 
    if (isset($_COOKIE['user_name']) && isset($_COOKIE['user_surname']) && isset($_COOKIE['user_email'])) {;
        } 
    else {
        echo "Вы не авторизованы.";
    }
