<!DOCTYPE html>

<?php include "check_login.php" ?>
<?php include "test.php"; ?>

<html lang="en">
    <head>
        <title>Document</title>
        <?php include("snippets/head_content.php"); ?>
        <script src="script.js"></script>
    </head>
    <body>
        <?php include("snippets/header.php"); ?>
    
        <h1>Запись на аттестацию</h1>

        <div class="zapis">

            <form name="signame" action="zapis_na_attestaciyu.php" method="post">
                <?php include("get_user_data.php"); ?>
        
                <div>
                    <label>Предмет:</label>
                    <select name="Предмет"> 
                        <option>Математика</option>
                        <option>Информатика</option>
                        <option>Физика</option>
                    </select>
                </div>
        
                <div>
                    <label>Время:</label>
                    <input required type="radio" name="Время" value="12.00" />12.00
                    <input required type="radio" name="Время" value="13.00" />13.00 <br>
                    <input required type="radio" name="Время" value="14.00" />14.00
                    <input required type="radio" name="Время" value="15.00" />15.00 <br>
                </div>
        
                <div>
                    <label>Форма контроля:</label> <br>
                    <input type="checkbox" name="Контроль" value="Тест"> Тест 
                    <input type="checkbox" name="Контроль" value="Собеседование"> Собеседование <br>
                    <input type="checkbox" name="Контроль" value="Доклад"> Доклад 
                    <input type="checkbox" name="Контроль" value="Контрольная работа"> Контрольная работа <br>
                </div>
                
                <div>
                    <textarea name="Комментарий"></textarea>
                </div>

                <input type="hidden" name="text">
                <button class="button" onclick="sendZapis();">Записаться</button>
            </form>
            <!-- Принимаем запись, если она есть -->
            <p>
            <?php
                if (isset($text))
                {
                    echo $text;
                }
                if (isset($comment) && strlen($comment) != 0)
                {
                    echo "<br>спасибо за комментарий: $comment";
                }
            ?>
            </p>
        </div>
        <div class="zapis">
            <button class="button" onclick="toggleZapisi('zapisi');">Показать список</button>
            <div id ="zapisi" class="rabota rabota-hidden">
                <table border="">
                    <tr>
                        <td>Запись</td>
                        <td>Комментарий</td>
                    </tr>
                    <?php include("load_zapisi.php"); ?>    
                </table>
            </div>
        </div>

        <?php include("snippets/footer.php"); ?>
    </body>
</html>