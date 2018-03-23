<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="utf-8"/>
    <title>Покупка на криптовалута (Bitcoin, Etereum, DASH, Zchash, Monero, Litecoin...) | BlockChain.bg</title>
    <link rel="stylesheet" type="text/css" media="all" href="https://www.demo.stefanov.work/blockchain.bg/style.css"/>
    <link rel="shortcut icon" href="https://www.demo.stefanov.work/blockchain.bg/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.demo.stefanov.work/blockchain.bg/favicon/apple-touch-icon-180x180.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--<script>window.fbAsyncInit = function () {
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
        }(document, 'script', 'facebook-jssdk'));</script>-->
    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body itemscope itemtype="https://schema.org/WebPage">
<header>
    <div>
        <a href="https://www.demo.stefanov.work/blockchain.bg/dashboard" rel="home"></a>
        <nav>
            <ul>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/fund">Фонд</a></li>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/guide">Наръчник</a></li>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/news">Новини</a></li>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/about">За нас</a></li>
                <li class="join"><a href="https://www.demo.stefanov.work/blockchain.bg/login">Вход/Регистрация</a></li>
            </ul>
        </nav>
    </div>
</header>
<section class="buy-and-sell">
    <h4>Покупка на криптовалута (Bitcoin, Etereum, DASH, Zchash, Monero, Litecoin...)</h4>
    <article>
        <aside>
            <h5><span>1</span>Изберете криптовалута</h5>
            <a href="https://www.demo.stefanov.work/blockchain.bg/buy=dash" title="Купи DASH"
               class="dash">DASH</a><a
                href="https://www.demo.stefanov.work/blockchain.bg/buy=zec" title="Купи Zcash" class="zec">Zcash</a><a
                href="https://www.demo.stefanov.work/blockchain.bg/buy=xmr" title="Купи Monero" class="xmr">Monero</a><a
                href="https://www.demo.stefanov.work/blockchain.bg/buy=ltc" title="Купи Litecoin" class="ltc">Litecoin</a><a
                href="https://www.demo.stefanov.work/blockchain.bg/buy=btc" title="Купи Bitcoin" class="btc" id="select" id="select">Bitcoin</a><a
                href="https://www.demo.stefanov.work/blockchain.bg/buy=bch" title="Купи Bitcoin Cash" class="bch">Bitcoin Cash</a><a
                href="https://www.demo.stefanov.work/blockchain.bg/buy=eth" title="Купи Ethereum" class="eth">Ethereum</a>
            <div>
                <p id="exchange_rate"></p>
                <p id="commission">Комисионна: 0.00 лв.</p>
                <p id="transfer">Сума за плащане: 0.00 лв.</p>
            </div>
        </aside>
        <form action="" method="POST">
            <h5><span>2</span>Въведете сума или количество</h5>
            <label for="amount">Количество криптовалута<input name="amount" type="number" value="0" required="required" min="0.0001"
                                                              step="0.0001" id="amount"></label>
            <label for="amount_in_bgn">Сума в лева<input name="amount_in_bgn" type="number" value="0.00" min="1.8" required="required"
                                                         step="0.01" id="amount_in_bgn"></label>
            <h5><span>3</span>Попълнете данни за превода на криптовалутата</h5>
            <label for="wallet">Портфейл*<input name="wallet" type="text" value="" required="required"
                                                placeholder="Портфейл (Wallet за превод)"><span style="display:none">*Ако нямате такъв, си създайте от <a>тук</a></span></label>
            <h5><span>4</span>Попълнете данни за контакт с Вас</h5>
            <label for="email">Електронна поща*<input name="email" type="email" value="" required="required"
                                                      placeholder="Електронна поща за контакт"></label>
            <label for="phone">Телефон<input name="phone" type="tel" value="" placeholder="Телефон за контакт"></label>
            <input name="buy" type="submit" value="Купи"/>
            <span>*Сумата е ориентировъчна и включва комисионата на посредника, допринесъл за успешното осъществяване на транзакцията. След изпращане на заявката, наш представител ще се свърже с Вас за да уточним крайната цена, начина на плащане и да потвърдите заявката си!</span>
        </form>
    </article>
    <div style="clear:both"></div>
</section>

<marquee onmouseover="this.stop();" onmouseout="this.start();">
    <span id="btc"></span>
    <span id="bch"></span>
    <span id="eth"></span>
    <span id="dash"></span>
    <span id="zec"></span>
    <span id="xmr"></span>
    <span id="ltc"></span>
</marquee>

