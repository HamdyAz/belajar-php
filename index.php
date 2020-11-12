<?php
require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");
echo "Nama Hewan : $sheep->name <br>"; // shaun
echo "Hewan berkaki : $sheep->legs <br>"; // 2
echo "Suhu tubuh berdarah dingin : $sheep->cold_blooded <br><br>"; // false

$kodok = new Frog("buduk");
echo "Nama Hewan : $kodok->name <br>"; // shaun
echo "Hewan berkaki : $kodok->legs <br>"; // 2
echo "Suhu tubuh berdarah dingin : $kodok->cold_blooded <br>"; // false
echo $kodok->jump();
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Nama Hewan : $sungokong->name <br>"; // shaun
echo "Hewan berkaki : $sungokong->legs <br>"; // 2
echo "Suhu tubuh berdarah dingin : $sungokong->cold_blooded <br>"; // false
$sungokong->yell(); // "Auooo"
