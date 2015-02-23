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
<?

    if(!isset($_SESSION['name'])) {
    echo '<div class="container">
    <div class="row" id="row">
        <div class="col-sm-6 col-md-6 col-sm-offset-2 hidden-xs login" >
            <div class="text-center login-title demo" id="demo_roll2">  Войти в чат Губки Боба</div>
        </div>
        <div class="col-sm-6 col-md-4 col-md-offset-4 login" id="login-form">
            <div class="account-wall" id="wall" style="display:none;">
                <img class="profile-img" src="public/img/Edit.png">
                <form class="form-signin" >
                    <div class="form-div">
                        <input type="text" class="form-control" placeholder="Введите имя" autofocus>
                    </div>
                        <h3 class="text-center describe">Введите ваше имя или войдите как гость</h3>
                    <div class="form-div">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
        Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-md-offset-1 hidden-xs login">
        <img class="img-responsive" src="public/img/wellcome.png" width="400px" height="400px">
    </div>
    <div class="col-sm-6 col-md-4 hidden-xs col-md-offset-3 login">
        <img class="img-responsive" style="z-index: -30" src="public/img/patrick.png" width="200px" height="200px">
    </div>
</div>

<div>
    <h5 class="footer text-center">&copy Rusinov Alexandr 2015</h5>
</div>
<div id="bubbles">
    <img class="bubble" id="bubble" style="display:none;" width="200px" height="200px" src="public/img/bubble_blue.png" >
</div>';

}
?>
</body>

<script>

</script>
</html>