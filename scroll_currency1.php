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
    <script src="endlessRiver.js"></script>
</head>
<!--<body ng-app="myApp" ng-controller="myCtrl">-->
<body>
<!--<li ng-repeat="currency in data">{{ currency.name}} {{ currency.value }}</li>-->

<!--    Bitcoin: 17679.00 лв.Bitcoin Cash: 1964.00 лв.Ethereum: 1338.00 лв.DASH: 948.00 лв.Zcash: 621.00 лв.Monero: 537.00 лв.Litecoin: 331.00 лв.Ripple: 1.76 лв.-->
<div style="width: 100%;height: 50px; background: #ffd62f; color: white;">
    <ul id="rotator">
<!--        <li ng-repeat="currency in data">{{ currency.name}} {{ currency.value }}</li>-->
    </ul>

</div>
<script>
   updateCurrency();

    function updateCurrency() {
        $.ajax({
           // url: "http://localhost/MyScripts/crypto-currency/currency.php",
            url: "http://localhost/MyScripts/crypto-currency/currency-json-array.php",
            // url: "https://www.demo.stefanov.work/blockchain.bg/modules/currency.php",
            method: "GET",
            success: function (result) {
                /*$("#btc").html("Bitcoin: " + result.Bitcoin + " лв.");
                $("#bch").html("Bitcoin Cash: " + result['Bitcoin Cash'] + " лв.");
                $("#eth").html("Ethereum: " + result.Ethereum + " лв.");
                $("#dash").html("DASH: " + result.DASH + " лв.");
                $("#zec").html("Zcash: " + result.Zcash + " лв.");
                $("#xmr").html("Monero: " + result.Monero + " лв.");
                $("#ltc").html("Litecoin: " + result.Litecoin + " лв.");
                $("#xrp").html("Ripple: " + result.Ripple + " лв.");*/

                var i=0;
                console.log(result);
                for(i; i< result.length; i++){
                    $("#rotator").append("<li>" + result[i].name+": "+result[i].value+"</li>");
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
<script>

    /*var app = angular.module("myApp", []);

    app.controller("myCtrl", function ($scope, $http, $interval) {
        $scope.displayData = function () {
            $http.get('http://localhost/MyScripts/crypto-currency/currency-json-array.php')
                .then(function (result) {
                    $scope.data = result.data;
                    console.log(result.data);
                    $scope.status = result.statusText;

                });
        };
        $scope.displayData();

    });
    $("#rotator").endlessRiver({

        // scrolling speed in ms
        speed: 50,

        // pause on hover
        pause: true,
    });*/
</script>
</body>
</html>