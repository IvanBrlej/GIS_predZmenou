<?php
session_start();
require 'connection.php';

if(isset($_GET['message'])){
    $message = $_GET['message'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kategoria</title>
    <link rel="stylesheet" type="text/css" href="kategoria.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="uvodnaStranka.php" class="active">Domov</a></li>
        <li><a href="kategoria.php">Kategória</a></li>
        <li><a href="vybratieKategorieNaVlozenieOtazky.php">Pridanie otázky</a></li>
        <li><a href="vybratieFormularu.php">Vyplnenie formuláru</a></li>
        <li><a href="adminPrihlasenie.php" class="hover">Admin Prihlásenie</a></li>
    </ul>
</nav>

<li >
    <a href="kategoria.php"></a>
    <span  class="lins_name">Kategória</span>
</li>

<form id="kategoriaForm" action="kategoriaHandler.php" method="post" name="kategoriaForm">
    <input type="text" id="kategoria" name="kategoria" placeholder="Zadajte kategoriu" class="box"><br><br>
    <button type="submit" class="kategoria_btn" id="kategoriaButton" name="kategoriaButton">Pridať kategoriu</button>
</form><br><br>
</body>
</html>