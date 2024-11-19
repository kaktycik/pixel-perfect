<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="/styles/shared.css">
</head>
<body>
    <?php require_once "blocks/header.php"; ?>

    <?php 
        include 'lib/user_data.php';
    ?>

    <h2>Привет: <?php echo htmlspecialchars($_COOKIE['user_surname'])?></h2>



    
</body>
</html>