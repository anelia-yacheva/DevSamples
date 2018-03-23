<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/endlessRiver.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/endlessRiver.js"></script>
</head>
<!--<body ng-app="myApp" ng-controller="myCtrl">-->
<body>
<!--<li ng-repeat="currency in data">{{ currency.name}} {{ currency.value }}</li>-->

<!--    Bitcoin: 17679.00 лв.Bitcoin Cash: 1964.00 лв.Ethereum: 1338.00 лв.DASH: 948.00 лв.Zcash: 621.00 лв.Monero: 537.00 лв.Litecoin: 331.00 лв.Ripple: 1.76 лв.-->
<div>
    <ul id="rotator">
<!--        <li ng-repeat="currency in data">{{ currency.name}} {{ currency.value }}</li>-->
    </ul>

</div>
<script>
   updateCurrency();

    function updateCurrency() {
        $.ajax({
            url: "http://localhost/MyScripts/crypto-currency/currency-json-array.php",
            // url: "https://www.demo.stefanov.work/blockchain.bg/modules/currency.php",
            method: "GET",
            success: function (result) {
                var i=0;
                var x = result.find(x => x.name === 'Bitcoin').value
                console.log(x);
                for(i; i< result.length; i++){
                    $("#rotator").append("<li>" + result[i].name+": "+result[i].value+"лв.</li>");
                }

                $("#rotator").endlessRiver({

                    // scrolling speed in ms
                    speed: 50,

                    // pause on hover
                    pause: true,
                });
            }
        })
    }
</script>
</body>
</html>