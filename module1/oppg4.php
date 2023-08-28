<!DOCTYPE html>
<html lang="en">
<head>
    <title> Oppgave 2: Instillinger i php.ini</title>
    <a href="index.php" style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px;">Tilbake til oppgaver</a>
</head>
<body>
<?php
// Starter med og definere variablene og setter verdi til tallene
$tall1 = 15;
$tall2 = 30;

//Definerer summen og bruker tidligere variabler for å finne summen
$summert = $tall1 + $tall2;

//Samme prosedyre, bare for gjennomsnitt
$gjennomsnittet = $summert/2;


// Viser resultatet når scriptet blir kjørt
echo  "<br>";
echo  "<br>";
echo "Summen av $tall1 og $tall2 er $summert<br>";
echo "Gjennomsnittet av disse tallene er $gjennomsnittet<br>";
?>
</body>
</html>