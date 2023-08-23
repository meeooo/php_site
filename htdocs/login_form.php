<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <?php include("snippets/head_content.php"); ?>
    </head>
    <body>
        <?php include("snippets/header.php"); ?>
    
        <h1>Авторизация</h1>

        <div class="zapis">

            <?php
                if (array_key_exists('incorrect_credentials', $_GET))
                {
                    echo "<p>Логин или пароль введены неверно.</p>";
                }
            ?>
            <form name="login_form" action="login.php" method="post">
                <div>
                    <label>Логин (email):</label>
                    <input required type="text" name="user_name" pattern="[A-Za-z]+">
                </div>
        
                <div>
                    <label>Пароль:</label>
                    <input required type="password" name="user_password">
                </div>
                <input type="submit" name="signame" value="Логин">
                <div>
                    <a href="register_form.php">Регистрация</a>
                </div>
            </form>
        </div>

        <?php include("snippets/footer.php"); ?>
    </body>
</html>