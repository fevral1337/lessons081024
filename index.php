<?php
echo "hello pidor" ;

$zxcursed = new PDO("mysql:host=localhost;dbname=HACPAJI;charset=utf8","root", "");

$mamo4ka = "select * from users";

$vov4ik = $zxcursed->prepare($mamo4ka);
$vov4ik->execute();

print_r($vov4ik->fetchAll());