<?php

function fetc_curr(){
    // прави връзка към базата
// ако се счупи нещо прихваща грешката
    try {

        $host = "localhost";
        $dbName = "lesson";
        $user = "root";
        $pass = "";

        $dbh  = new \PDO("mysql:host=$host;dbname=$dbName", $user, $pass,
            array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

        $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
// подготвя зазаявка за базата
    $sth = $dbh->prepare("SELECT `name`, `value`, date FROM `cryptocurrencies` 
                                WHERE tag='BTC' LIMIT 10000");
// изпълнява заявката
    $sth->execute();
//масив с резултата

    while ($result = $sth->fetch(\PDO::FETCH_ASSOC)){
        yield $result;

    }
}
$a = fetc_curr();

foreach ($a as $curr){

    $x[] =[(float)(strtotime($curr['date']) . '000') ,(float)$curr['value']];

}
// преподрежда масива
//$currency_array = array_column($result, 'value', 'name');
// подготвая за AJAX
header('Content-Type: application/json; charset=utf-8');

print_r(json_encode($x, JSON_UNESCAPED_UNICODE));

