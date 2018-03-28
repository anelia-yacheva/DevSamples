<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        .panels ul li {
            display: inline-block;
        }

        .panels div.back {
            transform: rotateY(90deg);
        }

        .panels div.front {
            position: absolute;
        }

        .panels li:hover{
            cursor: pointer;
        }

        .panels li:hover div.front{
            animation: twirl 0.3s ease-in forwards;
        }

        .panels li:hover div.back{
            animation: twirl 0.3s 0.3s ease-out forwards reverse;
        }

        @keyframes twirl {
            0% {
                transform: rotateY(0deg)
            }
            100% {
                transform: rotateY(90deg);
            }

        }

        .front .card-body{
            color: white;
            background: #217DD7;
        }

        .back .card-body{
            padding: 0;

        }

        .back .card-body a{
            color:#fff;
            font-weight: bold;
        }

        .back .card-body .card-text{
            background: #217DD7;
            font-size: 14px;
            color: #fff;
            padding:5px 8px;
        }
    </style>
</head>
<body>
<div class="panels">
    <ul class="list-unstyled">
        <li>
            <div class="front">
                <div class="card equalize" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.blockchain.bg/uploads/team/1803261531.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-title">Благовест Белев</h3>
                        <p class="card-text">Основател</p>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">
                            Благовест е един от създателите на <a href="https://tavex.bg" target="_blank">Tavex Gold & Exchange</a> в България,
                            съучредител на <a href="http://www.btca.bg" target="_blank">Българска Биткойн Асоциация</a> и се занимава активно с
                            криптовалути от 2013 г. насам. През 2014 г. организира най-голямата биткойн конференция в Източна Европа <a
                                    href="https://coinwisdom.blockchain.bg/2014/" target="_blank">CoinWisdom</a>. Неговите професионални интереси са
                            в областта на история и философия на парите, австрийска икономическа школа, инвестиционни стратегии и приложения на
                            блокчейн технологията. Основните му непрофесионални интереси са в сферата на психологията и еволюционното развитие на
                            човека. Благовест има бакалавърска степен по икономика и бизнес администрация от Американския Университет в България.
                        </p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="front">
                <div class="card equalize" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.blockchain.bg/uploads/team/1803261532.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-title">Димитър Велев</h3>
                        <p class="card-text">Финансов директор</p>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">
                            Благовест е един от създателите на <a href="https://tavex.bg" target="_blank">Tavex Gold & Exchange</a> в България,
                            съучредител на <a href="http://www.btca.bg" target="_blank">Българска Биткойн Асоциация</a> и се занимава активно с
                            криптовалути от 2013 г. насам. През 2014 г. организира най-голямата биткойн конференция в Източна Европа <a
                                    href="https://coinwisdom.blockchain.bg/2014/" target="_blank">CoinWisdom</a>. Неговите професионални интереси са
                            в областта на история и философия на парите, австрийска икономическа школа, инвестиционни стратегии и приложения на
                            блокчейн технологията. Основните му непрофесионални интереси са в сферата на психологията и еволюционното развитие на
                            човека. Благовест има бакалавърска степен по икономика и бизнес администрация от Американския Университет в България.
                        </p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="front">
                <div class="card equalize" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.blockchain.bg/uploads/team/1803261533.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3>Лъчезар Благоев</h3>
                        <p class="card-text">Директор "Бизнес развитие"</p>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">
                            Лъчезар завършва бакалавърска степен по бизнес мениджмънт и финанси от St. Francis College, New York през 2011 година.
                            Скоро след това започва да работи като анализатор в Business Intelligence отделът на Телерик - един от ИТ лидерите в
                            България. Като една от основните фигури в изграждането на репортинг средата на фирмата, Лъчезар ръководи създаването на
                            Data Warehouse, на чиято база след това създава сложни статистически модели за откриване на рискове и на нови
                            възможности за генериране на доходи. Като водещ бизнес анализатор, Лъчезар е отговорен за изграждането на съвкупност от
                            мониторинг системи, осигуряващи правилното осъществяване на вътрешно фирмените процеси. Интересът на Лъчезар към
                            иновациите го насочва към blockchain технологиите и така той се присъединява към екипа на BlockChain.bg.
                        </p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<script>
    // --- Equalizer (колони с еднаква височина)---
    $(document).ready(function () {
        var maxHeight = 0;
        $(".equalize").each(function () {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });
        $(".equalize").each(function () {
            $(".equalize").height(maxHeight);
        });
    });
</script>
</body>
</html>