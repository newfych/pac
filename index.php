<!doctype html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Губка Боб чат</title>

    <link href="public/css/bootstrap.css" rel="stylesheet" />
    <link href="public/css/custom.css" rel="stylesheet" />

    <script src="public/js/jquery-2.1.3.js"></script>
    <script src="public/js/lib/jquery-ui.min.js"></script>
    <script src="public/js/src/jquery.textanimation.js"></script>

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
    $(function() {
        createBubbles();
        setBubbles();
        var wall = $("#wall");
        wall.fadeIn(1000);
    });

    function setBubbles() {
        setInterval(function(){createBubbles();},
            getRandomInt(3, 7)*200)
    }

    function createBubbles() {
        var bubbles = $("#bubbles");
        var bubble = $("#bubble");
        console.log(bubble);
        var initSize = 2;
        var aspect = $( window ).height()/$( window ).width();
        var initW = initSize.toString() + "%";
        var initH = (initSize / aspect).toString() + "%";
        var size = getRandomInt(3, 7);
        var w = size.toString() + "%";
        var h = (size / aspect).toString() + "%";
        var yPos = (getRandomInt(1, 15) + 10);
        var delay = (getRandomInt(3, 10) * 1000) + 15000;
        var floatSide = getRandomInt(1, 100);
        (floatSide > 50) ? yPos = 95 - yPos : yPos-3;
        var left = yPos.toString() + "%";
        var zIndexType = getRandomInt(1, 100);
        var zIndex = 0;
        (zIndexType > 50) ? zIndex = -1 : zIndex;
        var lifeTime = (getRandomInt(5, 12)*10).toString() + "%";

        bubble.clone().appendTo(bubbles)
            .css({"z-index": zIndex, "width": initW, "height": initH,"left": left, "bottom": "0%"})
            .animate({"bottom": lifeTime,"width": w , "height": h},
            {queue: false, duration: delay, easing: "linear",
            complete: function(){console.log($(this).remove())}});

    }

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }



</script>
<script type="text/javascript">
    $(document.body).ready(function(){
        $("div#demo_roll1").textAnimation({
            mode: "roll"
        });
        $("div#demo_roll2").textAnimation({
            mode: "roll",
            minsize: 30,
            maxsize: 25,
            magnification: 10,
            fixed: "top",
            delay: 10,
            stuff: 1
        });
        $("div#demo_step1").textAnimation({
            mode: "step"
        });
        $("div#demo_step2").textAnimation({
            mode:"step",
            minsize:20,            //минимальный размер шрифта[integer]
            maxsize:60,            //максимальный размер шрифта[integer]
            upper:false,           //верхний шаг? [boolean]
            fixed:"top",           //фиксировать top или bottom ["top","bottom"]
            stuff:2.0,             //величина наложения букв шрифта[float]
            delay:200,             //задержка между анимацией символов
            interval:0,            //интервал анимации
            duration:1000          //продолжительность анимации
        });
        $("div#demo_high1").textAnimation({
            mode: "highlight"
        });
        $("div#demo_high2").textAnimation({
            mode: "highlight",
            baseColor: "#111111",
            highlightColor: "#2FFF5F",
            delay: 35,
            interval: 0,
            duration: 100
        });
        $("div#demo_jump1").textAnimation({
            mode:"jump"
        });
        $("div#demo_jump2").textAnimation({
            mode:"jump",
            altitude:10,              //высота прыжка[integer]
            bound :false,             //связанная анимация[boolean]
            fixed:"bottom",           //фиксировать top или bottom ["top","bottom"]
            delay:80,                 //задержка анимации между символами[integer]
            interval:0,               //интервал времени для анимации[integer]
            duration:400              //продолжительность анимации[integer]
        });
        $("div#demo_puff1").textAnimation({
            mode:"puff"
        });
        $("div#demo_puff2").textAnimation({
            mode:"puff",
            color:"#77FF6F",          //подсветка пуфф текста
            percent:200,              //масштабирование шрифта в %.[integer]
            interval:1000,               //интервал времени для анимации[integer]
            duration:1000,             //продолжительность анимации[integer]
            times : 5                 //сколько раз произваодить анимацию puff[integer]
        });
    });
</script>
</html>