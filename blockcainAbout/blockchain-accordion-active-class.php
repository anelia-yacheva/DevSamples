<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="utf-8"/>
    <title>BlockChain.bg - Инвестирай в криптовалута</title>
    <link rel="stylesheet" type="text/css" media="all" href="https://www.blockchain.bg/style.css"/>
    <link rel="shortcut icon" href="https://www.blockchain.bg/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="https://www.blockchain.bg/favicon/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.blockchain.bg/favicon/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.blockchain.bg/favicon/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.blockchain.bg/favicon/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.blockchain.bg/favicon/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.blockchain.bg/favicon/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.blockchain.bg/favicon/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.blockchain.bg/favicon/apple-touch-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.blockchain.bg/favicon/apple-touch-icon-180x180.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.fbAsyncInit = function () {
            FB.init({appId: '153878875325740', autoLogAppEvents: true, xfbml: true, version: 'v2.12'});
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/bg_BG/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <style>
        .accordion-active {
            color: red;
        }
    </style>
</head>

<body itemscope itemtype="https://schema.org/WebPage">

<section class="bullets">
    <h4>Търгувай криптовалути бързо и лесно, през BlockChain.bg</h4>
    <ul>
        <li class="accordion bullet-one" data-accordion="bullet-one">
            Удобна и лесна услуга
        </li>
        <li class="accordion bullet-two" data-accordion="bullet-two">
            Бързо изпълнение
        </li>
        <div id="bullet-one" style="display:none"><p>- без загуба на време за валутни преводи в чужбина и регистрации по борси.</p></div>
        <div id="bullet-two" style="display:none"><p>- понякога цените варират с над 10% на ден. Бързото изпълнение на сделка ви гарантира
                цената, която желаете.</p></div>
        <li class="accordion bullet-three" data-accordion="bullet-three">
            Заключване на цена
        </li>
        <li class="accordion bullet-four" data-accordion="bullet-four">
            Плащане в брой
        </li>
        <div id="bullet-three" style="display:none"><p>- предлагаме предварително фиксиране на цена по телефона, за клиенти, с които вече
                сме извършвали поне една сделка.</p></div>
        <div id="bullet-four" style="display:none"><p>- можете да платите в брой за сделки до 10 000 лв.</p></div>
        <li class="accordion bullet-five" data-accordion="bullet-five">
            Възможност<br>за големи сделки
        </li>
        <li class="accordion bullet-six" data-accordion="bullet-six">
            Координация<br>по телефона
        </li>
        <div id="bullet-five" style="display:none"><p>- услугата е подходяща за големи частни инвеститори, общини, фондове и банки. Сделки
                от големи размери могат да изместят борсовата цена с няколко процента. Нашата услуга решава този проблем.</p></div>
        <div id="bullet-six" style="display:none"><p>- при необходимост можете да се свържете с нас в делнични дни от 9:00 до 18:00 на +359
                893 777 310.</p></div>
    </ul>
    <div style="clear:both"></div>
</section>

<script>
    // ======================== ACCORDION =================================== //
    $(document).on("click", ".accordion", function () {
        $(".accordion").removeClass('accordion-active');
        var selectedElement = $(this).data('accordion');
        var elementId = ("#" + selectedElement);
        if ($(elementId).css('display') === "block") {
            $(elementId).slideUp();
        } else {
            $("[id^=bullet-]").slideUp();
            $(elementId).slideDown();
            $(this).addClass('accordion-active');
        }
    })
    //==========================================================================//
</script>
</body>

</html>