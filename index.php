<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Курлык!</title>
    
    <meta name="description" content="Курлык - курлык, курлык курлык. Курлык курлык курлык? Курлык - курлык, курлык курлык. Курлык курлык курлык? Курлык - курлык, курлык курлык. Курлык курлык курлык? Курлык - курлык, курлык курлык. Курлык курлык курлык?">
    <meta name="keywords" content="курлык, курлык-курлык, голубь">
    <meta name="author" content="Рогатнев Никита">
    <meta name="viewport" content="width=device-width,user-scalable=no">

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/social-likes_birman.css" rel="stylesheet"> 
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<center>

 <div class="container profile">
        <div class="logo">
            <img src="img/logo.png" alt="голубь">
        </div>
            <br>
        <button id="btn" class="hire-me" onclick="document.getElementById('player').play()">КУРЛЫК</button>
<h1 id="countinfo"></h1>
        <audio style="display:none;" id="player">
            <source src="audio/sound.mp3" type="audio/mpeg; codecs='mp3'">
            <source src="audio/sound.wav" type="audio/wav">
            <source src="audio/sound.ogg" type="audio/ogg">
        </audio>
    </div>

    <div class="footer">
      <div class="social-likes" data-url="http://xn--j1aacto4c.xn--p1ai" data-title="Курлык!">
    	<div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
    	<div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
    	<div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
    	<div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
    	<div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
      </div>
    </div>
        
    <a href="http://www.rogatnev.ru/" target="_blank">
        <img src="http://www.rogatnev.ru/images/favicon.png" style="width:50px;" alt="rogatnev">
    </a>

</center>

<script>
$(document).ready(function(){
    $('#btn').click(function() {
        $.ajax({
            url: "button.php",
            cache: false,
            type: 'Get',
            data:{book:1},
            success:
                function(count) {
                    $('#countinfo').html("<b># <span>"+count+"</span></b>");
                }
        });
    });
});
</script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/social-likes.min.js"></script>


<script type="text/javascript">
(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter25647344 = new Ya.Metrika({id:25647344, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script>
</body>
</html>