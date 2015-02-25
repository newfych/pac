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

<div class="chat r4">
    <div id="chat_area"></div>
</div>

<form id="pac_form" action="">
    <table style="width: 100%;">
        <tr>
            <td>Сообщение:</td>
            <td></td>
        </tr>
        <tr>
            <td><input type="text" id="pac_name" class="r4" value="Гость"></td>
            <td style="width: 80%;"><input type="text" id="pac_text" class="r4" value=""></td>
            <td><input type="submit" value="Отправить"></td>
        </tr>
    </table>
</form>
</div>
</body>

<script>
    $(function () {
        $("#pac_form").submit(Send);
        $("#pac_text").focus();
        setInterval("Load();", 2000);
    });
    function Send() {

        $.post("ajax.php",
            {
                act: "send",
                name: $("#pac_name").val(),
                text: $("#pac_text").val()
            },
            Load );

        $("#pac_text").val("");
        $("#pac_text").focus();

        return false;
    }

    var last_message_id = 0;
    var load_in_process = false;


    function Load() {

        if(!load_in_process)
        {
            load_in_process = true;

            $.post("ajax.php",
                {
                    act: "load",
                    last: last_message_id,
                    rand: (new Date()).getTime()
                },
                function (result) {
                    eval(result);
                    $(".chat").scrollTop($(".chat").get(0).scrollHeight);
                    load_in_process = false;
                });
        }
    }
</script>
</html>