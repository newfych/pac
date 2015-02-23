<!doctype html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Губка Боб чат</title>

    <link href="public/css/bootstrap.css" rel="stylesheet" />
    <link href="public/css/custom.css" rel="stylesheet" />

    <script src="public/js/jquery-2.1.3.js"></script>
    <script src="public/js/bubbles.js"></script>
    <script src="public/js/lib/jquery-ui.min.js"></script>
    <script src="public/js/src/jquery.textanimation.js"></script>
    <script src="public/js/textControls.js"></script>

    <link rel="shortcut icon" href="favicon.png" />

<body>
<div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 " id="half">
        <textarea class="chat-area">
            </textarea>
        </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" >
        <div class="left-panel">
            <div class="users-panel">
                <textarea class="users-panel">
                    DFSVSVSDVS
                </textarea>
            </div>
            <div class="message-panel">
                <input type="text" id="name" class="btn-lg" placeholder="Введите сообщение" autofocus>
            </div>
            <div class="message-button">
                <button id="login-button" value="submit" class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
            </div>
            <div class="smile-panel">
                RRRRRRRRRRRRRRRRRRRRIIIIIIIITFIFVII
            </div>
        </div>
    </div>
</div>

<div id="bubbles">
    <img class="bubble" id="bubble" style="display:none;" width="200px" height="200px" src="public/img/bubble_blue.png" >
</div>

<br><br><br><br>
<div>
    <h5 class="footer text-center">&copy Rusinov Alexandr 2015</h5>
</div>
</body>

<script>
    jQuery(function ($) {
        $("#login-form").submit(function (e) {
            e.preventDefault();
            registr();
        });

    });

    function registr() {
        var login = $("#name").val();
        (!login) ? login = "Гость" : login;
        var data =  {act: "name", name: login};
        $.post("ajax.php",{act: "name", name: login}, callback());
    }

    function callback(response) {
        var container = $("login-container");
        console.log(container);
        container.empty();
        $("#reg_err").append(response);
    }

</script>
</html>