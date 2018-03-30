<?php
// прави връзка към базата
// ако се счупи нещо прихваща грешката
$host = "localhost";
$dbName = "lesson";
$user = "root";
$pass = "";

$link = mysqli_connect("localhost", "root", "", "database");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM cryptocurrencies LIMIT 10";
$result = mysqli_query($link, $query);
$i = 0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo $row['name'] . '<br>';
    $breadcrumb = ($i == 0) ? '<br>Link > Link > Link > Link > Link > Link > Link <br>' : '';
    echo $breadcrumb;
    $i++;
}

if ($i = 0){
    $a = link;

} else {
    $a = '';
}