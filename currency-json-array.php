<?php
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
$sth = $dbh->prepare("SELECT `name`, `value` FROM `cryptocurrencies` 
                                ORDER BY `id` DESC LIMIT 8");
// изпълнява заявката
$sth->execute();
//масив с резултата
$result = $sth->fetchAll(\PDO::FETCH_ASSOC);
header('Content-Type: application/json; charset=utf-8');
echo (json_encode($result));