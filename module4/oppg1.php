<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skjekk av etternavn</title>
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

    // numerisk array
    $tall = array("0", "3", "5", "7", "8", "15");

    // assosiativ array
    $tall1 = array(
        "1 tall" => "0",
        "2 tall" => "3",
        "3 tall" => "5",
        "4 tall" => "7",
        "5 tall" => "8",
        "6 tall" => "15"
    );

    // Skriver ut den numeriske arrayen
    print_r($tall);
    echo "<br>";echo "<br>";

    // Går gjennom den assosiative arrayen og skriver ut nøkkel og verdi
    foreach ($tall1 as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    ?>


</div>
<br><br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>

</body>
</html>