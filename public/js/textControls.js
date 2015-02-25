(function($) {

    $(document.body).ready(function () {
        $("div#demo_roll1").textAnimation({
            mode: "roll"
        });
        $("div#demo_roll2").textAnimation({
            mode: "roll",
            minsize: 60,
            maxsize: 50,
            magnification: 30,
            //fixed: "top",
            delay: 20,
            stuff: 1
        });
        $("div#demo_step1").textAnimation({
            mode: "step"
        });
        $("div#demo_step2").textAnimation({
            mode: "step",
            minsize: 20,            //минимальный размер шрифта[integer]
            maxsize: 60,            //максимальный размер шрифта[integer]
            upper: false,           //верхний шаг? [boolean]
            fixed: "top",           //фиксировать top или bottom ["top","bottom"]
            stuff: 2.0,             //величина наложения букв шрифта[float]
            delay: 200,             //задержка между анимацией символов
            interval: 0,            //интервал анимации
            duration: 1000          //продолжительность анимации
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
            mode: "jump"
        });
        $("div#demo_jump2").textAnimation({
            mode: "jump",
            altitude: 10,              //высота прыжка[integer]
            bound: false,             //связанная анимация[boolean]
            fixed: "bottom",           //фиксировать top или bottom ["top","bottom"]
            delay: 80,                 //задержка анимации между символами[integer]
            interval: 0,               //интервал времени для анимации[integer]
            duration: 400              //продолжительность анимации[integer]
        });
        $("div#demo_puff1").textAnimation({
            mode: "puff"
        });
        $("div#demo_puff2").textAnimation({
            mode: "puff",
            color: "#77FF6F",          //подсветка пуфф текста
            percent: 200,              //масштабирование шрифта в %.[integer]
            interval: 1000,               //интервал времени для анимации[integer]
            duration: 1000,             //продолжительность анимации[integer]
            times: 5                 //сколько раз произваодить анимацию puff[integer]
        });
    });
})(jQuery);

