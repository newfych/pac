<!doctype html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Губка Боб чат</title>

    <link href="public/css/liMarquee.css" rel="stylesheet" />
    <link href="public/css/bootstrap.css" rel="stylesheet" />
    <link href="public/css/bootstrap.css" rel="stylesheet" />
    <link href="public/css/custom.css" rel="stylesheet" />
    <script src="public/js/jquery-2.1.3.js"></script>
    <script src="public/js/lib/jquery-ui.min.js"></script>
    <script src="public/js/src/jquery.textanimation.js"></script>
    <script src="public/js/jquery.liMarquee.js"></script>
    <link rel="shortcut icon" href="favicon.png" />

<body>
<div class="container">
    <div class="row" id="row">
        <div class="col-sm-6 col-md-6 col-sm-offset-3 login" >
        <div class="text-center login-title demo" id="demo_roll2">Войти в чат Губки Боба</div>
            </div>
        <div class="col-sm-6 col-md-4 col-md-offset-4 login" id="login-form">
            <div class="account-wall" id="wall" style="display:none;">
                <img class="profile-img" src="public/img/Edit.png">
                <form class="form-signin">
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
        <img class="img-responsive" src="public/img/patrick.png" width="200px" height="200px">
    </div>
</div>

<div>
    <h5 class="footer text-center">&copy Rusinov Alexandr 2015</h5>
</div>
<div id="bubbles">
    <img class="bubble" id="bubble" width="200px" height="200px" src="public/img/bubble_blue.png" >
</div>
</body>
<script>
    $(function(){
//        var bubble = $("#bubble");
////        var bubbles = $("#bubbles");
////        var bubble2 = bubble.clone().appendTo(bubbles);
        var wall = $("#wall");
        wall.fadeIn(1000);
//
//        //var myVar = setInterval(function(){ myTimer() }, 100);
//
//        function myTimer() {bubble.animate({top: "-=120%"}, 2000, myTimer());
//
//        var marquee = bubble;
//        marquee.css({"overflow": "hidden", "width": "100%"});
//
//        // оболочка для текста ввиде span (IE не любит дивы с inline-block)
//        marquee.wrapInner("<span>");
//        marquee.find("span").css({ "width": "50%", "display": "inline-block", "text-align":"center" });
//        marquee.append(marquee.find("span").clone()); // тут у нас два span с текстом
//
//        marquee.wrapInner("<div>");
//        marquee.find("div").css("width", "200%");
//
//        var reset = function() {
//            $(this).css("margin-left", "0%");
//            $(this).animate({ "margin-left": "-100%" }, 12000, 'linear', reset);
//        };
//
//        reset.call(marquee.find("div"));
//        }
    });

////////////////////////////////////////////////
//    $(document).ready(function(){
//        intervalId=setTimeout(function(){ banner(); },1000);
//    });
//
//    function banner(){
//        $('#jag').animate({left: "500px"}, 5000,function(){
//            $('#jag').hide();
//            $('#headp').text("Jaguar - The best and coolest car ever!");
//            $('#headp').animate({fontSize:"4em"},"slow",function(){
//                $('#jag').animate({left:"0px"},0,function(){
//                        $('#headp').text("");
//                        $('#jag').show();
//                        banner();
//                    }
//                );
//            });
//        });
//    }







</script>
<script type="text/javascript">
    $(document.body).ready(function(){
        $("div#demo_roll1").textAnimation({
            mode: "roll"
        });
        $("div#demo_roll2").textAnimation({
            mode: "roll",
            minsize: 25,
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