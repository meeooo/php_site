<header>
    <div class="logo">
        <a href="index.php"><img src="icons/logo.png" alt="" height="250px"></a>
    </div>
    <nav>
        <ul class="menu">
            <li><a href="index.php">О себе</a></li>
            <li><a href="rezume.php">Резюме</a></li>
            <li><a href="zapis_na_attestaciyu.php">Запись на аттестацию</a></li>
            <?php
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (array_key_exists("user_id", $_SESSION))
            {
                echo "<li><a href='logout.php'>Выход</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>