<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <style type="text/css">
        @font-face {
            font-family: digit;
            /*src: url('digital-7_mono.ttf') format("truetype");*/
        }
    </style>

    <link href="/js/admin/love/default.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/admin/love/garden.js"></script>
    <script type="text/javascript" src="/js/admin/love/functions.js"></script>

</head>

<body>

<div id="mainDiv">
    <div id="content">
        <div id="code">
            <span class="comments">/**</span><br />
            <span class="space"/><span class="comments">*2019—05-11,</span><br />
            <span class="space"/><span class="comments">*2019-10-30.</span><br />
            <span class="space"/><span class="comments">*/</span><br />
            Boy name = <span class="keyword">Mr</span> LIU<br />
            Girl name = <span class="keyword">Mrs</span> ZHANG<br />
            <span class="comments">// Fall in love river. </span><br />
            The boy love the girl;<br />
            <span class="comments">// They love each other.</span><br />
            The girl loved the boy;<br />
            <span class="comments">// AS time goes on.</span><br />
            The boy can not be separated the girl;<br />
            <span class="comments">// At the same time.</span><br />
            The girl can not be separated the boy;<br />
            <span class="comments">// Both wind and snow all over the sky.</span><br />
            <span class="comments">// Whether on foot or 5 kilometers.</span><br />
            <span class="keyword">The boy</span> very <span class="keyword">happy</span>;<br />
            <span class="keyword">The girl</span> is also very <span class="keyword">happy</span>;<br />
            <span class="placeholder"/><span class="comments">// Whether it is right now</span><br />
            <span class="placeholder"/><span class="comments">// Still in the distant future.</span><br />
            <span class="placeholder"/>The boy has but one dream;<br />
            <span class="comments">// The boy wants the girl could well have been happy.</span><br />
            <br>
            <br>
            I want to say:<br />
            Baby, I love you forever;<br />
        </div>
        <div id="loveHeart">
            <canvas id="garden"></canvas>
            <div id="words">
                <div id="messages">
                    亲爱的，这是我们相爱在一起的时光。
                    <div id="elapseClock"></div>
                </div>
                <div id="loveu">
                    爱你直到永永远远。<br/>
                    <div class="signature">- 爱你的人</div>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <a href="#">....</a><br />
        <a href="#">....</a><br />

    </div>
</div>

<script type="text/javascript">
    var offsetX = $("#loveHeart").width() / 2;
    var offsetY = $("#loveHeart").height() / 2 - 55;
    var together = new Date();
    together.setFullYear(2019, 5, 12);
    together.setHours(0);
    together.setMinutes(0);
    together.setSeconds(0);
    together.setMilliseconds(0);

    if (!document.createElement('canvas').getContext) {
        var msg = document.createElement("div");
        msg.id = "errorMsg";
        msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+";
        document.body.appendChild(msg);
        $("#code").css("display", "none")
        $("#copyright").css("position", "absolute");
        $("#copyright").css("bottom", "10px");
        document.execCommand("stop");
    } else {
        setTimeout(function () {
            startHeartAnimation();
        }, 5000);

        timeElapse(together);
        setInterval(function () {
            timeElapse(together);
        }, 500);

        adjustCodePosition();
        $("#code").typewriter();
    }
</script>

</body>
</html>