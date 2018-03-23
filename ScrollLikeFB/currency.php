<?php
// идват oт Ajax request
$limit = (intval($_GET['limit']) != 0 ) ? $_GET['limit'] : 10;
$offset = (intval($_GET['offset']) != 0 ) ? $_GET['offset'] : 0;

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
$sth = $dbh->prepare("SELECT `name`, `value`, `date` FROM `cryptocurrencies` 
                                ORDER BY `id` DESC LIMIT $limit OFFSET $offset");
// изпълнява заявката
$sth->execute();
//масив с резултата
$result = $sth->fetchAll(\PDO::FETCH_ASSOC);

if (count($result) > 0) {
    foreach ($result as $res) {
        echo '<h3>' . $res['name'] . $res['value'].$res['date'].'</h3>';
    }
}

