<!doctype html>
<html>
<head lang="en">
<meta charset="UTF-8">

    <title>Губка боб</title>

    <link href="public/css/bootstrap.css" rel="stylesheet" />
    <link href="public/css/custom.css" rel="stylesheet" />
    <script src="public/js/jquery-2.1.3.js"></script>
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/lib/jquery-ui.min.js"></script>
    <script src="public/js/src/jquery.textanimation.js"></script>
    <link rel="shortcut icon" href="public/favicon.png" />



<body>
<div style="padding: 100px;">
<h1>Чат губки Боба</h1>
<!-- Вот в этих 2-х div'ах будут идти наши сообщения из чата -->
<div class="chat r4">
<div id="chat_area"><!-- Сюда мы будем добавлять новые сообщения --></div>
</div>
<form id="pac_form" action="">
    <table style="width: 100%;">
        <tr>
<!--            <td>Имя:</td>-->
            <td>Сообщение:</td>
            <td></td>
        </tr>
        <tr>
            <!-- Поле ввода имени -->
            <td><input type="text" id="pac_name" class="r4" value="Гость"></td>

            <!-- Поле ввода сообщения -->
            <td style="width: 80%;"><input type="text" id="pac_text" class="r4" value=""></td>

            <!-- Кнопка "Отправить" -->
            <td><input type="submit" value="Отправить"></td>
        </tr>
    </table>
</form>
</div>
</body>

<script>
    $(function () {
        $("#pac_form").submit(Send); // вешаем на форму с именем и сообщением событие которое срабатывает кодга нажата кнопка "Отправить" или "Enter"
        $("#pac_text").focus(); // по поле ввода сообщения ставим фокус
        setInterval("Load();", 2000); // создаём таймер который будет вызывать загрузку сообщений каждые 2 секунды (2000 милесукунд)
    });
    // Функция для отправки сообщения
    function Send() {
        // Выполняем запрос к серверу с помощью jquery ajax: $.post(адрес, {параметры запроса}, функция которая вызывается по завершению запроса)
        $.post("ajax.php",
            {
                act: "send",  // указываем скрипту, что мы отправляем новое сообщение и его нужно записать
                name: $("#pac_name").val(), // имя пользователя
                text: $("#pac_text").val() //  сам текст сообщения
            },
            Load ); // по завершению отправки вызвовем функцию загрузки новых сообщений Load()

        $("#pac_text").val(""); // очистим поле ввода сообщения
        $("#pac_text").focus(); // и поставим на него фокус

        return false; // очень важно из Send() вернуть false. Если этого не сделать то произойдёт отправка нашей формы, те страница перезагрузится
    }

    var last_message_id = 0; // номер последнего сообщения, что получил пользователь
    var load_in_process = false; // можем ли мы выполнять сейчас загрузку сообщений. Сначала стоит false, что значит - да, можем

    // Функция для загрузки сообщений
    function Load() {
        // Проверяем можем ли мы загружать сообщения. Это сделанно для того, что бы мы не начали загрузку заново, если старая загрузка ещё не закончилась.
        if(!load_in_process)
        {
            load_in_process = true; // загрузка началась
            // отсылаем запрос серверу, который вернёт нам javascript
            $.post("ajax.php",
                {
                    act: "load", // указываем на то что это загрузка сообщений
                    last: last_message_id, // передаём номер последнего сообщения который получил пользователь в прошлую загрузку
                    rand: (new Date()).getTime()
                },
                function (result) { // в эту функцию в качестве параметра передаётся javascript код, который мы должны выполнить
                    eval(result); // выполняем скрипт полученный от сервера
                    $(".chat").scrollTop($(".chat").get(0).scrollHeight); // прокручиваем сообщения вниз
                    load_in_process = false; // говорим что загрузка закончилась, можем теперь начать новую загрузку
                });
        }
    }
</script>
</html>