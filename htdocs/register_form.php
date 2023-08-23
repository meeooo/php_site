<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <?php include("snippets/head_content.php"); ?>
    </head>
    <body>
        <?php include("snippets/header.php"); ?>
    
        <h1>Регистрация</h1>

        <div class="zapis">

            <?php
                if (array_key_exists('incorrect_credentials', $_GET))
                {
                    echo "<p>Логин уже существует.</p>";
                }
            ?>
            <form name="register_form" action="register.php" method="post">
                <div>
                    <label>Логин:</label>
                    <input required type="text" name="user_name" pattern="[A-Za-z]+">
                </div>
        
                <div>
                    <label>Пароль:</label>
                    <input required type="password" name="user_password">
                </div>

                <div>
                    <label>Фамилия:</label>
                    <input required type="text" name="Фамилия" pattern="^[А-Яа-яЁё\s]+$">
                </div>
        
                <div>
                    <label>Имя:</label>
                    <input required type="text" name="Имя" pattern="^[А-Яа-яЁё\s]+$">
                </div>

                <div>
                    <label>Отчество:</label>
                    <input required type="text" name="Отчество" pattern="^[А-Яа-яЁё\s]+$">
                </div>

                <div>
                    <label>Дата рождения:</label>
                    <input type="date" name="Дата_рождения"> 
                </div>

                <div>
                    <label>Номер телефона:</label>
                    <input type="tel" name="Номер_телефона" pattern="\+7\d{10}">
                </div>
                
                <input type="submit" name="signame" value="Регистрация">

                <div>
                    <a href="login_form.php">Авторизация</a>
                </div>
            </form>
        </div>
    
        <?php include("snippets/footer.php"); ?>
    </body>
</html>