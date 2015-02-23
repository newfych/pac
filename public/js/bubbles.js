(function($){
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
        var initSize = 2;
        var aspect = $( window ).height()/$( window ).width();
        var initW = initSize.toString() + "%";
        var initH = (initSize / aspect).toString() + "%";
        var size = getRandomInt(3, 7);
        var w = size.toString() + "%";
        var h = (size / aspect).toString() + "%";
        var yPos = (getRandomInt(1, 15) + 10);
        var delay = (getRandomInt(3, 10) * 1000) + 15000;
        var zIndexType = getRandomInt(1, 100);
        var zIndex = 0;
        (zIndexType > 50) ? zIndex = -1 : zIndex;
        var floatSide = getRandomInt(1, 100);
        (floatSide > 50) ? yPos = 95 - yPos : yPos-3;
        (floatSide > 50) ? zIndex = 0 : zIndex;
        var left = yPos.toString() + "%";
        var lifeTime = (getRandomInt(5, 12)*10).toString() + "%";

        bubble.clone().appendTo(bubbles)
            .css({"z-index": zIndex, "width": initW, "height": initH,"left": left, "bottom": "0%"})
            .animate({"bottom": lifeTime,"width": w , "height": h},
            {queue: false, duration: delay, easing: "linear",
                complete: function(){$(this).remove()}});
    }

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
})(jQuery);