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
        <div class="chat-area">
            <ul class="messages">
                <li>TEST STRING</li>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" >
        <div class="left-panel">
            <div class="users-panel">
                <div class="users-panel">

                </div>
            </div>
            <form id="message-form">
                <div class="message-panel">
                    <input type="text" id="message-text" class="form-control" placeholder="Введите сообщение" autofocus>
                </div>
                <div class="message-button">
                    <button id="message-button" value="submit" class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
                </div>
            </form>
            <div class="results">

            </div>
        </div>
    </div>
</div>

<div id="bubbles">
    <img class="bubble" id="bubble" style="display:none;" width="200px" height="200px" src="public/img/bubble_blue.png" >
</div>
<div>
    <h5 class="footer text-center">&copy Rusinov Alexandr 2015</h5>
</div>
</body>

<script>
jQuery(function($){$("#message-form").submit(function (e){e.preventDefault();Send();});});

function Send() {
    var text = $("#message-text").val();
    var data =  {act: "send", name: text};

    $.post("ajax.php", data, Load());
}

var last_message_id = 0;
var load_in_process = false;

function Load() {
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: {act: "load",last:last_message_id},
        success: function (data) {
            $('.results').html(data);
        }
    });
}

</script>
</html>