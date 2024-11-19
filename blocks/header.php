<header class="header">
    <div class="container">
        <div class="str_header">
            <a href="">Где мой заказ?</a>
            <a href="">доставка</a>
        </div>
        <div class="str_header menu">
            <div class="str_2_left">
                <a href="../index.php"><img src="../logo.png" alt="logo"></a>
            </div>
            <div class="str_2_right">
                <a href="">Каталог</a>
                <a href="">Корзина</a>
                <?php
                if(isset($_COOKIE['user'])){
                    echo '<a href="../user.php">Личный кабинет</a>';
                    echo '<a href="../reg_auth.php">Выйти</a>';

                }
                
                   
                else
                    echo '<a href="../reg_auth.php">Вход</a>';
                ?>
            </div>
            
            
        </div>
    </div>
</header>