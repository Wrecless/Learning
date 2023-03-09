<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "*n4Sk!O2rp59uxgp";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

echo "Connected to database: " . $db_name;

$sql = "SELECT * FROM articles ORDER BY published_at;";

$results = mysqli_query($connection, $sql);

if ($results === false){
    echo mysqli_error($connection);
}
else 
{
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

    var_dump($articles);
}
