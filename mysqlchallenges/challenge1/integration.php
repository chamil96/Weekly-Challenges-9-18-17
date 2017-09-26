<?php
$db = new PDO("mysql:host=localhost;dbname=chamilton;port=8888", "root", "root");

try {
    $results = $db->query("SELECT states FROM challenge1");
} catch (Exception $e) {
    echo "Bad query";
}
$list = $results->fetchAll(PDO::FETCH_ASSOC);
?>
