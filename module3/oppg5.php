<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valider E-post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <?php

    //Antall hvetekorn og den totale summen
    $hveteKorn = 1;
    $totaleKorn = 0;

    //Går gjennom alle 64 deltene på et skjakkbrett
    for ($i = 1; $i <= 64; $i++) {
        echo 'Felt: ' . str_pad($i, 2, " ", STR_PAD_LEFT) . '   Hvete: ' . str_pad(number_format($hveteKorn), 24, " ", STR_PAD_LEFT) . "<br/>\n";

        $totaleKorn += $hveteKorn;
        $hveteKorn *= 2;

        if ($hveteKorn >= 1000000000) {
            echo "Milliarder<br/>";
        }
        if ($hveteKorn >= 1000000000000) {
            echo "Billiarder<br/>";
        }
        if ($hveteKorn >= 1000000000000000) {
            echo "Trilliarder<br/>";
        }
    }

    // Converterer den totale summen av korn til gram (1 grain = 0.035 grams)
    $total_grams = $totaleKorn * 0.035;

    // konverterer gram til tonn (1 ton = 1,000,000 grams)
    $total_tons = $total_grams / 1000000;

    echo "Korn Totalt: " . number_format($totaleKorn) . "<br/>";
    echo "Vekt i tonn: " . $total_tons . "<br/>";
    ?>

    <br>
    <br>
    <a href="Index.php" class="button">Tilbake til oppgaver</a>
</div>

</body>
</html>