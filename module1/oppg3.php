<!DOCTYPE html>
<html lang="en">
<head>
    <title>Oppgave 3: Alderen til en person</title>
</head>
<body>

<?php
// Definerer variablene
$alder = 23;
$navn = "Asbjørn";
$interesser = "løping og svømming"
?>

<!-- Viser informasjonen i en tabell -->
<h2>Tabell:</h2>
<table border>
    <tr>
        <th>Navn</th>
        <th>Alder</th>
        <th>Interesser</th>
    </tr>
    <tr>
        <td><?=$navn?></td>
        <td><?=$alder?></td>
        <td><?=$interesser?></td>
    </tr>
</table>

<!-- Viser informasjonen i en nummerert liste -->
<h2>Nummerert liste:</h2>
<ol>
    <li>Navn: <?=$navn?></li>
    <li>Alder: <?=$alder?></li>
    <li>Interesse: <?=$interesser?></li>
</ol>

<!-- Viser informasjonen i en punktmerket liste -->
<h2>Punktmerket liste:</h2>
<ul>
    <li>Navn: <?=$navn?></li>
    <li>Alder: <?=$alder?></li>
    <li>Interesse: <?=$interesser?></li>
</ul>

<!-- Viser informasjonen inne i en paragraf, <p></p> -->
<h2>Paragraf:</h2>
<p>Navn: <?=$navn?><br>Alder: <?=$alder?><br> <?=$interesser?></p>
<a href="index.php" style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px;">Tilbake til oppgaver</a>
</body>
</html>