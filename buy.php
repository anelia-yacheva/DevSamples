<!DOCTYPE html>
<html lang="bg">
<head>
<!--    <link rel="stylesheet" type="text/css" href="style.css?--><?php //echo date('l jS \of F Y h:i:s A'); ?><!--" />-->
    <meta charset="utf-8"/>
    <title>Покупка на криптовалута (Bitcoin, Etereum, DASH, Zchash, Monero, Litecoin...) | BlockChain.bg</title>
    <link rel="stylesheet" href="css/endlessRiver.css">
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

    <script src="endlessRiver.js"></script>
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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&subset=cyrillic');

        html, body, header, nav, section, article, aside, footer, div, img, h1, h2, h3, h4, h5, h6, p, a, span, ul, li, table, canvas, output {
            margin: 0px;
            padding: 0px;
            border: 0px;
            font-size: 16px;
            font: inherit;
            vertical-align: baseline;
        }

        header, nav, section, article, aside, footer {
            display: block;
        }

        ::selection {
            color: white;
            background: #1a67b2;
        }

        ::selection, ::-moz-selection {
            color: white;
            background: #1a67b2;
        }

        @keyframes fadein {
            from {opacity:0;} to {opacity:1;}
        }

        @-ms-keyframes fadein {
            from { opacity:0;} to {opacity:1;}
        }

        @-moz-keyframes fadein {
            from { opacity:0;} to {opacity:1;}
        }

        @-webkit-keyframes fadein {
            from {opacity:0;} to {opacity:1;}
        }

        @keyframes move {
            25% {opacity: 1;}
            33% {opacity:1; transform:translateY(30px);}
            67% {opacity:1; transform:translateY(40px);}
            100% {opacity:0; transform:translateY(55px) scale3d(0.5, 0.5, 0.5);}
        }

        @keyframes pulse {
            to {opacity:1;}
        }

        body {
            background: #f4fafa;
            font-family: Roboto, sans-serif;
            font-size: 16px;
            padding: 0px 0px 60px 0px;
        }

        article {
            float: left;
            position: relative;
        }

        @media screen and (max-width: 5000px) {

            header {
                background: white;
                box-shadow: 0px 1px 5px #e1e1e1;
                padding: 20px 0px;
                position: relative;
                top: 0px;
                height: 53px;
                z-index: 999;
                width: 100%;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            header>div {
                margin: auto;
                width: 960px;
            }

            header>div>a {
                float: left;
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/logo.png) no-repeat;
                background-size: 173px 53px;
                height: 53px;
                width: 173px;
            }

            header>div>nav {
                float: right;
                position: relative;
            }

            header>div>nav>ul {
                float: left;
                list-style: none;
            }

            header>div>nav>ul>li {
                display: inline;
                float: left;
                font-size: 1.2em;
                margin: 13px 0px 0px 20px;
                position: relative;
                text-transform: uppercase;
            }

            header>div>nav>ul>li.join {
                border: 1px solid #f9b016;
                border-radius: 6px;
                cursor: pointer;
                display: none;
                font-size: 0.9em;
                margin: 5px 0px 0px 20px;
                padding: 10px 14px 11px 14px;
            }

            header>div>nav>ul>li.join:hover {
                background: #f9b016;
            }

            header>div>nav>ul>li>a {
                color: #1a67b2;
                cursor: pointer;
                letter-spacing: 1px;
                text-decoration: none;
            }

            header>div>nav>ul>li.join>a {
                color: #f9b016;
            }

            header>div>nav>ul>li>a:hover {
                filter: grayscale(100%);
            }

            header>div>nav>ul>li.join:hover>a {
                color: white;
                filter: none;
            }

            figure {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/1802221354.jpg) #151d2e center fixed no-repeat;
                background-size: cover;
                margin: 0px;
                height: 582px;
                width: 100%;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            figure>figcaption {
                color: rgba(255, 255, 255, 0.8);
                font-size: 3em;
                font-weight: 900;
                letter-spacing: 7px;
                margin: auto;
                padding: 252px 0px 0px 0px;
                text-align: center;
                text-transform: uppercase;
                width: 960px;
            }

            figure>div {
                clear: both;
                margin: auto;
                padding: 70px 0px 0px 0px;
                width: 460px;
            }

            figure>div>a {
                background: #ebebeb;
                border-radius: 8px;
                color: #f9b016;
                cursor: pointer;
                float: left;
                font-size: 1.2em;
                letter-spacing: 1px;
                margin: 0px 0px 0px 30px;
                padding: 14px 16.5px 14px 16px;
                text-decoration: none;
                text-transform: uppercase;
            }

            figure>div>a:hover {
                background: #f9b016;
                color: white;
            }

            section.trade {
                border-bottom: 1px solid #e1e1e1;
                clear: both;
                padding: 93px 0px 88px 0px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.trade>h4 {
                font-size: 1.4em;
                margin: auto auto 32px auto;
                text-align: center;
                text-transform: uppercase;
                width: 800px;
            }

            section.trade>ul {
                list-style: none;
                margin: auto;
                width: 620px;
            }

            section.trade>ul>li {
                display: inline;
                float: left;
                font-size: 1.2em;
                padding: 25px 10px 25px 60px;
                width: 214px
            }

            section.trade>ul>li.variety-coins {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1802231131.png) left center no-repeat;
                background-size: 48px 48px;
            }

            section.trade>ul>li.cash-payment {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1802231133.png) left 2px center no-repeat;
                background-size: 44px 48px;
                float: right;
            }

            section.trade>ul>li.unlimited-trade {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1802231132.png) left center no-repeat;
                background-size: 48px 48px;
            }

            section.trade>ul>li.best-price {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1802231134.png) left 5px center no-repeat;
                background-size: 38px 48px;
                float: right;
            }

            section.trade>ul>li.fixed-price {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1802231135.png) left 7px center no-repeat;
                background-size: 35px 48px;
            }

            section.trade>ul>li.phone-assistant {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1802231136.png) left center no-repeat;
                background-size: 48px 45px;
                float: right;
            }

            section.trade>ul>li:hover {
                color: #f9b016;
            }

            section.lastnews {
                background: white;
                clear: both;
                padding: 93px 0px 100px 0px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.lastnews>h4 {
                font-size: 1.4em;
                margin: auto auto 62px auto;
                text-align: center;
                text-transform: uppercase;
                width: 800px;
            }

            section.lastnews>.last {
                margin: auto;
                width: 960px;
            }

            section.lastnews>div>a {
                float: left;
                cursor: pointer;
                min-height: 272px;
                text-decoration: none;
            }

            section.lastnews>div>a>img {
                float: right;
                width: 480px;
            }

            section.lastnews>div>a>.content {
                float: left;
                padding: 0px 50px 0px 0px;
                position: relative;
                min-height: 272px;
                width: 430px;
            }

            section.lastnews>div>a>div>h3 {
                color: #1a67b2;
                float: left;
                font-size: 1.38em;
                margin: 0px 0px 28px 0px;
            }

            section.lastnews>div>a>div>p {
                color: #757575;
                float: left;
                letter-spacing: 0.4px;
                text-align: justify;
            }

            section.lastnews>div>a>div>span {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021100.png) left center no-repeat;
                bottom: 0px;
                color: #34495e;
                float: left;
                left: 0px;
                letter-spacing: 0.4px;
                padding: 0px 0px 0px 19px;
                position: absolute;
            }

            section.lastnews>div>a>div>strong {
                bottom: 0px;
                color: #1a67b2;
                float: right;
                letter-spacing: 0.4px;
                position: absolute;
                right: 50px;
            }

            section.fund {
                margin: auto;
                padding: 93px 0px 100px 0px;
                width: 960px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.fund>h4 {
                font-size: 1.4em;
                margin: auto auto 54px auto;
                text-align: center;
                text-transform: uppercase;
                width: 100%;
            }

            section.fund>.about {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/1803041129.png) top 19px right no-repeat;
                float: left;
                font-size: 0.94em;
                margin: 0px 0px 16px 0px;
                padding: 0px 440px 0px 0px;
                width: 520px;
            }

            section.fund>.security {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/1803041228.png) center left no-repeat;
                float: left;
                font-size: 0.94em;
                margin: 0px 0px 36px 0px;
                padding: 0px 0px 0px 400px;
                width: 560px;
            }

            section.fund>.invest {
                float: left;
                font-size: 0.94em;
                width: 100%;
            }

            section.fund>div>ul {
                float: left;
                list-style: none;
                width: 100%;
            }

            section.fund>div>p {
                float: left;
                padding: 15px 0px;
                text-align: justify;
                width: 100%;
            }

            section.guide {
                margin: auto;
                padding: 93px 0px 100px 0px;
                width: 960px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.guide>h4 {
                font-size: 1.4em;
                margin: auto;
                text-align: center;
                text-transform: uppercase;
                width: 100%;
            }

            section.guide>article {
                float: left;
                margin: 42px 0px 0px 0px;
                width: 600px;
            }

            section.guide>article>p {
                float: left;
                font-size: 0.94em;
                letter-spacing: 1px;
                margin: 15px 0px;
                text-align: justify;
                width: 100%;
            }

            section.guide>article>.social {
                float: left;
                border-top: 1px solid #d8d8d8;
                border-bottom: 4px solid #d8d8d8;
                margin-top: 25px;
                padding: 25px 0px;
                width: 100%;
            }

            section.guide>article>.social>h3 {
                color: #d8d8d8;
                float: left;
                font-size: 1.4em;
                font-weight: normal;
                letter-spacing: 3px;
                margin: 4px 0px;
                text-transform: uppercase;
            }

            section.guide>article>.social>a {
                background: #707070;
                color: white;
                cursor: pointer;
                float: left;
                font-size: 0.84em;
                margin-left: 40px;
                padding: 10px 16px 10px 54px;
                text-decoration: none;
            }

            section.guide>article>.social>a.facebook {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021125.png) #707070 left center no-repeat;
            }

            section.guide>article>.social>a:hover.facebook {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021125.png) #395797 left center no-repeat;
            }

            section.guide>article>.social>a.twitter {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021126.png) #707070 left center no-repeat;
            }

            section.guide>article>.social>a:hover.twitter {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021126.png) #0f91e0 left center no-repeat;
            }

            section.guide>article>.social>a.google {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021127.png) #707070 left center no-repeat;
            }

            section.guide>article>.social>a:hover.google {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021127.png) #c93427 left center no-repeat;
            }

            section.guide>aside {
                float: right;
                margin: 62px 0px 0px 0px;
                width: 300px;
            }

            section.guide>aside>form {
                background: white;
                box-shadow: 0px 1px 5px #e1e1e1;
                float: right;
                margin: 60px 0px;
                padding: 25px;
                width: 250px;
            }

            section.guide>aside>form>p {
                float: left;
                font-size: 0.86em;
                letter-spacing: 0.2px;
                margin: -3px 0px 19px 0px;
                text-align: justify;
            }

            section.guide>aside>form>input[name="email"] {
                background: white;
                border: 0px;
                border-bottom: 1px solid #b7b7b7;
                color: #34495e;
                float: left;
                font-family: Roboto, sans-serif;
                font-size: 0.9em;
                letter-spacing: 0.2px;
                outline: none;
                padding: 7px 0px 3px 0px;
                width: 140px;
            }

            section.guide>aside>form>input[name="subscribe"] {
                background: transparent;
                border: 1px solid #1a67b2;
                border-radius: 4px;
                color: #1a67b2;
                cursor: pointer;
                float: right;
                font-size: 0.74em;
                outline: none;
                padding: 8px 10px 7px 10px;
                text-decoration: none;
                text-transform: uppercase;
            }

            section.guide>aside>form>input[name="subscribe"]:hover {
                background: #1a67b2;
                color: white;
            }

            section.guide>aside>.articles {
                float: left;
                border-left: 1px solid #e0e0e0;
            }

            section.guide>aside>.articles>h4 {
                float: left;
                margin: 30px 0px 0px 0px;
                padding: 0px 0px 0px 16px;
            }

            section.guide>aside>.articles>ul {
                float: left;
                list-style: none;
                padding: 13px 0px 0px 0px;
                width: 299px;
            }

            section.guide>aside>.articles>ul>a {
                float: left;
                margin: 0px 0px 16px 0px;
                text-decoration: none;
                width: 100%;
            }

            section.guide>aside>.articles>ul>a>h5 {
                background: url(https://www.prowork.bg/img/template/icons/1711131260.png) left center no-repeat;
                clear: both;
                color: #34495e;
                float: left;
                font-size: 0.84em;
                margin: 0px 0px 0px -3px;
                padding: 0px 0px 0px 18px;
                text-align: justify;
            }

            section.guide>aside>.articles>ul>a:hover>h5 {
                filter: grayscale(100%);
            }

            section.guide>ul {
                float: left;
                font-size: 1.3em;
                letter-spacing: 0.4px;
                list-style: none;
                margin: 62px 60px 0px 0px;
                width: 280px;
            }

            section.guide>ul.general-questions {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021813.png) top left no-repeat;
                padding: 0px 0px 3px 39px;
                width: 241px;
            }

            section.guide>ul.economic-questions {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021814.png) top left no-repeat;
                padding: 0px 0px 3px 45px;
                width: 235px;
            }

            section.guide>ul.technical-questions {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021815.png) top left no-repeat;
                margin: 62px 0px 0px 0px;
                padding: 0px 0px 3px 39px;
                width: 241px;
            }

            section.guide>ul.legal-questions {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021816.png) top left no-repeat;
                padding: 0px 0px 3px 40px;
                width: 240px;
            }

            section.guide>ul>h5 {
                color: #00aeef;
                margin: 0px 0px 5px 0px;
                float: left;
            }

            section.guide>ul>h5>span {
                float: right;
                font-size: 0.74em;
                filter: grayscale(100%);
                margin: 2px 0px 0px 5px;
            }

            section.guide>ul>li {
                float: left;
                width: 280px;
            }

            section.guide>ul.general-questions>li {
                margin: 5px 0px 5px -39px;
            }

            section.guide>ul.economic-questions>li {
                margin: 5px 0px 5px -45px;
            }

            section.guide>ul.technical-questions>li {
                margin: 5px 0px 5px -39px;
            }

            section.guide>ul.legal-questions>li {
                margin: 5px 0px 5px -40px;
            }

            section.guide>ul>li>a {
                color: #979797;
                float: left;
                font-size: 0.74em;
                text-decoration: none;
            }

            section.guide>ul>li>a:hover {
                color: #cccccc;
            }

            section.news {
                margin: auto;
                padding: 93px 0px 100px 0px;
                width: 960px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.news>h4 {
                font-size: 1.4em;
                margin: auto auto 62px auto;
                text-align: center;
                text-transform: uppercase;
                width: 100%;
            }

            section.news>article {
                float: left;
                width: 600px;
            }

            section.news>article>.header {
                color: #34495e;
                float: left;
                margin: -6px 0px 0px 0px;
                width: 100%;
            }

            section.news>article>div>span {
                float: left;
                font-size: 1.1em;
                letter-spacing: 0.4px;
                margin: 0px 40px 20px 0px;
            }

            section.news>article>div>span.publish {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021100.png) left center no-repeat;
                padding: 0px 0px 0px 19px;
            }

            section.news>article>div>span.author {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021102.png) left center no-repeat;
                padding: 0px 0px 0px 20px;
            }

            section.news>article>img {
                float: left;
                width: 100%;
            }

            section.news>article>p {
                float: left;
                font-size: 1.14em;
                letter-spacing: 0.4px;
                margin: 15px 0px;
                text-align: justify;
                width: 100%;
            }

            section.news>article>p b strong {
                font-family: Roboto, sans-serif;
            }

            section.news>article>p a {
                color: gray;
                text-decoration: none;
            }

            section.news>article>p a:hover {
                text-decoration: underline;
            }

            section.news>article>.social {
                float: left;
                border-top: 1px solid #d8d8d8;
                border-bottom: 4px solid #d8d8d8;
                margin-top: 25px;
                padding: 25px 0px;
                width: 100%;
            }

            section.news>article>.social>h3 {
                color: #d8d8d8;
                float: left;
                font-size: 1.4em;
                font-weight: normal;
                letter-spacing: 3px;
                margin: 4px 0px;
                text-transform: uppercase;
            }

            section.news>article>.social>a {
                background: #707070;
                color: white;
                cursor: pointer;
                float: left;
                font-size: 0.84em;
                margin-left: 40px;
                padding: 10px 16px 10px 54px;
                text-decoration: none;
            }

            section.news>article>.social>a.facebook {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021125.png) #707070 left center no-repeat;
            }

            section.news>article>.social>a:hover.facebook {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021125.png) #395797 left center no-repeat;
            }

            section.news>article>.social>a.twitter {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021126.png) #707070 left center no-repeat;
            }

            section.news>article>.social>a:hover.twitter {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021126.png) #0f91e0 left center no-repeat;
            }

            section.news>article>.social>a.google {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021127.png) #707070 left center no-repeat;
            }

            section.news>article>.social>a:hover.google {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021127.png) #c93427 left center no-repeat;
            }

            section.news>aside {
                float: right;
                width: 300px;
            }

            section.news>aside>form {
                background: white;
                box-shadow: 0px 1px 5px #e1e1e1;
                float: right;
                margin: 60px 0px;
                padding: 25px;
                width: 250px;
            }

            section.news>aside>form>p {
                float: left;
                font-size: 0.86em;
                letter-spacing: 0.2px;
                margin: -3px 0px 19px 0px;
                text-align: justify;
            }

            section.news>aside>form>input[name="email"] {
                background: white;
                border: 0px;
                border-bottom: 1px solid #b7b7b7;
                color: #34495e;
                float: left;
                font-family: Roboto, sans-serif;
                font-size: 0.9em;
                letter-spacing: 0.2px;
                outline: none;
                padding: 7px 0px 3px 0px;
                width: 140px;
            }

            section.news>aside>form>input[name="subscribe"] {
                background: transparent;
                border: 1px solid #1a67b2;
                border-radius: 4px;
                color: #1a67b2;
                cursor: pointer;
                float: right;
                font-size: 0.74em;
                outline: none;
                padding: 8px 10px 7px 10px;
                text-decoration: none;
                text-transform: uppercase;
            }

            section.news>aside>form>input[name="subscribe"]:hover {
                background: #1a67b2;
                color: white;
            }

            section.news>aside>.news {
                border-left: 1px solid #e0e0e0;
                float: left;
                padding: 13px 0px 0px 0px;
                width: 299px;
            }

            section.news>aside>.news>a {
                float: left;
                margin: 0px 0px 16px 0px;
                text-decoration: none;
                width: 100%;
            }

            section.news>aside>.news>a>span {
                background: url(https://www.prowork.bg/img/template/icons/1711131260.png) left center no-repeat;
                clear: both;
                color: #f35343;
                float: left;
                font-size: 0.84em;
                margin: 0px 0px 0px -3px;
                padding: 0px 0px 0px 18px;
            }

            section.news>aside>.news>a>h5 {
                color: #34495e;
                float: left;
                font-size: 0.84em;
                letter-spacing: 0.5px;
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 15px;
                text-align: justify;
            }

            section.news>aside>.news>a:hover>h5 {
                filter: grayscale(100%);
            }

            section.news>a {
                background: white;
                box-shadow: 0px 1px 5px #e1e1e1;
                cursor: pointer;
                float: left;
                font-size: 0.9em;
                margin: 70px 0px 0px 0px;
                text-decoration: none;
                width: 440px;
            }

            section.news>a:nth-child(even) {
                float: right;
            }

            section.news>a.cover {
                float: left;
                font-size: 1em;
                margin: 0px;
                min-height: 272px;
                width: 100%;
            }

            section.news>a>img {
                float: left;
                width: 100%;
            }

            section.news>a>.content {
                float: left;
                padding: 30px;
                position: relative;
                min-height: 212px;
                width: 380px;
            }

            section.news>a>div>h3 {
                color: #1a67b2;
                float: left;
                font-size: 1.38em;
                margin: 0px 0px 28px 0px;
            }

            section.news>a>div>p {
                color: #757575;
                float: left;
                text-align: justify;
            }

            section.news>a>div>span {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803021100.png) left center no-repeat;
                color: #34495e;
                float: left;
                letter-spacing: 0.4px;
                margin: 28px 0px 0px 0px;
                padding: 0px 0px 0px 19px;
            }

            section.news>a>div>strong {
                color: #1a67b2;
                float: right;
                margin: 28px 0px 0px 0px;
                letter-spacing: 0.4px;
            }

            section.news>a.cover>.content {
                width: 420px;
            }

            section.news>a.cover>div>p {
                letter-spacing: 0.4px;
            }

            section.news>a.cover>div>span {
                bottom: 30px;
                left: 30px;
                margin: 0px;
                position: absolute;
            }

            section.news>a.cover>div>strong {
                bottom: 30px;
                margin: 0px;
                position: absolute;
                right: 30px;
            }

            section.news>a.cover>img {
                float: right;
                width: 480px;
            }

            section.news>.pagination {
                clear: both;
                float: left;
                margin: 20px 0px 0px 0px;
                position: relative;
                width: 100%;
            }

            section.news>.pagination>a {
                float: left;
                border: 1px solid #1a67b2;
                border-radius: 8px;
                color: #1a67b2;
                cursor: pointer;
                font-size: 1.24em;
                margin: 10px 20px 0px 0px;
                padding: 15px 20px;
                text-decoration: none;
            }

            section.news>.pagination>a:hover {
                background: #1a67b2;
                color: white;
            }

            section.news>.pagination>a.active {
                background: #bbd0e4;
                border: 1px solid #1a67b2;
                color: #1a67b2;
            }

            section.about {
                margin: auto;
                padding: 62px 0px 0px 0px;
                width: 960px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.about>.who-are-we {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/1803011223.png) right top 6px no-repeat;
                float: left;
                padding: 18px 560px 18px 0px;
                width: 400px;
            }

            section.about>.our-aim {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/1803011224.png) left top 24px no-repeat;
                float: left;
                margin: 40px 0px 80px 0px;
                padding: 0px 0px 0px 460px;
                width: 500px;
            }

            section.about>div>p {
                float: left;
                padding: 15px 0px;
                text-align: justify;
                width: 100%;
            }

            section.about>div>p.bold {
                font-size: 1.28em;
                font-weight: bold;
            }

            section.about>div>p>a {
                color: #f9b016;
                text-decoration: none;
            }

            section.about>div>p>a:hover {
                text-decoration: underline;
            }

            section.contacts {
                margin: auto;
                padding: 93px 0px 0px 0px;
                width: 960px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.contacts>h4 {
                font-size: 1.4em;
                margin: auto auto 62px auto;
                text-align: center;
                text-transform: uppercase;
                width: 960px;
            }

            section.contacts>div {
                float: left;
                margin: 0px 0px 50px 0px;
                width: 420px;
            }

            section.contacts>div>p {
                float: left;
                margin: 0px 0px 30px 0px;
                text-align: justify;
                width: 100%;
            }

            section.contacts>form {
                float: right;
                margin: 0px 0px 50px 0px;
                width: 380px;
            }

            section.contacts>form>input[name="business"] {
                background: white;
                border: 0px;
                border-radius: 0.3em;
                box-shadow: inset 0.5px 0.5px 1px #b7b7b7;
                color: #34495e;
                float: left;
                font-family: Roboto, sans-serif;
                font-size: 1em;
                margin: 0px 0px 30px 0px;
                outline: none;
                padding: 17px 20px;
                width: 340px;
            }

            section.contacts>form>input[name="name"] {
                background: white;
                border: 0px;
                border-radius: 0.3em;
                box-shadow: inset 0.5px 0.5px 1px #b7b7b7;
                color: #34495e;
                float: left;
                font-family: Roboto, sans-serif;
                font-size: 1em;
                margin: 0px 0px 30px 0px;
                outline: none;
                padding: 17px 20px;
                width: 340px;
            }

            section.contacts>form>input[name="email"] {
                background: white;
                border: 0px;
                border-radius: 0.3em;
                box-shadow: inset 0.5px 0.5px 1px #b7b7b7;
                color: #34495e;
                float: left;
                font-family: Roboto, sans-serif;
                font-size: 1em;
                margin: 0px 0px 30px 0px;
                outline: none;
                padding: 17px 20px;
                width: 340px;
            }

            section.contacts>form>textarea {
                background: white;
                border: 0px;
                border-radius: 0.3em;
                box-shadow: inset 0.5px 0.5px 1px #b7b7b7;
                color: #34495e;
                float: left;
                font-family: Roboto, sans-serif;
                font-size: 1em;
                margin: 0px 0px 30px 0px;
                outline: none;
                padding: 17px 20px;
                height: 134px;
                width: 340px;
            }

            section.contacts>form>input[name="submit"] {
                background: transparent;
                border: 1px solid #1a67b2;
                border-radius: 4px;
                color: #1a67b2;
                cursor: pointer;
                float: right;
                font-size: 0.84em;
                outline: none;
                padding: 12px 15px;
                text-decoration: none;
                text-transform: uppercase;
            }

            section.contacts>form>input[name="submit"]:hover {
                background: #1a67b2;
                color: white;
            }

            section.buy-and-sell {
                margin: auto;
                padding: 93px 0px 100px 0px;
                width: 960px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            section.buy-and-sell>h4 {
                font-size: 1.4em;
                margin: auto;
                text-align: center;
                text-transform: uppercase;
                width: 100%;
            }

            section.buy-and-sell>article {
                clear: both;
                margin: auto;
                width: 960px;
            }

            section.buy-and-sell>article>aside {
                float: left;
                width: 300px;
            }

            section.buy-and-sell>article>aside>h5 {
                clear: both;
                color: #1a67b2;
                float: left;
                margin: 62px 0px 15px 0px;
                padding: 5px 0px 7px 0px;
                text-transform: uppercase;
                width: 100%;
            }

            section.buy-and-sell>article>aside>h5>span {
                background: #1a67b2;
                border-radius: 50%;
                color: #f4fafa;
                margin: 0px 10px 0px 0px;
                padding: 5px 13px 7px 13px;
            }

            section.buy-and-sell>article>aside>a {
                color: #e0e0e0;
                float: left;
                font-size: 1.3em;
                margin: 0px 0px 20px 0px;
                padding: 0px 0px 0px 40px;
                text-decoration: none;
                width: 110px;
            }

            section.buy-and-sell>article>aside>a.btc {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031440.png) left 6px center no-repeat;
                background-size: 20px 20px;
            }

            section.buy-and-sell>article>aside>a.bch {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031441.png) left center no-repeat;
                background-size: 33px 20px;
            }

            section.buy-and-sell>article>aside>a.eth {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031442.png) left 6px center no-repeat;
                background-size: 20px 20px;
            }

            section.buy-and-sell>article>aside>a.dash {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031443.png) left 6px center no-repeat;
                background-size: 20px 20px;
            }

            section.buy-and-sell>article>aside>a.zec {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031444.png) left 6px center no-repeat;
                background-size: 20px 20px;
            }

            section.buy-and-sell>article>aside>a.xmr {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031445.png) left 6px center no-repeat;
                background-size: 20px 20px;
            }

            section.buy-and-sell>article>aside>a.ltc {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031446.png) left 6px center no-repeat;
                background-size: 20px 20px;
            }

            section.buy-and-sell>article>aside>a.xrp {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/icons/1803031447.png) left 6px center no-repeat;
                background-size: 20px 20px;
            }

            section.buy-and-sell>article>aside>a:hover {
                color: #757575;
            }

            section.buy-and-sell>article>aside>a#select {
                color: #757575;
            }

            section.buy-and-sell>article>aside>div {
                float: left;
                margin: 20px 0px 0px 0px;
                width: 100%;
            }

            section.buy-and-sell>article>aside>div>p {
                color: #1a67b2;
                float: left;
                margin: 20px 0px 0px 0px;
                text-transform: uppercase;
                width: 100%;
            }

            section.buy-and-sell>article>form {
                float: right;
                width: 560px;
            }

            section.buy-and-sell>article>form>h5 {
                clear: both;
                color: #1a67b2;
                float: left;
                margin: 62px 0px 15px 0px;
                padding: 5px 0px 7px 0px;
                text-transform: uppercase;
                width: 100%;
            }

            section.buy-and-sell>article>form>h5>span {
                background: #1a67b2;
                border-radius: 50%;
                color: #f4fafa;
                margin: 0px 10px 0px 0px;
                padding: 5px 13px 7px 13px;
            }

            section.buy-and-sell>article>form>label {
                float: left;
                font-size: 0.9em;
                margin: 0px 60px 0px 0px;
                width: 238px;
            }

            section.buy-and-sell>article>form>label[for="amount_in_bgn"] {
                border: 0px;
                margin: 0px;
            }

            section.buy-and-sell>article>form>label[for="wallet"] {
                border: 0px;
                margin: 0px;
                width: 100%;
            }

            section.buy-and-sell>article>form>label[for="phone"] {
                border: 0px;
                margin: 0px;
            }

            section.buy-and-sell>article>form>label>input {
                float: left;
                outline: none;
                padding: 8px 10px;
                width: 238px;
            }

            section.buy-and-sell>article>form>label>input[name="wallet"] {
                width: 536px;
            }

            section.buy-and-sell>article>form>label>span {
                clear: both;
                color: red;
                float: left;
                font-size: 0.9em;
                margin: 0px 0px 8px 0px;
                width: 100%;
            }

            section.buy-and-sell>article>form>input[type="submit"] {
                background: transparent;
                border: 1px solid #1a67b2;
                border-radius: 4px;
                color: #1a67b2;
                cursor: pointer;
                float: right;
                font-size: 0.84em;
                margin: 30px 0px 0px 0px;
                outline: none;
                padding: 12px 15px;
                text-decoration: none;
                text-transform: uppercase;
            }

            section.buy-and-sell>article>form>input[type="submit"]:hover {
                background: #1a67b2;
                color: white;
            }

            section.buy-and-sell>article>form>span {
                float: left;
                color: red;
                font-size: 0.9em;
                margin: 62px 0px 0px 0px;
                text-align: justify;
            }

            marquee {
                background: #f9b016;
                bottom: 0px;
                color: white;
                cursor: default;
                font-size: 1.2em;
                left: 0px;
                position: fixed;
                right: 0px;
                height: 60px;
                width: 100%;
                z-index: 1900;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            marquee>span {
                /*float: left;*/
                margin: 30px 30px 0px 30px;
                padding: 16px 0px;
            }

            footer {
                clear: both;
                background: #151d2e;
                color: white;
                height: 320px;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }

            footer>div {
                margin: auto;
                width: 960px;
            }

            footer>div>.top {
                float: left;
                padding: 70px 0px 36px 0px;
                width: 100%;
            }

            footer>div>.top>.about {
                background: url(https://www.demo.stefanov.work/blockchain.bg/img/template/logo_white.png) no-repeat;
                float: left;
                padding: 64px 0px 0px 0px;
                text-align: justify;
                width: 420px;
            }

            footer>div>.top>ul {
                float: right;
                list-style: none;
                margin: -7px 0px 45px 0px;
            }

            footer>div>.top>ul>li {
                float: left;
            }

            footer>div>.top>ul>li>a {
                color: white;
                float: left;
                letter-spacing: 1px;
                margin: 0px 0px 0px 20px;
                text-decoration: none;
            }

            footer>div>.top>ul>li>a:hover {
                color: #444a58;
            }

            footer>div>.top>p {
                float: right;
                letter-spacing: 1px;
                text-align: right;
            }

            footer>div>.bottom {
                border-top: 1px solid #444a58;
                float: left;
                font-size: 0.9em;
                padding: 33px 0px 20px 0px;
                width: 100%;
            }

            footer>div>.bottom>p.left {
                float: left;
            }

            footer>div>.bottom>p.right {
                float: right;
            }

            footer>div>.bottom>p>a {
                color: #f9b016;
                text-decoration: none;
            }

            footer>div>.bottom>p>a:hover {
                text-decoration: underline;
            }
        }
    </style>


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
<div style="width: 100%;height: 50px; background: #ffd62f; color: white;">
    <ul id="rotator">
        <li id="btc"></li>
        <li id="bch"></li>
        <li id="eth"></li>
        <li id="dash"></li>
        <li id="zec"></li>
        <li id="xmr"></li>
        <li id="ltc"></li>
        <li id="xrp"></li>
    </ul>

</div>
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
            <p>бул. Черни Връх 47А ет. 4, София 1407, България<br>
                info@blockchain.bg<br>+359 893 777 310</p>
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
<script src="js/endlessRiver.js"></script>

<script>
    updateCurrency();

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
            //url:"http://localhost/MyScripts/crypto-currency/currency.php",
            // url: "https://www.demo.stefanov.work/blockchain.bg/modules/currency.php",
            method: "GET",
            success: function (result) {
                getCurrency(q, result);

                $("#btc").html("Bitcoin: " + result.Bitcoin + " лв.");
                $("#bch").html("Bitcoin Cash: " + result['Bitcoin Cash'] + " лв.");
                $("#eth").html("Ethereum: " + result.Ethereum + " лв.");
                $("#dash").html("DASH: " + result.DASH + " лв.");
                $("#zec").html("Zcash: " + result.Zcash + " лв.");
                $("#xmr").html("Monero: " + result.Monero + " лв.");
                $("#ltc").html("Litecoin: " + result.Litecoin + " лв.");
                $("#xrp").html("Ripple: " + result.Ripple + " лв.");

                $("#rotator").endlessRiver({

                    // scrolling speed in ms
                    speed: 50,

                    // pause on hover
                    pause: true,
                });

            }
        })
    }

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
            var amount_in_bgn = val * currency;
            $("#amount_in_bgn").val(amount_in_bgn.toFixed(2));

            if (val == 0){
                commissionValue = 0;
            }
            commissionValue = parseFloat(amount_in_bgn - (fixing * val));

            if(commissionValue<50){
                commissionValue = 50;
            }

            $("#commission").html("Комисионна: " + commissionValue.toFixed(2) + " лв.");
            $("#transfer").html("Сума за плащане: " + amount_in_bgn.toFixed(2) + " лв.");
        });

        $("#amount_in_bgn").on("keyup change", function () {
            var val = $(this).val();
            var amount = val / currency;
            $("#amount").val(amount.toFixed(4));
            commissionValue = parseFloat(val - (val / commission));

            if(commissionValue<50){
                commissionValue = 50;
            }
            $("#commission").html("Комисионна: " + commissionValue.toFixed(2) + " лв.");
            $("#transfer").html("Сума за плащане: " + parseFloat(amount * currency).toFixed(2) + " лв.");
        });
    });
</script>
</body>

</html>