<footer>
    <div class="container">
        <div class="top">
            <div class="about">BlockChain.bg е онлайн платформа за търговия с криптовалути. Нашата цел е да предоставим удобни, качествени и
                изгодни услуги за развитие и употреба на криптовалутите в България.
            </div>
            <ul>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/found">Фонд</a></li>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/guide">Наръчник</a></li>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/news">Новини</a></li>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/about">За нас</a></li>
                <li><a href="https://www.demo.stefanov.work/blockchain.bg/contacts">Контакти</a></li>
            </ul>
            <p>бул. Черни Връх 47А ет. 4, София 1407, България<br>info@blockchain.bg<br>+359 893 777 310</p>
            </p>
        </div>
        <div class="bottom">
            <p class="left">&copy; 2015-2018 Хюман Либърти ЕООД, Всички права запазени</p>
            <p class="right">Уеб дизайн и изработка: <a href="https://www.stefanov.work" target="_blank">Мартин Стефанов</a></p>
        </div>
    </div>
    <div class="fb-customerchat" page_id="137979916852216" theme_color="#1a67b2"
         logged_in_greeting="Здравейте, как бихме могли да Ви бъдем полезни?"
         logged_out_greeting="Здравейте, как бихме могли да Ви бъдем полезни?"></div>
</footer>
<script>
    function getUriString() {
        var queries;
        var url = location.protocol + '//' + location.host + location.pathname;
        var getFiltervars = decodeURIComponent(url);

        if (getFiltervars.indexOf('=') > -1){

            var i = getFiltervars.split('=');

            queries = i[1]; // връща от (buy=eth )=> eth
            return queries;

        } else {

            queries = "btc";
            return queries;
        }

    }
    function getCurrency(uri, result){
        switch (uri){
            case "btc":
                $("#exchange_rate").html("Валутен курс: " + result.Bitcoin + "лв.");
                break;
            case "dash":
                $("#exchange_rate").html("Валутен курс: " + result.DASH + "лв.");
                break;
            case "zec":
                $("#exchange_rate").html("Валутен курс: " + result.Zcash + "лв.");
                break;
            case "xmr":
                $("#exchange_rate").html("Валутен курс: " + result.Monero + "лв.");
                break;
            case "ltc":
                $("#exchange_rate").html("Валутен курс: " + result.Litecoin + "лв.");
                break;
            case "bch":
                $("#exchange_rate").html("Валутен курс: " + result['Bitcoin Cash'] + "лв.");
                break;
            case "eth":
                $("#exchange_rate").html("Валутен курс: " + result.Ethereum + "лв.");
                break;
        }

    }

    function updateCurrency() {
        var q = getUriString();

        $.ajax({
            url:"http://localhost/MyScripts/crypto-currency/currency.php",
            // url: "https://www.demo.stefanov.work/blockchain.bg/modules/currency.php",
            method: "GET",
            success: function (result) {
                getCurrency(q, result);
                $("#btc").html("Bitcoin: " + result.Bitcoin);
                $("#bch").html("Bitcoin Cash: " + result['Bitcoin Cash']);
                $("#eth").html("Ethereum: " + result.Ethereum);
                $("#dash").html("DASH: " + result.DASH);
                $("#zec").html("Zcash: " + result.Zcash);
                $("#xmr").html("Monero: " + result.Monero);
                $("#ltc").html("Litecoin: " + result.Litecoin);

            }
        })
    }

    updateCurrency();
    $(function () {
        setInterval(function () {
            updateCurrency();
        }, 60000)
    })
</script>
<script>
    $(document).ready(function () {
        var fixing = 17604;
        var commission = 1.02;
        var currency = fixing * commission;
        var commissionValue;

        $("#amount").on("keyup change", function () {
            var val = $(this).val();
            var amount_in_bgn = val * fixing;
            $("#amount_in_bgn").val(amount_in_bgn.toFixed(2));
            commissionValue = parseFloat((amount_in_bgn*1.02) - (fixing * val));
            $("#commission").html("Комисионна: " + commissionValue.toFixed(2) + " лв.");
            $("#transfer").html("Сума за плащане: " + currency.toFixed(2) + " лв.");
        });

        $("#amount_in_bgn").on("keyup change", function () {
            var val = $(this).val();
            var amount = val / fixing;
            $("#amount").val(amount.toFixed(4));
            commissionValue = parseFloat(val*1.02 - val);
            $("#commission").html("Комисионна: " + commissionValue.toFixed(2) + " лв.");
            $("#transfer").html("Сума за плащане: " + parseFloat(amount * currency).toFixed(2) + " лв.");
        });
    });
</script>
</body>

</html>